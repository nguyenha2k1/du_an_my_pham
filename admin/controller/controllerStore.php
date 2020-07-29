<?php 
session_start();
include('models/model02.php');
$selec = '*';
$from = 'hethongch';
$chung = new chung();
$query = $chung->getAll($selec,$from);
//
switch ($select) {
	case 'delete':
		$stt = $_GET['id'];
		$where = 'stt';
		$result = $chung->delete($stt,$from,$where);
		if ($result==true) {
			header('Location: ?page=true&select=store');
		}else{
			header('Location: ?page=false&select=store');
		}
		break;
	case 'add':
		$_SESSION['page'] = 'main_them_moi_cua_hang';
		break;
	case 'getadd':
		$address = $_POST['address'];
		$sdt = $_POST['sdt'];
		// time
		$tz = 'Asia/Ho_Chi_Minh';
		$timestamp = time();
		$dt = new DateTime("now", new DateTimeZone($tz)); 
		$dt->setTimestamp($timestamp);
		$date_tao=$dt->format('Y-m-d H:i:s');
		// time
		$store = new store();
		$queryUp = $store->add($address,$sdt,$date_tao);
		if ($queryUp==true) {
				header('Location: ?page=true&select=store');
			}else{
				header('Location: ?page=false&select=store');
			}
		break;
	case '':
		$_SESSION['page'] = 'main_he_thong_cua_hang';
		break;
	
	default:
		# code...
		break;
}

require_once('views/tc_admin.php');

?>