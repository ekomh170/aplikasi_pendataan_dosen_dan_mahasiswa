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

			$jumlah_data = mysqli_query($koneksi, "SELECT * FROM tb_dosen");
			$row_user = mysqli_num_rows($jumlah_data);
			$tanggal = date('d');
			$tanggal1 = date('m');
			$tanggal2 = date('y');

			$id_dosen = $row_user . $tanggal2 . $tanggal1 . $tanggal;	
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

			$data = mysqli_query($koneksi,"INSERT INTO tb_dosen VALUES('$id_dosen', '$nama_dosen', '$nama_panggilan', '$jenis_kelamin', '$agama', '$tmpt_lahir', '$tanggal_lahir', '$alamat', '$no_telp', '$image', '$email', '$nama_matkul')") or die(mysqli_error($koneksi));

			echo "
			<script>
			alert('Data Berhasil DiTambahkan');
			document.location.href = '../index.php';
			</script>";
		}else{
			echo "UKURAN FILE TERLALU BESAR";
		}
	}else{
		echo "EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN";
	}
} else {
	echo "
	<script>
	alert('Anda Terdeteksi Ingin Merusak System');
	document.location.href = '../index.php';
	</script>";
}

?>