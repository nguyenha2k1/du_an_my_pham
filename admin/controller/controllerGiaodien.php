<?php 
session_start();
include('models/model.php');
$img = new imagesShow();

//
if (isset($_GET['img'])&&$_GET['img']=='logo') {
	$loai_anh = 1;
	$query = $img->get($loai_anh);
	$result = mysqli_fetch_assoc($query);
	switch ($select) {
		case 'update':
			$uploadedFiles = $_FILES['file_upload'];
			// echo "<pre>";
			// print_r( $uploadedFiles);
			// echo "</pre>";
			$queryUp = $img->update($uploadedFiles);
			if ($queryUp==true) {
				header('Location: ?page=true&select=show&img=logo');
			}else{
				header('Location: ?page=false&select=show&img=logo');
			}
			break;
		case '':
			$_SESSION['page'] = 'main_giao_dien_logo';
			break;
		default:
			# code...
			break;
	}
}
if (isset($_GET['img'])&&$_GET['img']=='slide') {
	$loai_anh = 2;
	$query = $img->get($loai_anh);
	switch ($select) {
		case 'add':
			$_SESSION['page'] = 'main_them_moi_slide_show';
			break;
		case 'getadd':
			$thong_tin = $_POST['thong_tin'];
			if (isset($_POST['hien_thi'])&&$_POST['hien_thi']=='on') {
				$hien_thi=1;
			}
			if (!isset($_POST['hien_thi'])) {
				$hien_thi=0;
			}
			$uploadedFiles = $_FILES['file_upload'];
			// echo "<pre>";
			// print_r( $uploadedFiles);
			// echo "</pre>";
			$queryAdd = $img->getadd($uploadedFiles,$thong_tin,$hien_thi);
			if ($queryAdd==true) {
				header('Location: ?page=true&select=show&img=slide');
			}else{
				header('Location: ?page=true&select=show&img=slide');
			}
			break;
		case 'delete':
			$id = $_GET['id'];
			$result = $img->delete($id);
			if ($result==true) {
				header('Location: ?page=true&select=show&img=slide');
			}else{
				header('Location: ?page=true&select=show&img=slide');
			}
			break;
		case '':
			$_SESSION['page'] = 'main_slide_show';
			break;
		default:
			# code...
			break;
	}
}



require_once('views/tc_admin.php');

?>