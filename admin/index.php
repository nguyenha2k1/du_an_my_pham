<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

if (isset($_GET['page'])) {
	$page = $_GET['page'];
}else{
	$page = '';
}
if (isset($_GET['select'])) {
	$select = $_GET['select'];
}else{
	$select = '';
}
switch ($page) {
	case '':
		require_once('controller/controllerLogin.php');
		break;
	case 'logout':
		require_once('controller/controllerLogout.php');
		break;
	case 'admin':
		require_once('controller/controller.php');
		break;
	case 'product':
		require_once('controller/controllerSanpham.php');
		break;
	case 'images':
		require_once('controller/controllerImagesp.php');
		break;
	case 'account':
		require_once('controller/controllerTk.php');
		break;
	case 'show':
		require_once('controller/controllerGiaodien.php');
		break;
	case 'trademark':
		require_once('controller/controllerThuonghieu.php');
		break;
	case 'wHouse':
		require_once('controller/controllerKho.php');
		break;
	case 'store':
		require_once('controller/controllerStore.php');
		break;
	case 'email':
		require_once('controller/controllerEmailkhuyenmai.php');
		break;
	case 'order':
		require_once('controller/controllerDonhang.php');
		break;
	case 'delete':
		require_once('controller/controllerStore.php');
		break;
	case 'store':
		require_once('controller/controllerStore.php');
		break;
	case 'infor':
		require_once('controller/controllerInfor.php');
		break;
	case 'true':
		require_once('controller/controllerTrue.php');
		break;
	case 'false':
		require_once('controller/controllerFalse.php');
		break;
	default:
		# code...
		break;
}




?>
</body>
</html>