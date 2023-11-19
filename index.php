<?php
session_start();
require_once 'dashboard/config/koneksi.php';

$ambilBuku = $conn->query("SELECT * FROM tb_buku ORDER BY id_buku DESC") or die(mysqli_error($conn));

?> 

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

  <!-- CSS Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- JavaScript Bootstrap (Popper.js dan JS Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <title>Perpustakaan Daerah Kabupaten Dairi</title>

  <style>
    body {
      overflow-x: hidden;
      /*menyembunyikan scroll bar kiri/kanan*/
    }

    .truncate-text {
      white-space: nowrap;
      /* Prevent text from wrapping to the next line */
      overflow: hidden;
      /* Hide overflowing text */
      text-overflow: ellipsis;
      /* Display ellipsis (...) for overflowed text */
      max-width: 200px;
      /* Adjust the maximum width as needed */
      /* You can also use max-height to limit the text height */
    }
  </style>
</head>

<body>
  <div class="content">
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid" style="background-image: url(assets/images/image1.png);
    background-position: center; background-repeat: no-repeat; background-size: cover;">
      <div class="container welcome">
        <div class="row h-100">
          <div class="col-sm-12 text-center my-auto">
            <div class="row">
              <div class="col-sm-12">
                <h1 class="sen-jumbotron" style="color: white;">Selamat Datang</h1>
                <h1 class="senbold" style="color: white;">Perpustakaan Daerah Kabupaten Dairi</h1>
              </div>
            </div>

            <div class="row m-3">
              <div class="col-sm-12">
                <button class="btn btn-shop font-weight-bold" style="color: white; font-size: 10pt; height: 25px; padding:0" onClick="document.getElementById('middle').scrollIntoView();">Telusuri</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Slider -->
    <div id="middle" class="container cor sen" style="height: 550px">
      <h2 style="margin-left: -30px; letter-spacing: -1pt; font-family: sen">Galeri Perpustakaan</h2>

      <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-auto " role="listbox">
          <!--carousel-item-->
          <div class="carousel-item col-md-3 active">
            <div class="card">
              <img src="assets/images/image2.png" class="card-img-top" alt="">
              <div class="card-body">
                <p class="font-weight-bold jenis">Perpustakaan Daerah</p>
                <p class="warna">Kabupaten Dairi</p>
              </div>
            </div>
          </div>

          <div class="carousel-item col-md-3">
            <div class="card">
              <img src="assets/images/image2.png" class="card-img-top" alt="">
              <div class="card-body">
                <p class="font-weight-bold jenis">Perpustakaan Daerah</p>
                <p class="warna"></p>
              </div>
            </div>
          </div>

          <div class="carousel-item col-md-3">
            <div class="card">
              <img src="assets/images/image2.png" class="card-img-top" alt="">
              <div class="card-body">
                <p class="font-weight-bold jenis">Perpustakaan Daerah</p>
                <p class="warna"></p>
              </div>
            </div>
          </div>

          <div class="carousel-item col-md-3">
            <div class="card">
              <img src="assets/images/image2.png" class="card-img-top" alt="">
              <div class="card-body">
                <p class="font-weight-bold jenis">Perpustakaan Daerah</p>
                <p class="warna"></p>
              </div>
            </div>
          </div>

          <div class="carousel-item col-md-3">
            <div class="card">
              <img src="assets/images/image2.png" class="card-img-top" alt="">
              <div class="card-body">
                <p class="font-weight-bold jenis">Perpustakaan Daerah</p>
                <p class="warna"></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Panah slider -->
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev" style="width: 10%">
          <i class="fa fa-chevron-left fa-lg" style="color: black"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next" style="width: 10%">
          <i class="fa fa-chevron-right fa-lg" style="color: black"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- Book Collection -->

    <!-- <div class="container sen">
      <div class="row">
        <div class="col-lg-12">
          <h2 style="font-family: sen; padding:10px 10px 10px 0px;">Daftar Buku Perpustakaan :</h2>
          <hr />
        </div>
        <?php
        $no = 1;

        while ($pecahBuku = $ambilBuku->fetch_assoc()) {

        ?>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="text-center" style="border-top: 1px solid grey;border-bottom: 1px solid grey; margin-bottom:10px; margin-top:15px;">
                  <h1 class="truncate-text" style="font-size: 15px;margin: 10px;height:35px"><?= $pecahBuku['judul_buku']; ?></h1>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <?php $imagePath = preg_replace('/^\.\.\//', '', $pecahBuku['images']); ?>
                <img src="<?= $imagePath; ?>" width="100%" height="232">
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <?php if ($pecahBuku['jumlah_buku'] == 0) { ?>
                  <div style="padding:10px;">
                    <p style="color: red;">Buku habis</p>
                    <?php $ambilBukubyIDLast = $conn->query("SELECT * FROM tb_transaksi where id_buku = '$pecahBuku[id_buku]' AND status = 'pinjam' ORDER BY id_buku DESC LIMIT 1") or die(mysqli_error($conn)); ?>
                    <?php $pecahBukuTransaksi = $ambilBukubyIDLast->fetch_assoc(); ?>
                    <p style="color: red;">Tersedia pada <br><?= $pecahBukuTransaksi['tgl_kembali']; ?></p>
                  </div>
                <?php } else { ?>
                  <div style="padding:10px;border-bottom: 1px solid grey;">
                    <p>Buku tinggal <?= $pecahBuku['jumlah_buku']; ?></p>
                    <a href="dashboard/index.php?p=transaksi&aksi=tambah&id_buku=<?= $pecahBuku['id_buku']; ?>" class="btn btn-primary" style="border-color: #007bff !important;border-radius: 10px !important;">Pinjam</a><br>  -->
                    <!-- Tambahkan ini di dalam loop buku Anda -->
                  <!-- </div>
                <?php } ?>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div> -->

  </div>
  <button class="btn btn-shop font-weight-bold" style="margin-left: 10px;font-size: 10pt; height: 25px; padding: 0; width: 80px;" onclick="window.location.href='#'"></button>
  </div>

</body>
<!-- Footer -->
<?php include('footer.php') ?>

<!-- <script>
    //mengubah style navbar saat footer aktif
    var navbar = document.querySelector('nav');
    var konten = $(".content");

    window.onscroll = function() {
      var height = konten.height();
      if (window.pageYOffset > height) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    };
    </script> -->

<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>