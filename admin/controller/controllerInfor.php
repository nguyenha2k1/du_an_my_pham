<?php 
session_start();
include('models/model.php');
switch ($select) {
	case '':
		$_SESSION['page'] = 'main_tt_website';
		break;
	case 'edit':
		$_SESSION['page'] = 'main_up_tt_website';
		break;
	case 'update':
		
		break;
	default:
		# code...
		break;
}


require_once('views/tc_admin.php');

?>