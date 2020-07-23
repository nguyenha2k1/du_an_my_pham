<?php 
	session_start();
	unset($_SESSION['admin']);
	unset($_SESSION['page']);
	echo "Đăng xuất thành công";
	header('Location: index.php');
?>