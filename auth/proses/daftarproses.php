<?php 

if ($_POST['Daftar']) {
	include '../../config/koneksi.php';

	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2 = md5($password);
	$level = $_POST['level'];

	if ($nama == null && $username == null && $password == null) {
		echo "<script>
		alert('Ada data yang belum diisi!!');
		document.location.href = '../daftar.php';
		</script>";
		die;
	}

	$data = mysqli_query($koneksi, "INSERT INTO tb_user VALUES('', '$nama', '$username', '$password2', '$level')") or die(mysqli_error($koneksi));
	
	echo "<script>
	alert('Akun Berhasil Dibuat!! Silahkan Login...');
	document.location.href = '../login.php';
	</script>";
}
echo "
<script>
alert('Anda Terdeteksi Ingin Merusak System');
document.location.href = '../daftar.php';
</script>";

?>