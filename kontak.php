<?php include 'layout/header.php'; ?>

<div class="container mt-5">

  <div class="text-center mb-4">
    <h2>Kontak Kami</h2>
    <hr class="w-25 mx-auto">
  </div>

  <div class="row justify-content-center">
    <div class="col-md-6">

      <form>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="nama" placeholder="Nama">
          <label for="nama">Nama</label>
        </div>

        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email" placeholder="Email">
          <label for="email">Email</label>
        </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="nohp" placeholder="No HP">
          <label for="nohp">No HP</label>
        </div>

        <div class="form-floating mb-3">
          <textarea class="form-control" id="message" style="height:120px"></textarea>
          <label for="message">Message</label>
        </div>

        <button class="btn btn-primary w-100">Kirim</button>

      </form>

    </div>
  </div>

</div>

<?php include 'layout/footer.php'; ?>