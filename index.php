<?php include 'layout/header.php'; ?>

<style>
.hero {
    background: url('assets/img/bg-audio.jpg') no-repeat center center;
    background-size: cover;
    height: 80vh;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.hero-overlay {
    background: rgba(0,0,0,0.6);
    padding: 40px;
    border-radius: 10px;
}
</style>

<div class="hero">
  <div class="hero-overlay">
    <h1 class="display-4">SoundCheck</h1>
    <p class="lead">Toko Audio & Earphone Terbaik</p>
    <a href="produk.php" class="btn btn-warning">Lihat Produk</a>
  </div>
</div>

<?php include 'layout/footer.php'; ?>