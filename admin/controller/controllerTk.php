<?php 
session_start();
include('models/model.php');
// phân trang
$item_per_page = 10;
$current_page = !empty($_GET['pagination'])?$_GET['pagination']:1; //Trang hiện tại
$offset = ($current_page - 1) * $item_per_page;
$account = new account();

//
if (isset($_GET['account'])&&$_GET['account']=='customer') {
	$cap = 3;
	$query = $account->get($item_per_page,$offset,$cap);
	$totalRecords = $account->getNum_rows();
	$totalPages = ceil($totalRecords / $item_per_page);
	switch ($select) {
		case '':
			# code...
			break;
		case '':
			$_SESSION['page'] = 'main_tk_nguoi_dung';
			break;
		default:
			# code...
			break;
	}
}
if (isset($_GET['account'])&&$_GET['account']=='staff') {
	$cap = 2;
	$query = $account->get($item_per_page,$offset,$cap);
	$totalRecords = $account->getNum_rows();
	$totalPages = ceil($totalRecords / $item_per_page);
	switch ($select) {
		case '':
			$_SESSION['page'] = 'main_tk_nhan_vien';
			break;
		default:
			# code...
			break;
	}
}


require_once('views/tc_admin.php');

?>