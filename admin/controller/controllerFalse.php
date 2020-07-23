<?php 
session_start();
include('models/model.php');
// $_SESSION['page'] = 'main_thanh_cong';
switch ($select) {
	case 'product':
		$page='product';
		break;
	case 'images':
		$page='images';
		break;
	default:
		# code...
		break;
}
require_once('views/main_that_bai.php');

?>