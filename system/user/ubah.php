<?php 
include '../../config/akses_block.php';
include '../../config/uri.php';
include '../../layout/header.php';

include '../../config/koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE idUser = '$id'");		
while($d = mysqli_fetch_array($data)){
	?>
	<div class="container m-5">
		<div class="h1 font-weight-bold mb-3 text-white">Ubah Data User</div>
		<form action="proses/prosesubah.php" method="post">
			<input type="hidden" name="idUser" value="<?= $d['idUser']; ?>">
			<div class="form-group">
				<div class="col-9">
					<label for="nama" class="font-weight-bold text-white">Nama : </label>
					<input type="name" class="form-control" id="nama" name="nama" value="<?= $d['nama']; ?>" placeholder="Masukan Nama Lengkap">
				</div>
			</div>
			<div class="form-group">
				<div class="col-9">
					<label for="username" class="font-weight-bold text-white">Username : </label>
					<input type="name" class="form-control" id="username" name="username" value="<?= $d['username']; ?>" placeholder="Masukan Username">
				</div>
			</div>
			<div class="form-group">
				<div class="col-9">
					<label for="password" class="font-weight-bold text-white">Kode Ubah Password : </label>
					<input type="number" class="form-control" id="kode_akun" name="kode_akun" placeholder="Masukan Kode Ubah Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-9">
					<label for="password" class="font-weight-bold text-white">Password Baru : </label>
					<input type="password" class="form-control" id="password_baru" name="password_baru" placeholder="Masukan Password Baru">
				</div>
			</div>
			<div class="form-group">
				<div class="col-9">
					<label for="level" class="font-weight-bold text-danger">Level : </label>
					<select class="form-control" id="level" name="level">
						<option value="Admin">Admin</option>
						<option value="Pembimbing">Pembimbing</option>
						<option value="Magang">Magang</option>
					</select>
				</div>
			</div>
			<div class="ml-3">
				<button type="Login" name="submit" value="submit" class="btn btn-primary">Ubah</button>
				<a href="index.php" class="btn btn-success">Kembali</a>
			</div>
		</form>
	</div>
<?php } ?>
