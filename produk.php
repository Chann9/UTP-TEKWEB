<?php 
include 'layout/header.php'; 
include 'database.php';

$db = new Database();
?>

<div class="container mt-5">

  <div class="text-center mb-4">
    <h2 class="fw-bold">🎵 Produk Audio</h2>
  </div>

  <div class="row">
    <?php 
    $data = $db->getAllProduk();
    $count = 0;

    while($row = $data->fetch_assoc()){
      if($row['kategori'] == 'Audio' && $count < 8){
    ?>

    <div class="col-md-3 text-center mb-4">

      <?php if($count % 4 == 0){ ?>
        <img src="assets/img/<?php echo $row['gambar']; ?>" class="rounded float-start img-fluid">
      <?php } elseif($count % 4 == 1){ ?>
        <img src="assets/img/<?php echo $row['gambar']; ?>" class="rounded mx-auto d-block img-fluid">
      <?php } elseif($count % 4 == 2){ ?>
        <div class="text-center">
          <img src="assets/img/<?php echo $row['gambar']; ?>" class="rounded img-fluid">
        </div>
      <?php } else { ?>
        <img src="assets/img/<?php echo $row['gambar']; ?>" class="rounded float-end img-fluid">
      <?php } ?>

      <h6 class="mt-2"><?php echo $row['nama']; ?></h6>
      <p class="small text-muted">Rp <?php echo $row['harga']; ?></p>

      <button class="btn btn-warning btn-sm">🛒</button>
      <button class="btn btn-success btn-sm">Buy</button>

    </div>

    <?php 
        $count++;
      }
    } 
    ?>
  </div>

  <div class="text-center mt-5 mb-4">
    <h2 class="fw-bold">🎧 Produk Earphone</h2>
  </div>

  <div class="row">
    <?php 
    $data = $db->getAllProduk();
    $count = 0;

    while($row = $data->fetch_assoc()){
      if($row['kategori'] == 'Earphone' && $count < 8){
    ?>

    <div class="col-md-3 text-center mb-4">

      <?php if($count % 4 == 0){ ?>
        <img src="assets/img/<?php echo $row['gambar']; ?>" class="rounded float-start img-fluid">
      <?php } elseif($count % 4 == 1){ ?>
        <img src="assets/img/<?php echo $row['gambar']; ?>" class="rounded mx-auto d-block img-fluid">
      <?php } elseif($count % 4 == 2){ ?>
        <div class="text-center">
          <img src="assets/img/<?php echo $row['gambar']; ?>" class="rounded img-fluid">
        </div>
      <?php } else { ?>
        <img src="assets/img/<?php echo $row['gambar']; ?>" class="rounded float-end img-fluid">
      <?php } ?>

      <h6 class="mt-2"><?php echo $row['nama']; ?></h6>
      <p class="small text-muted">Rp <?php echo $row['harga']; ?></p>

      <button class="btn btn-warning btn-sm">🛒</button>
      <button class="btn btn-success btn-sm">Buy</button>

    </div>

    <?php 
        $count++;
      }
    } 
    ?>
  </div>

</div>

<?php include 'layout/footer.php'; ?>