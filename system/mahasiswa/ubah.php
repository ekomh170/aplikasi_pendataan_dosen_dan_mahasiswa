<?php 
include '../../config/akses_block.php';
include '../../config/uri.php';
include '../../layout/header.php';
?>
<?php
include '../../config/koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM tb_mahasiswa WHERE nim_mhs='$id'");
while($d = mysqli_fetch_array($data)){
	?>

<div class="container m-5">
	<div class="h1 font-weight-bold text-white">Ubah Data Mahasiswa</div>
	<form action="proses/prosesubah.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="nim_mhs" value="<?= $d['nim_mhs']?>">
		<div class="form-group">
			<div class="col-9">
				<label for="nama" class="font-weight-bold text-white">Nama Mahasiswa : </label>
				<input type="name" class="form-control" id="nama" name="nama" value="<?= $d['nama']?>" placeholder="Masukan Nama Mahasiswa">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="nama_panggilan" class="font-weight-bold text-white">Nama Panggilan : </label>
				<input type="name" class="form-control" id="nama_panggilan" name="nama_panggilan" value="<?= $d['nama_panggilan']?>" placeholder="Masukan Nama Panggilan">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="email" class="font-weight-bold text-white">Email : </label>
				<input type="name" class="form-control" id="email" name="email" value="<?= $d['email']?>" placeholder="Masukan Email">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="nama_jurusan" class="font-weight-bold text-white">Nama Jurusan : </label>
				<input type="name" class="form-control" id="nama_jurusan" name="nama_jurusan" value="<?= $d['nama_jurusan']?>" placeholder="Masukan Nama Jurusan">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="nama_tahun_akademik" class="font-weight-bold text-danger">Nama Tahun Akademik : </label>
				<input type="name" class="form-control" id="nama_tahun_akademik" name="nama_tahun_akademik" value="<?= $d['nama_tahun_akademik']?>" placeholder="Masukan Nama Tahun Akademik">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="jenis_kelamin" class="font-weight-bold text-danger">Jenis Kelamin : </label>
				<select class="form-control" name="jenis_kelamin">
					<option value="">--Pilih Jenis Kelamin--</option>
					<option value="Laki - Laki">Laki - Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="no_telp" class="font-weight-bold text-danger">Nomor Telepon : </label>
				<input type="name" class="form-control" id="no_telp" name="no_telp" value="<?= $d['no_telp']?>" placeholder="Masukan Nomor Telepon">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="agama" class="font-weight-bold text-danger">Agama : </label>
				<select class="form-control" name="agama">
					<option value="">--Pilih Agama--</option>
					<option value="Islam">Islam</option>
					<option value="Kristen">Kristen</option>
					<option value="Katolik">Katolik</option>
					<option value="Hindu">Hindu</option>
					<option value="Buddha">Buddha</option>
					<option value="Konghucu">Konghucu</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="tmpt_lahir" class="font-weight-bold text-danger">Tempat Lahir : </label>
				<input type="name" class="form-control" id="tmpt_lahir" name="tmpt_lahir" value="<?= $d['tmpt_lahir']?>" placeholder="Masukan Tempat Lahir">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="tanggal_lahir" class="font-weight-bold text-danger">Tanggal Lahir : </label>
				<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= $d['tanggal_lahir']?>" placeholder="Masukan Tanggal Lahir">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="alamat" class="font-weight-bold text-danger">Alamat : </label>
				<input type="name" class="form-control" id="alamat" name="alamat" value="<?= $d['alamat']?>" placeholder="Masukan Alamat">
			</div>
		</div>
		<div class="form-group">
			<div class="ml-3">
				<label for="image" class="font-weight-bold text-danger"><b>Foto Mahasiswa : </b></label><br>
				<input type="file" name="image" required>
			</div>
		</div>
		<div class="ml-3">
			<button type="Login" name="submit" value="submit" class="btn btn-primary">Ubah Data</button>
			<a href="index.php" class="btn btn-danger">Kembali</a>
		</div>
	</form>
</div>
<?php } ?>

