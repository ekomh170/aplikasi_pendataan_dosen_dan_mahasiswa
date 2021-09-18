<?php 

session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['level']);
session_destroy();

echo "<script>
alert('Anda Telah Logout dari Akun!!');
document.location.href = '../index.php'
</script>";

?>