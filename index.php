<?php include 'layout/header.php'; ?>

<style>
.hero {
    background: url('img/bg-audio.jpeg') no-repeat center center;
    background-size: cover;
    height: 90vh;
    display: flex;
    align-items: center;
}

.hero::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 90vh;
    background: rgba(0,0,0,0.5);
}

.hero-content {
    position: relative;
    color: white;
}
</style>

<div class="hero">
  <div class="container">
    <div class="hero-content">
      <h1 class="display-4">Upgrade Audio Kalian Sekarang Jugaaa</h1>
      <p>Temukan produk audio terbaik di store kami!</p>
      <a href="produk.php" class="btn btn-danger">Lihat Semua Produk</a>
    </div>
  </div>
</div>

<?php include 'layout/footer.php'; ?>