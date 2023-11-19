<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <style>
    	body {
        font-family: sen;													/*mengganti font*/
      }

      .footer {
      	position: fixed; 
        bottom: 0;
        height: 690px;														/*mengatur tinggi footer*/
        background-color: black;									/*mengganti warna background menjadi hitam*/
        color: white;															/*mengganti seluruh warna text pada footer menjadi putih*/
      }

      .border-bawah {
        border-color: white;											/*mengganti warna border untuk input email menjadi putih*/
      }

      input {
        background-color: transparent !important;	/*mengganti background untuk input email menjadi transparan*/
        padding-left: 0px !important;							/*menghapus padding kiri, agar text input sejajar di kiri*/
      }

      .input-subs:focus {
        color: white !important;									/*mengganti warna text saat input menjadi putih*/
        padding-left: 0px;												/*menghapus padding kiri, agar text saat input sejajar di kiri*/
      }

      .a-white {          
        color: white;         										/*mengganti warna semua text dengan tag <a> menjafi putih*/
      }

      .a-white:hover {
        color: white;
        text-decoration: underline;     					/*saat diarahkan kursor text akan memiliki garis bawah*/
      }
    </style>
	</head>
	<body>
		<div class="footer w-100 h-100">
		  <div class="container h-100">
		    <div class="row h-100">
		      <div class="col my-auto">
		        <div class="row">
		          <div class="col-sm-4">
		            <h2>Bantuan</h2>
		            <a class="a-white" href="caradaftar.php">Tata Cara Pendaftaran Anggota</a><br>
		            <a class="a-white" href="buku.php">Pencarian Buku</a><br>
		            <a class="a-white" href="dashboard/index.php">Peminjaman Buku</a><br>
		            <a class="a-white" href="dashboard/index.php">Pengembalian Buku</a><br>
		            <a class="a-white" href="peraturan.php">Peraturan Perpustakaan Daerah Kabupaten Dairi</a><br> 
		          </div>

		          <div class="col-sm-4">
		            <h2>Perpustakaan</h2>
		            <a class="a-white" href="aboutus.php">Tentang Kami</a><br>
		            <a class="a-white" href="kontak.php">Kontak</a>
		          </div>

		          <div class="col-sm-4">
		            <h2>Ingin mendapat info dari Perpustakaan?</h2>
		            <p>Berlangganan sekarang dan dapatkan info seputar Perpustakaan Daerah Kabupaten Dairi</p><br>
		            <form action="">
		              <input type="text" class="form-control border-bawah input-subs" placeholder="Masukkan email">
		              <button class="btn btn-light font-weight-bold" type="submit" style="text-transform: none; height: 40px; margin-top: 20px;">Berlangganan</button>
		            </form>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
		<script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>
	</body>
</html>



