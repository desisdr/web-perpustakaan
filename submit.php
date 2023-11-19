<?php 
	require 'dashboard/config/koneksi.php';

	if(isset($_POST['submit'])){
		$nama_user = filter_input(INPUT_POST, 'nama_user', FILTER_SANITIZE_STRING);
	    $email_user = filter_input(INPUT_POST, 'email_user', FILTER_VALIDATE_EMAIL);
	    $pesan = filter_input(INPUT_POST, 'pesan', FILTER_SANITIZE_STRING);

	    mysqli_query($conn, "INSERT INTO tb_kontak VALUES('', '$nama_user', '$email_user', '$pesan')");
 
	    $databaru = mysqli_affected_rows($conn);

	    if ( $databaru === 1 ) {
	      echo "<script>alert('Pesan terkirim.');window.location='kontak.php';</script>";
	    } else {
			echo"<script>
					setTimeout( function() {
						alert('Gagal diinput!');
					}, 200);
				</script>";
		}
	}
?>
