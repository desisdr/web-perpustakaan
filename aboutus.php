<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

  <title>Tentang Kami</title>

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
                <h1 class="sen-jumbotron" style="color: black;">Tentang Kami</h1>
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
              <div class="col-sm-6">
                <h2 class="senbold" style="color: black;">Tentang</h2>
                <h3 class="sen" style="color: black;">&nbsp;</h3>
                <h4 class="sen" style="color: black; font-size: 17pt; text-align: justify;">Perpustakaan Daerah (Pusda) Kabupaten Dairi diberi nama Perpustakaan Raja Naga Jambe di Taman Rekreasi Sidikalang diresmikan pada Kamis, 4 Mei 2023.</h4>
                <h4 class="sen" style="color: black; font-size: 17pt; text-align: justify;">Perpustakaan Daerah Kabupaten Dairi dibangun untuk meningkatkan minat baca bagi masyarakat Dairi. Perpustakaan Daerah Kabupaten Dairi memiliki fasilitas layanan peminjaman buku dan ruang baca yang disesuaikan dengan usia pembaca.</h4>
                <h4 class="sen" style="color: black; font-size: 17pt; text-align: justify;">Perpustakaan Dairi Kabupaten Dairi beralamat di Jl. K.H. Dewantara, No. 5-B, Kota Sidikalang, Kabupaten Dairi, 22218</h4>
                <h2 class="sen" style="color: black;">&nbsp;</h2>
              </div>
              <div class="col-md-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.2452568469503!2d98.31215937455785!3d2.7435076555131164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303037d33c7c8b9f%3A0xa292ebcaee2a96a5!2sPerpustakaan%20Daerah%20Kabupaten%20Dairi%20-%20Raja%20Naga%20Jambe!5e0!3m2!1sid!2sid!4v1693234412111!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  <h2 class="sen" style="color: black;">&nbsp;</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
  <button class="btn btn-shop font-weight-bold" style="margin-left: 10px;font-size: 10pt; height: 25px; padding: 0; width: 80px;" onclick="window.location.href='#'">Shop Voal</button>
  </div> 
</body>
  <!-- Footer -->
  <?php include('footer.php') ?>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.js"></script>

</html>