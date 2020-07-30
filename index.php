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
		require_once('controller/controller.php');
		$controller = new ctrollHome();
		$controller->header();
		$controller->main();
		$controller->footer();
		break;
	case 'logout':
		require_once('controller/controllerLogout.php');
		break;
	
	default:
		# code...
		break;
}




?>
</body>
</html>