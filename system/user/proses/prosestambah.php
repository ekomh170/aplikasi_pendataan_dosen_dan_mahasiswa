<?php 

if ($_POST['submit']) {
	
	include '../../../config/koneksi.php';

	$jumlah_data = mysqli_query($koneksi, "SELECT * FROM tb_user");
	$row_user = mysqli_num_rows($jumlah_data);

	$nama = $_POST['nama'];
	$username_1 = $_POST['username'];
	$username = $username_1 . "0" . $row_user; 
	$level = $_POST['level'];
	$password_asli = $_POST['password'];
	$password = md5($password_asli);

	if ($nama == null && $username = null && $password = null) {
		echo "Form Harus Di isi!!";
	}
	
	$data = mysqli_query($koneksi,"INSERT INTO tb_user VALUES('', '$nama', '$username', '$password', '$level')") or die(mysqli_error($koneksi));

	echo "
	<script>
	alert('Data Berhasil DiTambahkan');
	document.location.href = '../index.php';
	</script>";

} else {
	echo "
	<script>
	alert('Anda Terdeteksi Ingin Merusak System');
	document.location.href = '../index.php';
	</script>";
}

?>