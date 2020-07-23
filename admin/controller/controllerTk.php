<?php 
session_start();
include('models/model.php');
switch ($select) {
	case 'khachhang':
		$_SESSION['page'] = 'main_tk_nguoi_dung';
		break;
	case 'nhanvien':
		$_SESSION['page'] = 'main_tk_nhan_vien';
		break;
	default:
		# code...
		break;
}

require_once('views/tc_admin.php');

?>