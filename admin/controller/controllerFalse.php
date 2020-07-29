<?php 
session_start();
include('models/model.php');
// $_SESSION['page'] = 'main_thanh_cong';
switch ($select) {
	case 'product':
		$page='product';
		break;
	case 'images':
		$img = $_GET['img'];
		$page='images&img='.$img;
		break;
	case 'account':
		$user = $_GET['user'];
		$page='account&account='.$user;
		break;
	case 'show':
		$img = $_GET['img'];
		$page='show&img='.$img;
		break;
	case 'trademark':
		$page ='trademark';
		break;
	case 'store':
		$page ='store';
		break;
	default:
		# code...
		break;
}
require_once('views/main_that_bai.php');

?>