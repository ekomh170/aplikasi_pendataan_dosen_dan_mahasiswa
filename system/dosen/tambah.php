<?php 
include '../../config/akses_block.php';
include '../../config/uri.php';
include '../../layout/header.php';
?>

<div class="container m-5">
	<div class="h1 font-weight-bold text-white">Tambah Data Dosen</div>
	<form action="proses/prosestambah.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<div class="col-9">
				<label for="nama_dosen" class="font-weight-bold text-white">Nama Dosen : </label>
				<input type="name" class="form-control" id="nama_dosen" name="nama_dosen" placeholder="Masukan Nama Dosen">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="nama_panggilan" class="font-weight-bold text-white">Nama Panggilan : </label>
				<input type="name" class="form-control" id="nama_panggilan" name="nama_panggilan" placeholder="Masukan Nama Panggilan">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="email" class="font-weight-bold text-white">Email : </label>
				<input type="name" class="form-control" id="email" name="email" placeholder="Masukan Email">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="nama_matkul" class="font-weight-bold text-white">Nama Mata Kuliah : </label>
				<input type="name" class="form-control" id="nama_matkul" name="nama_matkul" placeholder="Masukan Mata Kuliah">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="jenis_kelamin" class="font-weight-bold text-danger">Jenis Kelamin : </label>
				<select class="form-control" name="jenis_kelamin">
					<option value="Laki - Laki">Laki - Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="agama" class="font-weight-bold text-danger">Agama : </label>
				<select class="form-control" id="agama" name="agama">
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
				<label for="no_telp" class="font-weight-bold text-danger">Nomor Telepon : </label>
				<input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="Masukan Nomer Telepon">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="tmpt_lahir" class="font-weight-bold text-danger">Tempat Lahir : </label>
				<input type="name" class="form-control" id="tmpt_lahir" name="tmpt_lahir" placeholder="Masukan Tempat Lahir">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="tanggal_lahir" class="font-weight-bold text-danger">Tanggal Lahir : </label>
				<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="alamat" class="font-weight-bold text-danger">Alamat : </label>
				<input type="name" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
			</div>
		</div>
		<div class="form-group">
			<div class="ml-3">
				<label for="image" class="font-weight-bold text-danger"><b>Foto Dosen : </b></label><br>
				<input type="file" name="image" required>
			</div>
		</div>
		<br>
		<div class="ml-3">
			<button type="submit" name="submit" value="submit" class="btn btn-primary">Tambah Data</button>
			<a href="index.php" class="btn btn-danger">Kembali</a>
		</div>
	</form>
</div>
