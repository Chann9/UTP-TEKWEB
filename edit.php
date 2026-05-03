<?php
include 'layout/header.php';
include 'database.php';

$db = new Database();
$id = $_GET['id'];
$data = $db->db->query("SELECT * FROM produk WHERE id=$id")->fetch_assoc();

if(isset($_POST['update'])){
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];

    $db->db->query("UPDATE produk SET 
        nama='$nama',
        kategori='$kategori',
        harga='$harga',
        gambar='$gambar',
        WHERE id=$id");

    header("Location: admin.php");
}
?>

<div class="container mt-5">

  <div class="text-center mb-4">
    <h2>Edit Produk</h2>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-6">
      <form method="POST" class="card p-4 shadow-sm">

        <div class="form-floating mb-3">
          <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
          <label>Nama Produk</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" name="kategori" class="form-control" value="<?php echo $data['kategori']; ?>">
          <label>Kategori</label>
        </div>

        <div class="form-floating mb-3">
          <input type="number" name="harga" class="form-control" value="<?php echo $data['harga']; ?>">
          <label>Harga</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" name="gambar" class="form-control" value="<?php echo $data['gambar']; ?>">
          <label>Nama File Gambar</label>
        </div>

        <button name="update" class="btn btn-primary w-100 mb-2">Update</button>
        <a href="admin.php" class="btn btn-secondary w-100">Kembali</a>
      </form>
    </div>
  </div>
</div>
<?php include 'layout/footer.php'; ?>