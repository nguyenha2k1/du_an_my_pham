<?php 
session_start();
include('models/model.php');


if (isset($_GET['img'])&&$_GET['img']=='imgsp') {
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
			$queryS = $imagesSp->getSearch($column_name,$search);
			$_SESSION['page'] = 'main_search_images';
			break;
		case 'update':
			$id = $_GET['id'];
			$uploadedFiles = $_FILES['file_upload'];
			$queryUp = $imagesSp->update($id,$uploadedFiles);

			if ($queryUp==true) {
				header('Location: ?page=true&select=images&img=imgsp');
			}else{
				header('Location: ?page=false&select=images&img=imgsp');
			}
			break;
		case '':
			$_SESSION['page'] = 'main_image_sp';
			break;
		
		default:
			# code...
			break;
	}
}
if (isset($_GET['img'])&&$_GET['img']=='imgspbs') {
	// phân trang
	$item_per_page = 5;
	$current_page = !empty($_GET['pagination'])?$_GET['pagination']:1; //Trang hiện tại
	$offset = ($current_page - 1) * $item_per_page;
	$imagesSpbs = new imagesSpbs();
	$result = $imagesSpbs->get($item_per_page,$offset);
	// $query = $imagesSpbs->get_data_where($ma_sp);
	$query_alldata= $imagesSpbs->get_all_data('sanpham',$item_per_page,$offset);
	$totalRecords = $imagesSpbs->getNum_rows();
	$totalPages = ceil($totalRecords / $item_per_page);
	//
	switch ($select) {
		case 'edit':
			$id = $_GET['id'];
			$query1 = $imagesSpbs->getall($id);
			// echo $query1['ten_sp'];
			// echo '<pre>';
			// print_r($query1);
			// echo "</pre?";
			// $query = $imagesSpbs->edit($id);
			// $result = mysqli_fetch_assoc($query);
			$_SESSION['page'] = 'main_sua_image_sp_bs';
			break;
		case 'search':
			$column_name = isset($_POST['sort'])?$_POST['sort']:'ten_sp';
			$type = isset($_POST['search'])?$_POST['search']:'';
			$search = "'%".$type."%'";
			$queryS = $imagesSpbs->getSearch($column_name,$search);
			$_SESSION['page'] = 'main_search_images';
			break;
		case 'update':
			$id = $_GET['id'];
			$img = $_POST['img'];
			$queryUp = $imagesSpbs->update($id,$img);
			if ($queryUp==true) {
				header('Location: ?page=true&select=images');
			}else{
				header('Location: ?page=false&select=images');
			}
			break;
		case '':
			$_SESSION['page'] = 'main_image_sp_bs';
			break;
		
		default:
			# code...
			break;
	}
}




require_once('views/tc_admin.php');

?>