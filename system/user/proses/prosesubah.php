<?php 
if ($_POST['submit']) {

	include '../../../config/koneksi.php';

	$idUser = $_POST['idUser'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$level = $_POST['level'];
	$kode_akun = $_POST['kode_akun'];
	$password_baru = $_POST['password_baru'];
	$password = md5($password_baru);
	$kode_data = "030329";
	// var_dump($kode_data);die;

	if ($kode_data =! $kode_akun) {
		echo "
		<script>
		alert('Kode Ganti Password Salah');
		document.location.href = '../ubah.php';
		</script>";
		die;
	}

	if ($nama == null && $username = null && $password = null) {
		echo "Form Harus Di isi!!";
	}

	$data = mysqli_query($koneksi,"UPDATE tb_user SET idUser ='$idUser', nama='$nama', username='$username', password='$password', level='$level' WHERE idUser='$idUser'") or die(mysqli_error($koneksi));

	echo "
	<script>
	alert('Data Berhasil DiUbah');
	document.location.href = '../index.php';
	</script>";
}
echo "
<script>
alert('Anda Terdeteksi Ingin Merusak System');
document.location.href = '../index.php';
</script>";
?>