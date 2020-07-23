<?php 
session_start();
include('models/model.php');
switch ($select) {
	case 'new':
		$_SESSION['page'] = 'main_kho';
		break;
	case 'sell':
		$_SESSION['page'] = 'main_kho';
		break;
	case 'exist':
		$_SESSION['page'] = 'main_kho';
		break;
	default:
		# code...
		break;
}

require_once('views/tc_admin.php');

?>