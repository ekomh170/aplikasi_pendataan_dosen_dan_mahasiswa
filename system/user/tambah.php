<?php 
include '../../config/akses_block.php';
include '../../config/uri.php';
include '../../layout/header.php';
?>

<div class="container m-5">
	<div class="h1 font-weight-bold mb-3 text-white">Tambah Data User</div>
	<form action="proses/prosestambah.php" method="post">
		<div class="form-group">
			<div class="col-9">
				<label for="nama" class="font-weight-bold text-white">Nama : </label>
				<input type="name" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="username" class="font-weight-bold text-white">Username : </label>
				<input type="name" class="form-control" id="username" name="username" placeholder="Masukan Username">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="password" class="font-weight-bold text-white">Password : </label>
				<input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="level" class="font-weight-bold text-white">Level : </label>
				<select class="form-control" id="level" name="level">
					<option value="Admin">Admin</option>
					<option value="Pembimbing">Pembimbing</option>
					<option value="Magang">Magang</option>
				</select>
			</div>
		</div>
		<div class="ml-3">
			<button type="Login" name="submit" value="submit" class="btn btn-primary">Tambah</button>
			<a href="index.php" class="btn btn-success">Kembali</a>
		</div>
	</form>
</div>

<?php 
include '../../layout/footer.php';
?>