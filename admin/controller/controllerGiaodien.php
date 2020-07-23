<?php 
session_start();
include('models/model.php');
switch ($select) {
	case 'logo':
		$_SESSION['page'] = 'main_giao_dien_logo';
		break;
	case 'slide':
		$_SESSION['page'] = 'main_slide_show';
		break;
	default:
		# code...
		break;
}

require_once('views/tc_admin.php');

?>