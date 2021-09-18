<?php 
if ($_POST['Login']) {
	include '../../config/koneksi.php';

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$data = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'");
	$cek_baris = mysqli_num_rows($data);
	$row = mysqli_fetch_assoc($data);

	if ($cek_baris) {
		if ($row['level'] == "Admin" || $row['level'] == "Pembimbing" || $row['level'] == "Magang") {
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;	
			$_SESSION['level'] = $row['level'];
			echo "
			<script>
			alert('Anda Berhasil Login!!');
			document.location.href = '../../system/user/index.php'
			</script>";
		}elseif(!$row['level']) {
			echo "
			<script>
			alert('Level Anda Tidak Memiliki Akses Untuk Mengakses Menu Utama');
			document.location.href = '../login.php'
			</script>";
		}
	}elseif (!$cek_baris) {
		echo "
		<script>
		alert('Akun Anda Tidak Dapat Diakses Karena Belum Terdata Harap Buat Akun');
		document.location.href = '../login.php'
		</script>";
	}
	echo "
	<script>
	alert('Anda Terdeteksi Ingin Merusak System');
	document.location.href = '../index.php';
	</script>";
}
?>
