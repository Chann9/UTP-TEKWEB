<?php 
include 'layout/header.php'; 
include 'database.php';

$db = new Database();
?>

<div class="container mt-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold">Produk Audio</h2>
  </div>

  <div class="row">
    <?php 
    $data = $db->db->query("SELECT * FROM produk WHERE kategori='Audio' LIMIT 4");
    while($row = $data->fetch_assoc()){
    ?>

    <div class="col-6 col-md-3 mb-4">
      <div class="card h-100 shadow-sm">
        <img src="img/<?php echo $row['gambar']; ?>" 
             class="card-img-top"
             style="height:160px; object-fit:cover;">

        <div class="card-body text-center">
          <h6 class="card-title"><?php echo $row['nama']; ?></h6>
          <p class="text-muted">Rp <?php echo $row['harga']; ?></p>
        </div>

        <div class="card-footer text-center bg-white border-0">
          <button class="btn btn-warning btn-sm">🛒</button>
          <button class="btn btn-success btn-sm">Buy</button>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>

  <div class="text-center mt-5 mb-4">
    <h2 class="fw-bold">Produk Earphone</h2>
  </div>

  <div class="row">
    <?php 
    $data = $db->db->query("SELECT * FROM produk WHERE kategori='Earphone' LIMIT 4");
    while($row = $data->fetch_assoc()){
    ?>
    <div class="col-6 col-md-3 mb-4">
      <div class="card h-100 shadow-sm">
        <img src="img/<?php echo $row['gambar']; ?>" 
             class="card-img-top"
             style="height:160px; object-fit:cover;">

        <div class="card-body text-center">
          <h6 class="card-title"><?php echo $row['nama']; ?></h6>
          <p class="text-muted">Rp <?php echo $row['harga']; ?></p>
        </div>

        <div class="card-footer text-center bg-white border-0">
          <button class="btn btn-warning btn-sm">🛒</button>
          <button class="btn btn-success btn-sm">Buy</button>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
<?php include 'layout/footer.php'; ?>