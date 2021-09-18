<?php
@session_start();
 
if(isset($_SESSION['username'])){
	if (isset($_SESSION['level'])) {
		echo '<script language="javascript">alert("Anda Sudah Login :)"); document.location="../system/dosen/index.php";</script>';
	}
}
?>