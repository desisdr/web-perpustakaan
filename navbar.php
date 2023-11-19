<!doctype html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <style>
    /*menu dropdown saat diarahkan kursor*/
    .nav-item:hover .dropdown-menu {
      display: block;
    }

    dropdown-toggle {
      margin-top: 0px !important;
    }

    nav.scrolled .nav-link {
      color: white !important;
    }

    nav.scrolled .change {
      filter: invert(43%) hue-rotate(88deg) brightness(128%) contrast(1000%);
    }

    nav.scrolled i {
      color: white !important;
    }

    nav.scrolled .search-input::-webkit-input-placeholder {
      color: white !important;
    }

    nav.scrolled input {
      color: white !important;
    }

    nav.scrolled .dropdown-menu {
      box-shadow: none !important;
    }
  </style>
</head>

<body>
  <nav class="navbar bg-white navbar-expand-sm sen px-9 fixed-top" style="padding-top: 0px; padding-bottom: 0px">
    <a class="navbar-brand" href="index.php">
      <svg width="150">
        <img class="change" src="assets/images/logodairi.png" width="60" alt="">
      </svg>
    </a>

    <ul class="navbar-nav" style="height: 90px; padding-top: 25px">
      <!-- Search -->
      <li class="nav-item">
        <form class="form-inline" method="GET" action="buku.php?p=buku">
          <button class="btn btn-outline-dark p-0 mx-2 no-bg" type="submit" style="border:none; width: 15pt; height: 15pt;"><i class="fa fa-search" style="font-size: 15pt"></i></button>
          <input name="keyword" class="form-control mr-sm-2 search-input" type="search" placeholder="Cari" aria-label="Cari" style="width: 100px; background-color: transparent;">
        </form>
      </li>

      <!-- Menu -->
      <li class="nav-item dropdown megamenu-li" style="height: 60px;">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black; height: 90px; ">
          <span id="nav-shop" class="hov-underline" onclick="window.location.href='index.php';">Menu</span>
        </a>

        <div class="dropdown-menu megamenu border-atas" aria-labelledby="navbarDropdownMenuLink" style="margin-top: 0px;">
          <div class="row px-6">
            <div class="col-sm-6 col-lg-3">
              <p class="font-weight-bold" style="margin-left: 24px;">Profil</p>
              <a class="dropdown-item" href="visimisi.php">Visi dan Misi</a>
              <a class="dropdown-item" href="tugaspokok.php">Tugas Pokok dan Fungsi</a>
            </div>

            <div class="col-sm-6 col-lg-3">
              <p class="font-weight-bold" style="margin-left: 24px;">Buku</p>
              <a class="dropdown-item" href="buku.php">Data Buku</a>
              <a class="dropdown-item" href="pinjambuku.php">Tata Cara Peminjaman Buku</a>
            </div>
          </div>
        </div>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto" style="height: 90px; padding-top: 25px">

      <!-- Buku -->
      <li class="nav-item dropdown megamenu-li" style="height: 60px;">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black; height: 90px; ">
          <span id="nav-shop" class="hov-underline" onclick="window.location.href='buku.php';">Buku</span>
        </a>

        <!-- <div class="dropdown-menu megamenu border-atas" aria-labelledby="navbarDropdownMenuLink" style="margin-top: 0px;">
          <div class="row px-6">
            <div class="col-sm-6 col-lg-3">
              <p class="font-weight-bold" style="margin-left: 24px;">Kategori</p>
              <a class="dropdown-item" href="#">Pendidikan</a>
              <a class="dropdown-item" href="#">Pengetahuan Alam</a>
              <a class="dropdown-item" href="#">Ilmu Sosial</a>
              <a class="dropdown-item" href="#">Ilmu Pengetahuan Umum</a>
            </div>

            <div class="col-sm-6 col-lg-3">
              <p class="font-weight-bold" style="margin-left: 24px;">Kategori</p>
              <a class="dropdown-item" href="#">Bahasa</a>
              <a class="dropdown-item" href="#">Hukum</a>
              <a class="dropdown-item" href="#">Sastra & Budaya</a>
              <a class="dropdown-item" href="#">Sosial & Politik</a>
            </div>

            <div class="col-sm-6 col-lg-3">
              <p class="font-weight-bold" style="margin-left: 24px;">Kategori</p>
              <a class="dropdown-item" href="#">Pertanian</a>
              <a class="dropdown-item" href="#">Lingkungan</a>
              <a class="dropdown-item" href="#">Ekonomi & Keuangan</a>
              <a class="dropdown-item" href="#">Lainnya</a>
            </div>
          </div>
        </div> -->
      </li>

      <!-- Virtual Tour -->
      <li class="nav-item">
        <a class="nav-link hov-underline" style="color: black" href="virtualtour/index.html">Tour</a>
      </li>

      <!-- Login -->
      <li class="nav-item dropdown" style="height: 90px">
        <a class="nav-link dropdown-toggle" href="login.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black; height: 90px"><span class="hov-underline" onclick="window.location.href='dashboard/login.php';">Masuk</span>
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="text-align: center; margin-left: -120px; padding-top: 20px; width: 300px; box-shadow: 4px 8px 28px #dee2e6; margin-top: -40px">
          <button class="dropdown-item btn btn-dark mx-auto" onclick="window.location.href='dashboard/login.php'" style="color: white; text-transform: none; width: 250px; height: 40px; border: 1px solid black"><b>Masuk</b></button>

          <p class="dropdown-item no-bg">Belum punya akun?<button class="bold" style="text-transform: none; border: none; background-color: transparent; text-decoration: underline; font-size: 10pt; outline: none; height: 20px" onclick="window.location.href='dashboard/register.php'">Daftar</button></p>
        </div>
      </li>
    </ul>
  </nav>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#search").keyup(function() {
        var searchText = $(this).val();
        if (searchText != '') {
          $.ajax({
            url: 'search.php',
            method: 'post',
            data: {
              query: searchText
            },
            success: function(response) {
              $("#show-list").html(response);
            }
          });
        } else {
          $("#show-list").html('');
        }
      });
      $(document).on('click', 'a', function() {
        $("#search").val($(this).text());
        $("#show-list").html('');
      });
    });
  </script>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.js"></script>
</body>

</html>