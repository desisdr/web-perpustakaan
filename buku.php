<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();
require_once 'dashboard/config/koneksi.php';

if (isset($_GET['filter'])) {
  $filter = $conn->real_escape_string($_GET['filter']);
  $query = "SELECT * FROM tb_buku WHERE kategori = '$filter'";
} elseif (isset($_GET['keyword'])) {
  $key = "%" . $conn->real_escape_string($_GET['keyword']) . "%";
  $query = "SELECT * FROM tb_buku WHERE judul_buku LIKE '$key'";
} else {
  $query = "SELECT * FROM tb_buku ORDER BY id_buku DESC";
}

$ambilBuku = $conn->query($query) or die(mysqli_error($conn));
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

  <title>Daftar Buku Perpustakaan Daerah</title>

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

  <div class="container sen">
    <hr /><hr /><hr /><hr />
    <h2 style="font-family: sen; padding:10px 10px 10px 0px;">Daftar Buku Perpustakaan</h2>
    <hr />
    <div class="row">
        <div class="col-lg-3 mb-3">
            <div class="list-group">
                <a href="buku.php" class="list-group-item">KATEGORI</a>
                <?php 
                    $Qkategori = mysqli_query($conn, "select * from tb_kategori order by nama_kategori ASC");
                    $kategori = mysqli_fetch_assoc($Qkategori);

                    do {
                ?>
                <a href="?filter=<?=$kategori['nama_kategori'];?>" class="list-group-item"><?=$kategori['nama_kategori']; ?></a>
                <?php 
                    } while($kategori = mysqli_fetch_assoc($Qkategori));
                ?>
             </div>
      </div> 

                <div class="col-lg-9 mt-3"> 
                  <div class="row">
                  <div class="col-lg-12 mt-3"> 
                    <?php if (isset($_GET['s'])) { ?>
                        <a href="?p=buku" class="btn btn-primary mb-3"><i class="fa fa-arrow-left"></i> Kembali</a>
                    <?php } ?>
                    <form method="GET" action="buku.php">
                        <div class="input-group mb-3">
                            <input type="hidden" name="p" value="buku">
                            <input type="text" class="form-control" name="keyword" placeholder="Cari buku berdasarkan judul buku">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" style="border-radius: 8px !important; height: 35px; background-color: black;">Cari</button>
                            </div>
                        </div>
                    </form> 
                 </div>
                </div>

                <div class="col-lg-12 mt-3 mb-5">
                  <table border="1" class="table table-striped">
                    <tr>
                      <td style="text-align: center;">No</td>
                      <td style="text-align: center;">Judul Buku</td>
                      <td style="text-align: center;">Status</td>
                      <td style="text-align: center;">Aksi</td>
                    </tr>
                    <?php
                    $no = 1;
                    while ($pecahBuku = $ambilBuku->fetch_assoc()) {
                    ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $pecahBuku['judul_buku']; ?></td>
                      <td>
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                          <?php if ($pecahBuku['jumlah_buku'] == 0) { ?>
                            <div style="padding:5px;">
                              <p style="color: red;">Buku habis</p>
                              <?php $ambilBukubyIDLast = $conn->query("SELECT * FROM tb_transaksi where id_buku = '$pecahBuku[id_buku]' AND status = 'pinjam' ORDER BY id_buku DESC LIMIT 1") or die(mysqli_error($conn)); ?>
                              <?php $pecahBukuTransaksi = $ambilBukubyIDLast->fetch_assoc(); ?>
                              <p style="color: red;">Tersedia pada <br><?= $pecahBukuTransaksi['tgl_kembali']; ?></p>
                            </div>
                          <?php } else { ?>
                            <div style="padding:5px;border-bottom: 0px solid grey;">
                              <p>Buku tinggal <?= $pecahBuku['jumlah_buku']; ?></p>
                            </div>
                          <?php } ?>
                        </div>
                      </td>
                      <td>
                        <div style="padding:5px;border-bottom: 0px solid grey;">
                          <a href="dashboard/index.php?p=transaksi&aksi=tambah&id_buku=<?= $pecahBuku['id_buku']; ?>" class="btn btn-primary" style="border-color: #007bff !important;border-radius: 10px !important;">Pinjam</a><br>
                        </div>
                      </td>
                    </tr>
                    <?php } ?>
                  </table>                  
                </div> 

                </div> 
              </div>
  </div>
</div> 

<!-- <div id="BtnTop"><a href="#top"><img src="assets/images/up.png"></a></div> -->
  </div>
  <button class="btn btn-shop font-weight-bold" style="margin-left: 10px;font-size: 10pt; height: 25px; padding: 0; width: 80px;" onclick="window.location.href='#'"></button>
  </div>
  <?php include('footer.php') ?>


<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
<!-- Footer -->

</html>