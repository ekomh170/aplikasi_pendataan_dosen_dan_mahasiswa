<?php 
include '../../config/akses_block.php';
include '../../config/koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_user WHERE idUser='$id'")or die(mysqli_error($koneksi));

echo "
<script>
alert('Data Berhasil Dihapus');
document.location.href = 'index.php';
</script>";

?>