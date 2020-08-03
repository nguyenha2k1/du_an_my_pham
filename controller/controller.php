<?php 
session_start();
require_once('model/model.php');
/**
 * 
 */
class main 
{
	
	
	
	public function mainHome(){
		$getData = new getData();
		$querySlide = $getData->getWhere('img','img_show','loai_anh',2);
		
		$queryProduct = $getData->getProduct();
		$queryProductBc = $getData->getProduct();
		
		$queryGetDm = $getData->getProDm(1);
		$queryGetDm2 = $getData->getProDm(2);


		$queryThuonghieu = $getData->getAll('thuonghieu');
		
		include('views/main_trang_chu.php');
	}
	public function mainProduct(){
		$ma_sp = $_GET['id'];
		$getData = new getData();
		$queryProductDetail = $getData->getProductDetail($ma_sp);
		$resultProductDetail = mysqli_fetch_assoc($queryProductDetail);
		$queryImgbs = $getData->getImgbs($ma_sp);
		$querySpCl = $getData->getProductWhere('sanpham.ma_pl',$resultProductDetail['ma_pl']);
		// time
		$tz = 'Asia/Ho_Chi_Minh';
		$timestamp = time();
		$dt = new DateTime("now", new DateTimeZone($tz)); 
		$dt->setTimestamp($timestamp);
		$date_tao=$dt->format('Y-m-d H:i:s');
		// time
		$now = $date_tao;
		$date = new DateTime($now);
		$days = 15;
		// >= php version 5.3
		date_sub($date, date_interval_create_from_date_string($days.' days'));
		$date_minus = date_format($date, 'Y-m-d H:i:s');

		$querySpNew = $getData->getProductNew($date_minus);

		$queryProductNgauNhien = $getData->getProductNgauNhien();



		include('views/main_san_pham.php');
	}

	public function mainCategory(){


		// $ma_pl = $_GET['id'];
		$ma_dm = $_GET['id'];
		$getData = new getData();
		$queryLMadm = $getData->getMadm($ma_dm);
		$resultLMadm = mysqli_fetch_assoc($queryLMadm);
		$ma_dm = $resultLMadm['ma_dm'];
		// phân trang
		$item_per_page = 24;
		$current_page = !empty($_GET['pagination'])?$_GET['pagination']:1; //Trang hiện tại
		$offset = ($current_page - 1) * $item_per_page;
		$queryProductDm = $getData->getProductDm($ma_dm,$item_per_page,$offset);
		$totalRecords = $getData->getNum_rows($ma_dm);
		$totalPages = ceil($totalRecords / $item_per_page);
		//

		// time
		$tz = 'Asia/Ho_Chi_Minh';
		$timestamp = time();
		$dt = new DateTime("now", new DateTimeZone($tz)); 
		$dt->setTimestamp($timestamp);
		$date_tao=$dt->format('Y-m-d H:i:s');
		// time
		$now = $date_tao;
		$date = new DateTime($now);
		$days = 30;
		// >= php version 5.3
		date_sub($date, date_interval_create_from_date_string($days.' days'));
		$date_minus = date_format($date, 'Y-m-d H:i:s');

		$querySpNew = $getData->getProductNew($date_minus);



		$queryDm = $getData->getDm();
		
		while ($resultDm = mysqli_fetch_assoc($queryDm)) {
			$result[]=$resultDm;
		}

		include('views/main_danh_muc.php');
	}
	public function mainClassify(){
		



		$ma_pl = $_GET['id'];
		$getData = new getData();
		$queryLMapl = $getData->getMapl($ma_pl);
		$resultLMapl = mysqli_fetch_assoc($queryLMapl);
		// phân trang
		$item_per_page = 24;
		$current_page = !empty($_GET['pagination'])?$_GET['pagination']:1; //Trang hiện tại
		$offset = ($current_page - 1) * $item_per_page;
		$queryProductPl = $getData->getProductPl($ma_pl,$item_per_page,$offset);
		$totalRecords = $getData->getNum_rowsPl($ma_pl);
		$totalPages = ceil($totalRecords / $item_per_page);
		//

		// time
		$tz = 'Asia/Ho_Chi_Minh';
		$timestamp = time();
		$dt = new DateTime("now", new DateTimeZone($tz)); 
		$dt->setTimestamp($timestamp);
		$date_tao=$dt->format('Y-m-d H:i:s');
		// time
		$now = $date_tao;
		$date = new DateTime($now);
		$days = 30;
		// >= php version 5.3
		date_sub($date, date_interval_create_from_date_string($days.' days'));
		$date_minus = date_format($date, 'Y-m-d H:i:s');

		$querySpNew = $getData->getProductNew($date_minus);




		$queryDm = $getData->getDm();
		
		while ($resultDm = mysqli_fetch_assoc($queryDm)) {
			$result[]=$resultDm;
		}
		include('views/main_phan_loai.php');
	}
	public function mainTrademark(){
		$ma_th = $_GET['id'];
		$getData = new getData();
		$queryLMath = $getData->getMath($ma_th);
		$resultmath = mysqli_fetch_assoc($queryLMath);

		// phân trang
		$item_per_page = 24;
		$current_page = !empty($_GET['pagination'])?$_GET['pagination']:1; //Trang hiện tại
		$offset = ($current_page - 1) * $item_per_page;
		$queryProductPl = $getData->getProductTh($ma_th,$item_per_page,$offset);
		$totalRecords = $getData->getNum_rowsTh($ma_th);
		$totalPages = ceil($totalRecords / $item_per_page);
		//


		// time
		$tz = 'Asia/Ho_Chi_Minh';
		$timestamp = time();
		$dt = new DateTime("now", new DateTimeZone($tz)); 
		$dt->setTimestamp($timestamp);
		$date_tao=$dt->format('Y-m-d H:i:s');
		// time
		$now = $date_tao;
		$date = new DateTime($now);
		$days = 30;
		// >= php version 5.3
		date_sub($date, date_interval_create_from_date_string($days.' days'));
		$date_minus = date_format($date, 'Y-m-d H:i:s');

		$querySpNew = $getData->getProductNew($date_minus);
		include('views/main_thuong_hieu.php');
	}
	public function mainAccount(){
		$select=isset($_GET['select'])?$_GET['select']:'';
		switch ($select) {
			case 'login':
				include('views/main_dang_nhap.php');
				break;
			case 'registration':
				include('views/main_tao_tai_khoan.php');
				break;
			default:
				# code...
				break;
		}
		

	}
	public function mainCart(){
		$select=isset($_GET['select'])?$_GET['select']:'';
		switch ($select) {
			case 'order':
				include('views/main_dat_hang.php');
				break;
			case 'registration':
				include('views/main_tao_tai_khoan.php');
				break;
			case '':
				include('views/main_gio_hang_ko_dang_nhap.php');
				break;
			default:
				# code...
				break;
		}

	}
	
}
/**
 * 
 */
class header
{
	
	public function header(){
		$getData = new getData();
		$queryLogo = $getData->getWhere('img','img_show','loai_anh',1);
		$resultLogo = mysqli_fetch_assoc($queryLogo);

		$queryDm = $getData->getDm();
		
		while ($resultDm = mysqli_fetch_assoc($queryDm)) {
			$result[]=$resultDm;
		}

		$queryInfor = $getData->getAll('thongtinweb');
		$resultInfor = mysqli_fetch_assoc($queryInfor);

		include('views/heade.php');
	}
}

class footer
{
	
	public function footer(){
		$getData = new getData();
		$queryHtCuahang = $getData->getAll('hethongch');
		$queryInfor = $getData->getAll('thongtinweb');
		$resultInfor = mysqli_fetch_assoc($queryInfor);
		include('views/footer.php');
	}
}

?>