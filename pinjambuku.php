<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

  <title>Tata Cara Peminjaman Buku</title>

  <style>
      body { 
        overflow-x: hidden;           /*menyembunyikan scroll bar kiri/kanan*/
      }
  </style>
</head>
<body>
  <div class="content">
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid" style="background-color: white;
      background-position: center; background-repeat: no-repeat; background-size: cover;">
      <div class="container welcome">
        <div class="row h-100">
          <div class="col-sm-12 text-center my-auto">
            <div class="row">
              <div class="col-sm-12">
                <h1 class="sen-jumbotron" style="color: black;">Tata Cara Peminjaman Buku</h1>
                <h1 class="senbold" style="color: black;">Perpustakaan Daerah Kabupaten Dairi</h1>
              </div>
            </div>
            <div class="row m-3">
              <div class="col-sm-12">
                <button class="btn btn-shop font-weight-bold" style="color: black; font-size: 10pt; height: 25px; padding:0" onClick="document.getElementById('middle').scrollIntoView();">Lihat</button>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container subwelcome" id="middle">
        <div class="row h-100">
          <div class="col-sm-12 text-center my-auto">
            <div class="row">
              <div class="col-sm-12">
                <h1 class="senbold" style="color: black;">Tata Cara Peminjaman Buku</h1>
                <h3 class="sen" style="color: black;">&nbsp;</h3>
                <h4 class="sen" style="color: black; font-size: 17pt; text-align: left;">1. Memiliki akun dan keanggotaan Perpustakaan Daerah Kabupaten Dairi</h4>
                <h4 class="sen" style="color: black; font-size: 17pt; text-align: left;">2. Memilih buku yang tersedia untuk dipinjam</h4>
                <h4 class="sen" style="color: black; font-size: 17pt; text-align: left;">3. Masuk ke halaman dashboard dan isi tanggal peminjaman dan pengembalian buku</h4>
                <h4 class="sen" style="color: black; font-size: 17pt; text-align: left;">4. Tunggu konfirmasi Admin untuk reservasi buku Anda</h4>
                <h4 class="sen" style="color: black; font-size: 17pt; text-align: left;">5. Buku dapat diambil di Perpustakaan Daerah Kabupaten Dairi</h4>
                <h2 class="sen" style="color: black;">&nbsp;</h2>

                <div class="row m-3">
                <div class="col-sm-12">
                <button class="btn btn-primary" style="color: white; font-size: 15pt; height: 40px; padding:0; width: 230px; background-color: black; border-radius: 8px !important" onClick="window.location.href='buku.php'">Lihat Daftar Buku</button>
                <h2 class="sen" style="color: black;">&nbsp;</h2>
                </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
  <button class="btn btn-shop font-weight-bold" style="margin-left: 10px;font-size: 10pt; height: 25px; padding: 0; width: 80px;" onclick="window.location.href='#'"></button>
  </div> 
</body>
  <!-- Footer -->
  <?php include('footer.php') ?>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.js"></script>

</html>