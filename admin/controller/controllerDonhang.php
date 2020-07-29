<?php 
session_start();
include('models/model02.php');
// phân trang
$item_per_page = 12;
$current_page = !empty($_GET['pagination'])?$_GET['pagination']:1; //Trang hiện tại
$offset = ($current_page - 1) * $item_per_page;
$order = new order();
$query = $order->get($item_per_page,$offset);
$totalRecords = $order->getNum_rows();
$totalPages = ceil($totalRecords / $item_per_page);
//

switch ($select) {
	case 'detail':
		$ma_dh = $_GET['id'];
		$query = $order->getdetail($ma_dh);
		$result = mysqli_fetch_assoc($query);
		$query1 = $order->getID($result['id']);
		$query2 = $order->getID($result['id']);
		$tongtien = 0;
		while ($result2 = mysqli_fetch_assoc($query2)) {
			$tongtien= $tongtien + $result2['tong_tien'];
		}
		// echo $tongtien;
		$_SESSION['page'] = 'main_chi_tiet_don_hang';
		
		break;
	case 'search':
		$column_name = isset($_POST['sort'])?$_POST['sort']:'ten_sp';
		$type = isset($_POST['search'])?$_POST['search']:'';
		$search = "'%".$type."%'";
		$query = $order->getSearch($column_name,$search);
		$_SESSION['page'] = 'main_search_don_hang';
		break;
	case 'edit':
		$ma_dh = $_GET['id'];
		$query = $order->getdetail($ma_dh);
		$result = mysqli_fetch_assoc($query);
		$_SESSION['page'] = 'main_up_don_hang';
		break;
	case 'delete':
		$ma_dh = $_GET['id'];
		$result = $order->delete($ma_dh);
		if ($result==true) {
			header('Location: ?page=true&select=order');
		}else{
			header('Location: ?page=false&select=order');
		}
		break;
	case 'update':
		$ma_dh = $_GET['id'];
		$trang_thai = $_POST['trangthai'];
		$result = $order->update($ma_dh,$trang_thai);
		if ($result==true) {
			header('Location: ?page=true&select=order');
		}else{
			header('Location: ?page=false&select=order');
		}
		break;
	case '':
		$_SESSION['page'] = 'main_don_hang';
		break;
	
	default:
		# code...
		break;
}


require_once('views/tc_admin.php');

?>