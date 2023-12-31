<?php
require_once 'config/koneksi.php';
require_once 'config/functions.php';

if (isset($_POST['regis'])) {
    if (register($_POST) > 0) {
        echo "<script>alert('Akun Berhasil Dibuat, silahkan login.');window.location='login.php';</script>";
    } else {
        echo "<script>alert('Akun Gagal Dibuat.');window.location='register.php';</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Halaman Registrasi</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Buat Akun</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="small" for="foto">Upload Foto</label>
                                            <input class="form-control-file" id="foto" name="foto" type="file" placeholder="Upload foto Anda" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="nama_anggota">Nama Lengkap</label>
                                            <input class="form-control py-4" id="nama_anggota" name="nama_anggota" type="text" placeholder="Masukkan nama lengkap Anda" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="username">Username</label>
                                            <input class="form-control py-4" id="username" type="text" name="username" aria-describedby="emailHelp" placeholder="Masukkan username Anda" />
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="password">Password</label>
                                                    <input class="form-control py-4" id="password" name="password" type="password" placeholder="Masukkan password" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="password2">Konfirmasi Password</label>
                                                    <input class="form-control py-4" id="password2" name="password2" type="password" placeholder="Konfirmasi password" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="small mb-1" for="nim">NIM</label>
                                            <input class="form-control" id="nim" name="nim" type="number" placeholder="Masukan NIM Anggota" required />
                                        </div> -->

                                        <div class="form-group">
                                            <label class="small mb-1" for="tempat_lahir">Tempat Lahir</label>
                                            <input class="form-control" id="tempat_lahir" name="tempat_lahir" type="text" placeholder="Masukkan Tempat Lahir" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="tgl_lahir">Tanggal Lahir</label>
                                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="jk">Jenis Kelamin</label>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="jk" value="L" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="jk" class="custom-control-input" value="P">
                                                <label class="custom-control-label" for="customRadio2">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="jumlah_buku">Pekerjaan</label>
                                            <select name="pekerjaan" id="pekerjaan" class="form-control" required>
                                                <option value="">-- Pilih Pekerjaan --</option>
                                                <option value="Pelajar">Pelajar</option>
                                                <option value="Mahasiswa">Mahasiswa</option>
                                                <option value="Guru">Guru</option>
                                                <option value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="form-group mt-4 mb-0">
                                            <button type="submit" name="regis" class="btn btn-primary btn-block">Buat Akun</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Dairi Perpustakaan 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>