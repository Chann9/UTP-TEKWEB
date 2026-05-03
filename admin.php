<?php
include 'layout/header.php';
include 'database.php';

$db = new Database();

if(isset($_POST['tambah'])){
    $db->insertProduk(
        $_POST['nama'],
        $_POST['kategori'],
        $_POST['harga'],
        $_POST['gambar']
    );
}

if(isset($_GET['hapus'])){
    $db->deleteProduk($_GET['hapus']);
}
?>

<div class="container mt-5 text-center">
  <h2 class="fw-bold mb-4">Admin Produk</h2>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form method="POST">

        <input type="text" name="nama" placeholder="Nama Produk" class="form-control mb-2">
        <input type="text" name="kategori" placeholder="Kategori" class="form-control mb-2">
        <input type="number" name="harga" placeholder="Harga" class="form-control mb-2">
        <input type="text" name="gambar" placeholder="Nama file gambar" class="form-control mb-2">

        <button name="tambah" class="btn btn-primary w-100">Tambah</button>
      </form>
    </div>
  </div>
</div>

  <hr>

  <table class="table">
    <tr>
      <th class="ps-4">Nama</th>
      <th>Kategori</th>
      <th>Harga</th>
      <th>Aksi</th>
    </tr>

    <?php
    $data = $db->getAllProduk();
    while($row = $data->fetch_assoc()){
    ?>
    <tr>
      <td class="ps-4"><?php echo $row['nama']; ?></td>
      <td><?php echo $row['kategori']; ?></td>
      <td><?php echo $row['harga']; ?></td>
      <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="?hapus=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </table>
</div>

<?php include 'layout/footer.php'; ?>