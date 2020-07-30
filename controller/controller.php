<?php 
session_start();
require_once('model/model.php');
/**
 * 
 */
class ctrollHome 
{
	
	
	public function header(){
		$getData = new getData();
		$queryLogo = $getData->getWhere('img','img_show','loai_anh',1);
		$resultLogo = mysqli_fetch_assoc($queryLogo);


		$queryInfor = $getData->getAll('thongtinweb');
		$resultInfor = mysqli_fetch_assoc($queryInfor);

		include('views/heade.php');
	}
	public function main(){
		$getData = new getData();
		$querySlide = $getData->getWhere('img','img_show','loai_anh',2);
		
		$queryProduct = $getData->getProduct();
		
		include('views/main_trang_chu.php');
	}
	public function footer(){
		include('views/footer.php');
	}
}

?>