<?php 
// session_start();
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
		$ngay = 15;
		$times = $ngay * 24  * 60 * 60;
		switch ($select) {
			case 'login':
				include('views/main_dang_nhap.php');
				break;
			case 'getlogin':
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				$account = new account();
				$query = $account->login($user,$pass);
				$result = mysqli_fetch_assoc($query);
				$num = mysqli_num_rows($query);
				if ($num == 1) {
					$queryName = $account->getName($result['ten_tk']);
					$resultName = mysqli_fetch_assoc($queryName);
					setcookie("customer",$resultName['ho_va_ten'],time()+$times);
					setcookie("ten_tk",$result['ten_tk'],time()+$times);
					header("Location: ./");

				}
				else{
					// echo "sai";
					header("Location: ?page=account&select=login");
				}
				break;
			case 'logout':
				setcookie("customer",$resultName['ho_va_ten'],time()-$times);
				setcookie("ten_tk",$result['ten_tk'],time()-$times);
				header("Location: ?page=account&select=login");

				break;
			case 'registration':
				include('views/main_tao_tai_khoan.php');
				break;
			case 'get_registration':
				
				break;
			case 'infor':
				echo "Thông tin tài khoản";
				break;
			default:
				# code...
				break;
		}
		

	}
	public function mainCart(){
		$select=isset($_GET['select'])?$_GET['select']:'';
		$ngay = 15;
		$times = $ngay * 24  * 60 * 60;
		switch ($select) {
			case 'order':
				if (isset($_COOKIE['cart'])) {
					$act = isset($_GET['act'])?$_GET['act']:'';
					switch ($act) {
						case '':
							$decode = json_decode($_COOKIE['cart'], true);
							$array = $decode;
							$count = count($array);
							if (isset($_COOKIE['ten_tk'])) {
								$user = $_COOKIE['ten_tk'];
								$account = new account();
								$query  = $account->getAccount($user);
								$result = mysqli_fetch_assoc($query);
							}
							include('views/main_dat_hang.php');
							break;
						
						default:
							# code...
							break;
					}
				}else{
					header("Location: ?page=cart");
				}
				break;
			case 'pay':
				if (isset($_COOKIE['cart'])) {
					$pushdata = new pushdata();
					$name = $_POST['name'];
					$sex = $_POST['sex'];
					$sdt = $_POST['sdt'];
					$address = $_POST['address'];
					$email = $_POST['email'];
					$note = $_POST['note'];
					
					$cart = $_COOKIE['cart'];
					$phi_ship = 30000;

					$decode = json_decode($_COOKIE['cart'], true);
					$array = $decode;
					$count = count($array);
					$tongtien = 0;
					for ($i=0; $i < $count ; $i++) { 
						$thanhtien = $array[$i]['gia_ban']*$array[$i]['soluong'];
					    $tongtien = $tongtien+$thanhtien;
					}
					$tong_tien = $tongtien + $phi_ship;
					$trang_thai = 1;
					// time
					$tz = 'Asia/Ho_Chi_Minh';
					$timestamp = time();
					$dt = new DateTime("now", new DateTimeZone($tz)); 
					$dt->setTimestamp($timestamp);
					$ngay_tao=$dt->format('Y-m-d H:i:s');
					// time
					if (isset($_COOKIE['customer'])) {
						$user = $_COOKIE['ten_tk'];
						$account = new account();
						$query  = $account->getAccount($user);
						$result = mysqli_fetch_assoc($query);
						$id = $result['id'];
						$query = $pushdata->updateTK($id,$name,$sex,$sdt,$address,$email);
					}else{
						$cap = 4;
						$id = $pushdata->pushTK($ngay_tao,$cap,$name,$sex,$sdt,$address,$email);
					}

					

					$ma_dh = $pushdata->pushOrder($id,$note,$ngay_tao,$phi_ship,$tong_tien,$trang_thai);
					for ($i=0; $i < $count ; $i++) { 
						$pushdata->pushOrderCt($array[$i]['ma_sp'],$array[$i]['soluong'],$ma_dh,$array[$i]['gia_ban']);
					}
					
					setcookie("gio_hang",'xoa',time()-$times);
					setcookie("sl",'xoa',time()-$times);
					setcookie("cart",'xoa',time()-$times);
					include('views/main_dat_hang_ok.php');
				}else{
					header("Location: ?page=cart");
				}
				break;	
			case '':
				
				$str = isset($_COOKIE['gio_hang'])?$_COOKIE['gio_hang']:'';
				$arrayMa_sp = explode(',', $str);
				$count = count($arrayMa_sp);
				if (!empty($_COOKIE['gio_hang']) && !empty($_COOKIE['cart'])) {
					$decode = json_decode($_COOKIE['cart'], true);
					$array = $decode;
					$countA = count($array);
					if ($count!=$countA) {
						setcookie("cart",'xoa',time()-$times);
						header("Location: ?page=cart");
					}
					$act = isset($_GET['act'])?$_GET['act']:'';
					switch ($act) {
						case 'soluong':
							$ma = $_GET['ma'];
							// echo $ma;
							$sl = $_GET['sl'];
							// foreach ($array as $value) {
								# code...
							// }
							for ($i=0; $i < $countA; $i++) { 
								if ($array[$i]['ma_sp']==$ma) {
									$array[$i]['soluong']=$sl;
								}
								
							}
							
							$st =  json_encode($array);
							setcookie("cart",$st,time()+$times);
							header("Location: ?page=cart");
							break;
						
						default:
							# code...
							break;
					}
					// echo "ok";
					include('views/main_gio_hang_ko_dang_nhap.php');
				}else{
					if (!empty($_COOKIE['gio_hang'])) {
						$str = $_COOKIE['gio_hang'];
						$getData = new getData();
						$arrayMa_sp = explode(',', $str);
						$array = array();
						$count = count($arrayMa_sp);
						if (empty($array)) {
							for ($i=0; $i < $count ; $i++) { 
								$queryDonH = $getData->getWhereCart('sanpham.ma_sp',$arrayMa_sp[$i]);
								$result = mysqli_fetch_assoc($queryDonH);
								$array[$i] = $result;
								$array[$i]['soluong'] = 1;
							}
							// echo "Biến này rỗng";
						}
						$st =  json_encode($array);
						setcookie("cart",$st,time()+$times);
						$countA = count($array);
						// echo "<pre>";
						// print_r($decode);
						include('views/main_gio_hang_ko_dang_nhap.php');
					}else{
						include('views/main_gio_hang_trong.php');

					}
				}
				
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