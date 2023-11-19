<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">

  <title>Kontak</title>

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
                <h1 class="sen-jumbotron" style="color: black;">Kontak</h1>
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

    <div class="container top" id="middle">
        <div class="row">
            <div class="col-sm-12">
                            <form action="submit.php" method="POST">
                            <div class="form-group">
                            <div class="form-label-group">
                                <h4>Nama</h4>
                                <input class="form-control1" style="width:400px; border-color: black" type="text" name="nama_user" placeholder="Nama" required>
                            </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <h4>Email</h4>
                                    <input class="form-control1" style="width: 400px; border-color: black" type="text" name="email_user" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <h4>Pesan</h4>
                                    <textarea class="form-control1" style="width: 700px; border-color: black" cols="30" rows="10" name="pesan" placeholder="Pesan" required></textarea>
                                </div>
                            </div>

                            <!-- <div class="col-sm-12">
                            <button class="btn btn-shop font-weight-bold" style="color: black; font-size: 13pt; height: 40px; padding:0">Kirim</button>
                            <h2 class="sen" style="color: black;">&nbsp;</h2>
                            </div>-->

                            <div class="form-group">
                            <input class="btn btn-sm btn-success font-weight-bold" style="color: black; font-size: 13pt; height: 40px; padding:0; width: 100px; border-color: black" type="submit" name="submit" value="Kirim">
                            </div>
                            </form> 
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