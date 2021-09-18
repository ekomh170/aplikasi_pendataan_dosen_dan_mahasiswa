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
							Halaman Login
						</div>
						<hr>
						<form action="proses/loginproses.php" method="post">
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
							<button type="Login" name="Login" value="Login" class="btn btn-primary">Login Akun</button>
						</form>
						<hr>
						<a href="daftar.php" class="card-link">Jika Belum Memiliki Akun? Klik Ini untuk Daftar Akun...</a><br>
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
