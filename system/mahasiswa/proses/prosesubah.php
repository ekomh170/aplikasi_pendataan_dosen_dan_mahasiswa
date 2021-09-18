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
		if($ukuran_1 < 10440701){	
			move_uploaded_file($file_tmp_1, '../../../assets/foto/mahasiswa/'.$image_1);

			$nim_mhs = $_POST['nim_mhs'];
			$image = $image_1;
			$nama = $_POST['nama'];
			$nama_panggilan = $_POST['nama_panggilan'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$agama = $_POST['agama'];
			$tmpt_lahir = $_POST['tmpt_lahir'];
			$tanggal_lahir = $_POST['tanggal_lahir'];
			$email = $_POST['email'];
			$no_telp = $_POST['no_telp'];
			$nama_jurusan = $_POST['nama_jurusan'];
			$nama_tahun_akademik = $_POST['nama_tahun_akademik'];

			if ($nim_mhs == null && $image = null && $nama = null && $nama_panggilan = null && $jenis_kelamin = null && $agama = null && $tmpt_lahir = null && $tanggal_lahir = null && $email = null && $no_telp = null && $nama_jurusan = null && $nama_tahun_akademik = null) {
				echo "Form Harus Di isi!!";
			}

			$data = mysqli_query($koneksi,"UPDATE tb_mahasiswa SET nim_mhs ='$nim_mhs', image='$image', nama='$nama', nama_panggilan='$nama_panggilan', jenis_kelamin='$jenis_kelamin', agama='$agama', tmpt_lahir='$tmpt_lahir', tanggal_lahir='$tanggal_lahir', email='$email', no_telp='$no_telp', nama_jurusan='$nama_jurusan', nama_tahun_akademik='$nama_tahun_akademik' WHERE nim_mhs='$nim_mhs'") or die(mysqli_error($koneksi));

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