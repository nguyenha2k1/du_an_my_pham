<?php ob_start(); ?>
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
require_once('controller/controller.php');
$controllerHeader = new header();
$controllerMain = new main();
switch ($page) {
	case '':
		$controllerMain->mainHome();
		break;
	case 'product':
		$controllerMain->mainProduct();
		break;
	case 'category':
		$controllerMain->mainCategory();
		break;
	case 'classify':
		$controllerMain->mainClassify();
		break;
	case 'trademark':
		$controllerMain->mainTrademark();
		break;
	case 'account':
		$controllerMain->mainAccount();
		break;
	case 'cart':
		// if (isset($_COOKIE['customer'])) {
		// 	$controllerMain->mainCartC();
		// }else{
			$controllerMain->mainCart();
		// }
		break;
	default:
		# code...
		break;
}

$controllerFooter = new footer();


?>


</body>
</html>
<?php ob_flush(); ?>

