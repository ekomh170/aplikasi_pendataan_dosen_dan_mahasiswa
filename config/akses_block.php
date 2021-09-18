<?php
@session_start();
 
if(!isset($_SESSION['username'])){
	if (!isset($_SESSION['level'])) {
		echo '<script language="javascript">alert("Anda Harus Login!!"); document.location="../../auth/masuk.php";</script>';
	}
}
?>