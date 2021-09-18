<?php 
include '../config/block_akses.php';
include '../config/uri.php';
include '../layout/header.php';
?>
<center>
	<div class="container m-5">
		<center>
			<div class="card" style="width: 50rem;">
				<div class="card-body">	
					<div class="container">		
						<div class="h1 text-center" m-5>
							Halaman Daftar
						</div>
						<hr>
						<form action="proses/daftarproses.php" method="post">
							<div class="form-group">
								<div class="col-9">
									<label for="nama" class="font-weight-bold">Nama : </label>
									<input type="name" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
								</div>
							</div>
							<div class="form-group">
								<div class="col-9">
									<label for="username" class="font-weight-bold">Username : </label>
									<input type="name" class="form-control" id="username" name="username" placeholder="Masukan username">
								</div>
							</div>
							<div class="form-group">
								<div class="col-9">
									<label for="Password" class="font-weight-bold">Password : </label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-9">
									<label for="level" class="font-weight-bold">Level : </label>
									<select class="form-control" id="level" name="level">
										<option value="">--Pilih Level--</option>
										<option value="Admin">Admin</option>
										<option value="Pembimbing">Pembimbing</option>
										<option value="Magang">Magang</option>
									</select>
								</div>
							</div>
							<button type="Daftar" name="Daftar" value="Daftar" class="btn btn-primary">Daftar Akun</button>
						</form>
						<hr>
						<a href="login.php" class="card-link">Jika Sudah Memiliki Akun? Klik Ini untuk login...
						</a><br>
						<a href="../index.php" class="card-link">Halaman Utama</a>
					</div>
				</div>
			</div>
		</center>
	</div>
</center>
<?php 
include '../layout/footer.php';
?>