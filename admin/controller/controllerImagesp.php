<?php 
session_start();
include('models/model.php');
// phân trang
$item_per_page = 5;
$current_page = !empty($_GET['pagination'])?$_GET['pagination']:1; //Trang hiện tại
$offset = ($current_page - 1) * $item_per_page;
$imagesSp = new imagesSp();
$query = $imagesSp->get($item_per_page,$offset);
$totalRecords = $imagesSp->getNum_rows();
$totalPages = ceil($totalRecords / $item_per_page);
//
switch ($select) {
	case 'edit':
		$id = $_GET['id'];
		$query = $imagesSp->edit($id);
		$result = mysqli_fetch_assoc($query);
		$_SESSION['page'] = 'main_sua_image_sp';
		break;
	case 'search':
		$column_name = isset($_POST['sort'])?$_POST['sort']:'ten_sp';
		$type = isset($_POST['search'])?$_POST['search']:'';
		$search = "'%".$type."%'";
		$query = $imagesSp->getSearch($column_name,$search);
		$_SESSION['page'] = 'main_search_images';
		break;
	case 'update':
		$id = $_GET['id'];
		$img = $_POST['img'];
		$queryUp = $imagesSp->update($id,$img);
		if ($queryUp==true) {
			header('Location: ?page=true&select=images');
		}else{
			header('Location: ?page=false&select=images');
		}
		break;
	case '':
		$_SESSION['page'] = 'main_image_sp';
		break;
	
	default:
		# code...
		break;
}

require_once('views/tc_admin.php');

?>