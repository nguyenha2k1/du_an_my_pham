<?php 
session_start();
include('models/model.php');

// phân trang
$item_per_page = 10;
$current_page = !empty($_GET['pagination'])?$_GET['pagination']:1; //Trang hiện tại
$offset = ($current_page - 1) * $item_per_page;
$product = new product();
$query = $product->get($item_per_page,$offset);
$totalRecords = $product->getNum_rows();
$totalPages = ceil($totalRecords / $item_per_page);
//
switch ($select) {
	case 'edit':
		$id = $_GET['id'];
		$query = $product->edit($id);
		$result = mysqli_fetch_assoc($query);
		$queryPl = $product->getPl();
		$queryTh = $product->getTh();
		$_SESSION['page'] = 'main_sua_san_pham';
		break;
	case 'update':
		$id = $_GET['id'];
		$ten_sp = $_POST['ten_sp'];
		$gia_ban = str_replace('.', '', $_POST['gia_ban']);
		$gia_thi_truong = str_replace('.', '', $_POST['gia_thi_truong']);
		$sl_trong_kho = $_POST['sl_trong_kho'];
		if (isset($_POST['hien_thi'])&&$_POST['hien_thi']=='on') {
			$hien_thi=1;
		}
		if (!isset($_POST['hien_thi'])) {
			$hien_thi=0;
		}
		$ma_th = $_POST['ma_th'];
		$ma_pl = $_POST['ma_pl'];
		$khai_quat = $_POST['khai_quat'];
		$noidung = $_POST['noidung'];
		$queryUp = $product->update($id,$ten_sp,$gia_ban,$gia_thi_truong,$sl_trong_kho,$hien_thi,$ma_th,$ma_pl,$khai_quat,$noidung);
		if ($queryUp==true) {
			header('Location: ?page=true&select=product');
		}else{
			header('Location: ?page=false&select=product');
		}
		break;
	case 'search':
		$column_name = isset($_POST['sort'])?$_POST['sort']:'ten_sp';
		$type = isset($_POST['search'])?$_POST['search']:'';
		$search = "'%".$type."%'";
		$query = $product->getSearch($column_name,$search);
		$_SESSION['page'] = 'main_search_sp';
		break;
	case 'delete':
		$id = $_GET['id'];
		$result = $product->delete($id);
		if ($result==true) {
			header('Location: ?page=true&select=product');
		}else{
			header('Location: ?page=false&select=product');
		}
		break;
	case 'add':
		$queryPl = $product->getPl();
		$queryTh = $product->getTh();
		$_SESSION['page'] = 'main_them_moi_san_pham';
		break;
	case 'getadd':
		$uploadedFiles = $_FILES['file_upload'];
		$uploadedFilesSp = $_FILES['imgsp'];
		$ten_sp = $_POST['ten_sp'];
		$gia_ban = $_POST['gia_ban'];
		$gia_thi_truong = $_POST['gia_thi_truong'];
		$sl_trong_kho = $_POST['sl_trong_kho'];
		if (isset($_POST['hien_thi'])&&$_POST['hien_thi']=='on') {
			$hien_thi=1;
		}
		if (!isset($_POST['hien_thi'])) {
			$hien_thi=0;
		}
		$ma_th = $_POST['ma_th'];
		$ma_pl = $_POST['ma_pl'];
		$khai_quat = $_POST['khai_quat'];
		$noidung = $_POST['noidung'];
		// time
		$tz = 'Asia/Ho_Chi_Minh';
		$timestamp = time();
		$dt = new DateTime("now", new DateTimeZone($tz)); 
		$dt->setTimestamp($timestamp);
		$date_tao=$dt->format('Y-m-d H:i:s');
		// time
		$queryAdd = $product->add($ten_sp,$date_tao,$gia_ban,$gia_thi_truong,$sl_trong_kho,$hien_thi,$ma_th,$ma_pl,$khai_quat,$noidung,$uploadedFiles,$uploadedFilesSp);
		if ($queryAdd==true) {
			header('Location: ?page=true&select=product');
		}else{
			header('Location: ?page=false&select=product');
		}
		break;
	case '':
		$_SESSION['page'] = 'main_san_pham';
		break;
	default:
		# code...
		break;
}

require_once('views/tc_admin.php');
?>