<?php 

if ($_POST['submit']) {

	include '../../../config/koneksi.php';

	$image1 = $_FILES['image']['name'];
	$x_1 = explode('.', $image1);
	$ekstensi_1 = strtolower(end($x_1));
	$ukuran_1	= $_FILES['image']['size'];
	$file_tmp_1 = $_FILES['image']['tmp_name'];

	$ekstensi_diperbolehkan = array( "png", "jpg", "jpeg");

	if(in_array($ekstensi_1, $ekstensi_diperbolehkan)) {
		if($ukuran_1 < 10440702){	
			move_uploaded_file($file_tmp_1, '../../../assets/foto/dosen/'.$image1);

			$id_dosen = $_POST['id_dosen'];
			$nama_dosen = $_POST['nama_dosen'];
			$nama_panggilan = $_POST['nama_panggilan'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$agama = $_POST['agama'];
			$tmpt_lahir = $_POST['tmpt_lahir'];
			$tanggal_lahir = $_POST['tanggal_lahir'];
			$alamat = $_POST['alamat'];
			$no_telp = $_POST['no_telp'];
			$image = $image1;
			$email = $_POST['email'];
			$nama_matkul = $_POST['nama_matkul'];

			if ($id_dosen == null && $nama_dosen = null && $nama_panggilan = null && $jenis_kelamin = null && $agama = null && $tmpt_lahir = null && $tanggal_lahir = null && $alamat = null && $no_telp = null && $image = null && $email = null && $nama_matkul = null) {
				echo "Form Harus Di isi!!";
			}

			$data = mysqli_query($koneksi,"UPDATE tb_dosen SET id_dosen ='$id_dosen', nama_dosen='$nama_dosen', nama_panggilan='$nama_panggilan', jenis_kelamin='$jenis_kelamin', agama='$agama', tmpt_lahir='$tmpt_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', no_telp='$no_telp', image='$image', email='$email', nama_matkul='$nama_matkul' WHERE id_dosen ='$id_dosen'") or die(mysqli_error($koneksi));

			echo "
			<script>
			alert('Data Berhasil DiUbah');
			document.location.href = '../index.php';
			</script>";
		}else{
			echo "
			<script>
			alert('UKURAN FILE TERLALU BESAR');
			document.location.href = '../ubah.php';
			</script>";
		}
	}else{
		echo "
		<script>
		alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');
		document.location.href = '../ubah.php';
		</script>";
	}
}
echo "
<script>
alert('Anda Terdeteksi Ingin Merusak System');
document.location.href = '../index.php';
</script>";
?>