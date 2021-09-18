<?php 

include '../../../config/akses_block.php';
include '../../../config/uri.php';
include '../../../layout/header.php';
include '../../../layout/topbar.php';

?>
<div class="container m-5">
	<div class="h1 font-weight-bold text-center mb-5">Data User</div>
	<table class="table text-center">
		<thead class="thead-dark">
			<tr>
				<th >No</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Level</th>
			</tr>
		</thead>
		<?php  
		include '../../../config/koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "SELECT * FROM tb_user");
		foreach ($data as $value => $d) {
			?>
			<tbody>
				<tr>
					<th><?= $no++; ?></th>
					<td><?= $d['nama']; ?></td>
					<td><?= $d['username']; ?></td>
					<td><?= $d['level']; ?></td>
				</tr>
			</tbody>
		<?php } ?>
	</table>
</div>

<script>
	window.print();
</script>

<?php 
include '../../../layout/footer.php';
?>