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
	$user = 'customer';
	$query = $account->get($item_per_page,$offset,$cap);
	$totalRecords = $account->getNum_rows($cap);
	$totalPages = ceil($totalRecords / $item_per_page);
	switch ($select) {
		case 'edit':
			// $id = $_GET['id'];
			// $query = $account->edit($id);
			// $result = mysqli_fetch_assoc($query);
			// $queryPl = $account->getPl();
			// $queryTh = $account->getTh();
			// $_SESSION['page'] = 'main_sua_san_pham';
			break;
		case 'search':
			$column_name = isset($_POST['sort'])?$_POST['sort']:'id';
			$type = isset($_POST['search'])?$_POST['search']:'';
			$search = "'%".$type."%'";
			$query = $account->getSearch($column_name,$search,$cap);
			$_SESSION['page'] = 'main_search_tk';
			break;
		case 'delete':
			$id = $_GET['id'];
			$result = $account->delete($id);
			if ($result==true) {
				header('Location: ?page=true&select=account&user=customer');
			}else{
				header('Location: ?page=false&select=account&user=customer');
			}
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
	$user= 'staff';
	$query = $account->get($item_per_page,$offset,$cap);
	$totalRecords = $account->getNum_rows($cap);
	$totalPages = ceil($totalRecords / $item_per_page);
	switch ($select) {
		case 'search':
			$column_name = isset($_POST['sort'])?$_POST['sort']:'id';
			$type = isset($_POST['search'])?$_POST['search']:'';
			$search = "'%".$type."%'";
			$query = $account->getSearch($column_name,$search,$cap);
			$_SESSION['page'] = 'main_search_tk';
			break;
		case 'delete':
			$id = $_GET['id'];
			$result = $account->delete($id);
			if ($result==true) {
				header('Location: ?page=true&select=account&user=staff');
			}else{
				header('Location: ?page=false&select=account&user=staff');
			}
			break;
		case 'add':
			$_SESSION['page'] = 'main_them_moi_tk_nv';
			break;
		case 'getadd':
			$ho_va_ten = $_POST['ho_va_ten'];
			$ngay_s = $_POST['ngay_sinh'];
			// $date = str_replace('/', '-', $ngay_s);
			// $ngay_sinh = date('Y-m-d', strtotime($date));
			$sdt = $_POST['sdt'];
			$dia_chi = $_POST['dia_chi'];
			$gioi_tinh =$_POST['gioi_tinh'];
			$email = $_POST['email'];
			$ten_tk = $_POST['ten_tk'];
			$mk = $_POST['mk'];
			$cap = $_POST['cap'];
			// time
			$tz = 'Asia/Ho_Chi_Minh';
			$timestamp = time();
			$dt = new DateTime("now", new DateTimeZone($tz)); 
			$dt->setTimestamp($timestamp);
			$ngay_tao=$dt->format('Y-m-d H:i:s');
			// time
			$queryAdd = $account->add($ten_tk,$mk,$ngay_tao,$cap,$ho_va_ten,$gioi_tinh,$ngay_s,$sdt,$dia_chi,$email);
			if ($queryAdd==true) {
				header('Location: ?page=true&select=account&user=staff');
			}else{
				header('Location: ?page=true&select=account&user=staff');
			}
			break;
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