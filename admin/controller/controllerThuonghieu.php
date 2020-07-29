<?php 
session_start();
include('models/model02.php');
// phân trang
$item_per_page = 5;
$current_page = !empty($_GET['pagination'])?$_GET['pagination']:1; //Trang hiện tại
$offset = ($current_page - 1) * $item_per_page;
$thuongHieu = new thuongHieu();
$query = $thuongHieu->get($item_per_page,$offset);
$totalRecords = $thuongHieu->getNum_rows();
$totalPages = ceil($totalRecords / $item_per_page);
//

switch ($select) {
	case 'delete':
		$ma_th = $_GET['id'];
		$result = $thuongHieu->delete($ma_th);
		if ($result==true) {
			header('Location: ?page=true&select=trademark');
		}else{
			header('Location: ?page=false&select=trademark');
		}
		break;
	case 'search':
		$column_name = isset($_POST['sort'])?$_POST['sort']:'ma_th';
		$type = isset($_POST['search'])?$_POST['search']:'';
		$search = "'%".$type."%'";
		$query = $thuongHieu->getSearch($column_name,$search);
		$_SESSION['page'] = 'main_search_thuong_hieu';
		break;
	case 'add':
		$_SESSION['page'] = 'main_them_moi_thuong_hieu';
		break;
	case 'getadd':
		$ten_thuong_hieu = $_POST['ttt'];
		$uploadedFiles = $_FILES['file_upload'];
		$queryUp = $thuongHieu->add($ten_thuong_hieu,$uploadedFiles);
		if ($queryUp==true) {
				header('Location: ?page=true&select=trademark');
			}else{
				header('Location: ?page=false&select=trademark');
			}
		break;
	case '':
		$_SESSION['page'] = 'main_thuong_hieu';
		break;
	
	default:
		# code...
		break;
}





require_once('views/tc_admin.php');

?>