<?php 
session_start();
include('models/model02.php');
$selec = '*';
$from = 'thongtinweb';
$chung = new chung();
$query = $chung->getAll($selec,$from);
$result = mysqli_fetch_assoc($query);
switch ($select) {
	case '':
		$_SESSION['page'] = 'main_tt_website';
		break;
	case 'edit':
		$_SESSION['page'] = 'main_up_tt_website';
		break;
	case 'update':
		$tenCty = $_POST['tenCty'];
		$dia_chi = $_POST['dia_chi'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
		$website = $_POST['website'];
		$hotline = $_POST['hotline'];
		$tongdTuvan = $_POST['tongdTuvan'];
		$facebook = $_POST['facebook'];
		$instagram = $_POST['instagram'];
		$pinterest = $_POST['pinterest'];
		$google = $_POST['google'];
		
		$infor = new infor();
		$queryUp = $infor->add($tenCty,$dia_chi,$tel,$email,$website,$hotline,$tongdTuvan,$facebook,$instagram,$pinterest,$google);
		if ($queryUp==true) {
				header('Location: ?page=true&select=infor');
			}else{
				header('Location: ?page=false&select=infor');
			}
		break;
	default:
		# code...
		break;
}


require_once('views/tc_admin.php');

?>