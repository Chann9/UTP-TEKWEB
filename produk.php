<?php 
include 'layout/header.php'; 
include 'database.php';

$db = new Database();
$data = $db->getAllProduk();
?>

<div class="container mt-5">
  <h2 class="text-center mb-4">Produk</h2>

  <div class="row">

  <?php while($row = $data->fetch_assoc()) { ?>
    
    <div class="col-md-3 mb-4">
      <div class="card h-100">
        <img src="assets/img/<?php echo $row['gambar']; ?>" class="card-img-top">

        <div class="card-body text-center">
          <h5><?php echo $row['nama']; ?></h5>
          <p class="text-muted"><?php echo $row['kategori']; ?></p>
          <p>Rp <?php echo $row['harga']; ?></p>
          <p><?php echo substr($row['deskripsi'],0,50); ?>...</p>

          <button class="btn btn-warning btn-sm">Keranjang</button>
          <button class="btn btn-success btn-sm">Beli</button>
        </div>
      </div>
    </div>

  <?php } ?>

  </div>
</div>

<?php include 'layout/footer.php'; ?>