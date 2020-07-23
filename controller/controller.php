<?php 
// include('');
require_once('views/heade.php');
if (isset($_GET['select'])) {
	$select = $_GET['select'];
	$choose = isset($_GET['choose']) ? $_GET['choose'] : "";
	switch ($select) {
		case 'account':
			switch ($choose) {
				case 'login':
					require_once('views/main_dang_nhap.php');
					break;
				case 'registration':
					require_once('views/main_tao_tai_khoan.php');
					break;
				
				default:
					# code...
					break;
			}
			break;
		case 'cart':
			require_once('views/main_gio_hang_trong.php');
			break;
		case 'category':
			require_once('views/main_danh_muc.php');
			break;
		case 'beautypage':
			require_once('views/main_bi_quyet_lam_dep.php');
			break;
		case 'product':
			require_once('views/main_san_pham.php');
			break;
		default:
			# code...
			break;
	}
	
}else{
	require_once('views/main_trang_chu.php');
}
require_once('views/footer.php');

?>