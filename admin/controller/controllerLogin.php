<?php 
session_start();
include('models/model.php');
if (isset($_SESSION['admin'])) {
	header('Location: ?page=admin');
}else{
	include('views/login.php');
	if (isset($_POST['submit'])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$login = new loginAdmin($user,$pass);
		if ($login->login()==0) {
			echo "<p style='color:red;'>Tên đăng nhập hoặc mật khẩu không đúng !</p>";
		}else{
			$_SESSION['admin'] = $user;
            header('Location: ?page=admin');
		}
	}
}
?>