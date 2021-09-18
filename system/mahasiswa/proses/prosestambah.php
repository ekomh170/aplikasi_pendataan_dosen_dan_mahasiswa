<?php 

if ($_POST['submit']) {
	
	include '../../../config/koneksi.php';

	$image_1 = $_FILES['image']['name'];
	$x_1 = explode('.', $image_1);
	$ekstensi_1 = strtolower(end($x_1));
	$ukuran_1	= $_FILES['image']['size'];
	$file_tmp_1 = $_FILES['image']['tmp_name'];

	$ekstensi_diperbolehkan = array( "png", "jpg", "jpeg");

	if(in_array($ekstensi_1, $ekstensi_diperbolehkan)) {
		if($ukuran_1 < 1044070){	
			move_uploaded_file($file_tmp_1, '../../../assets/foto/mahasiswa/'.$image_1);

			$jumlah_data = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");
			$row_user = mysqli_num_rows($jumlah_data);
			$tanggal = date('d');
			$tanggal1 = date('m');
			$tanggal2 = date('y');

			$nim_mhs = $row_user . $tanggal2 . $tanggal1 . $tanggal;
			$image = $image_1;
			$nama = $_POST['nama'];
			$nama_panggilan = $_POST['nama_panggilan'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$agama = $_POST['agama'];
			$tmpt_lahir = $_POST['tmpt_lahir'];
			$tanggal_lahir = $_POST['tanggal_lahir'];
			$alamat = $_POST['alamat'];
			$email = $_POST['email'];
			$no_telp = $_POST['no_telp'];
			$nama_jurusan = $_POST['nama_jurusan'];
			$nama_tahun_akademik = $_POST['nama_tahun_akademik'];

			if ($nim_mhs == null && $image = null && $nama = null && $nama_panggilan = null && $jenis_kelamin = null && $agama = null && $tmpt_lahir = null && $tanggal_lahir = null && $email = null && $no_telp = null && $nama_jurusan = null && $nama_tahun_akademik = null) {
				echo "Form Harus Di isi!!";
			}

			$data = mysqli_query($koneksi,"INSERT INTO tb_mahasiswa VALUES('$nim_mhs', '$image', '$nama', '$nama_panggilan', '$jenis_kelamin', '$agama', '$tmpt_lahir', '$tanggal_lahir', '$alamat', '$email', '$no_telp', '$nama_jurusan', '$nama_tahun_akademik')") or die(mysqli_error($koneksi));
			
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