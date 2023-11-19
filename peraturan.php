<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

  <title>Peraturan Perpustakaan Daerah Kabupaten Dairi</title>

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
                <h1 class="sen-jumbotron" style="color: black;">Peraturan Tata Tertib</h1>
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
                <h1 class="senbold" style="color: black;">Tata Tertib</h1>
                <h3 class="sen" style="color: black;">&nbsp;</h3>
                <h4 class="sen" style="color: black; font-size: 17pt; text-align: left;">1. Kartu anggota harus dibawa setiap kali berkunjung</h4>
                <h4 class="sen" style="color: black; font-size: 17pt; text-align: left;">2. Kartu anggota tidak boleh dipinjamkan kepada orang lain</h4>
                <h4 class="sen" style="color: black; font-size: 17pt; text-align: left;">3. Jika kartu anggota hilang, wajib membawa surat keterangan untuk penggantiannya</h4>
                <h4 class="sen" style="color: black; font-size: 17pt; text-align: left;">4. Jika anggota terlambat mengembalikan buku, maka akan dikenakan sanksi atau denda</h4>
                <h4 class="sen" style="color: black; font-size: 17pt; text-align: left;">5. Jika anggota menghilangkan buku yang dipinjam, maka anggota harus mengganti dengan buku &nbsp;&nbsp;&nbsp;&nbsp;yang sama</h4>
                <h2 class="sen" style="color: black;">&nbsp;</h2>
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