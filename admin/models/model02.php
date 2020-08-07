<?php 
include('../config/connect.php');

/**
 * login
 */
/**
 * 
 */
class uploadFiles
{
	public function validateUploadFile($file, $uploadPath) {
	    //Kiểm tra xem có vượt quá dung lượng cho phép không?
	    if ($file['size'] > 2 * 1024 * 1024) { //max upload is 2 Mb = 2 * 1024 kb * 1024 bite
	        return false;
	    }
	    //Kiểm tra xem kiểu file có hợp lệ không?
	    $validTypes = array("jpg", "jpeg", "png");
	    $fileType = substr($file['name'], strrpos($file['name'], ".") + 1);
	    if (!in_array($fileType, $validTypes)) {
	        return false;
	    }
	    //Check xem file đã tồn tại chưa? Nếu tồn tại thì đổi tên
	    $num = 1;
	    $fileName = substr($file['name'], 0, strrpos($file['name'], "."));
	    while (file_exists($uploadPath . '/' . $fileName . '.' . $fileType)) {
	        $fileName = $fileName . "(" . $num . ")";
	        $num++;
	    }
	    $file['name'] = $fileName . '.' . $fileType;
	    return $file;
	}
	public function upload($uploadedFiles){
		$this->uploadedFiles=$uploadedFiles;
		$files = array();
	    $errors = array();
	    //Xử lý gom dữ liệu vào từng file đã upload
	    foreach ($this->uploadedFiles as $key => $values) {
	        foreach ($values as $index => $value) {
	            $files[$index][$key] = $value;
	        }
	    }
		// 	echo "<pre>";

		// print_r($files);
		// 	echo "</pre>";

	    $uploadPath = "../images/products/" . date('d-m-Y', time());
	    if (!is_dir($uploadPath)) {
	        mkdir($uploadPath, 0777, true);
	    }
	    foreach ($files as $file) {
	        $file = $this->validateUploadFile($file, $uploadPath);
	        if ($file != false) {
	            move_uploaded_file($file["tmp_name"], $uploadPath . '/' . $file["name"]);
	        }else {
	            $file = false;
	        }
	    }
	    $uploadPath1 = substr($uploadPath, 3); 
	    $this->img=$img = $uploadPath1.'/'.$file['name'];
	 	return $this->img;
	}
	public function delete($url){
		$url = '../'.$result['img'];
	    unlink($url);
	}
}
/**
 * 
 */
class disconnect
{
	
	function disconnect_db()
	{
		global $conn;
		if($conn){
			mysqli_close($conn);
		}
	}
}


/**
 * 
 */
class thuongHieu extends disconnect
{
	
	public function get($item_per_page,$offset){
		global $conn;
		$this->item_per_page=$item_per_page;
		$this->offset=$offset;
		$sql = "SELECT thuonghieu.ma_th, thuonghieu.ten_thuong_hieu, thuonghieu.img
			FROM `thuonghieu` 
			LIMIT $this->item_per_page OFFSET $this->offset ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getNum_rows(){
		global $conn;
		$totalRecords = mysqli_query($conn, "SELECT * FROM `thuonghieu`");
		$totalRecords = $totalRecords->num_rows;
		return $totalRecords;
	}
	public function delete($ma_th){
		global $conn;
		$this->ma_th=$ma_th;
		$sql = "DELETE FROM `thuonghieu` WHERE ma_th = $this->ma_th";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getSearch($column_name,$search){
		global $conn;
		$this->column_name=$column_name;
		$this->search=$search;
		$sql = "SELECT thuonghieu.ma_th, thuonghieu.ten_thuong_hieu, thuonghieu.img
			FROM `thuonghieu` 
			WHERE thuonghieu.$this->column_name LIKE $this->search 
			LIMIT 10 ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function add($ten_thuong_hieu,$uploadedFiles){
		global $conn;
		$this->ten_thuong_hieu=$ten_thuong_hieu;
		$this->uploadedFiles=$uploadedFiles;
		$uploadFiles = new uploadFiles;
		$upload = $uploadFiles->upload($this->uploadedFiles);
		$sql = "INSERT INTO `thuonghieu`(`ten_thuong_hieu`, `img`) VALUES ('$this->ten_thuong_hieu','$upload')";
		$query = mysqli_query($conn,$sql);
		return $query;
		
	}
}

/**
 * 
 */
class chung extends disconnect
{
	
	public function getAll($select,$from){
		global $conn;
		$this->select=$select;
		$this->from=$from;
		$sql = "SELECT $this->select
			FROM `$this->from` 
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getNum_rows($from){
		global $conn;
		$totalRecords = mysqli_query($conn, "SELECT * FROM `$from`");
		$totalRecords = $totalRecords->num_rows;
		return $totalRecords;
	}
	public function delete($id,$from,$where){
		global $conn;
		$this->id=$id;
		$this->from=$from;
		$this->where=$where;
		$sql = "DELETE FROM `$this->from` WHERE $this->where = $this->id";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	// public function getSearch($column_name,$search){
	// 	global $conn;
	// 	$this->column_name=$column_name;
	// 	$this->search=$search;
	// 	$sql = "SELECT thuonghieu.ma_th, thuonghieu.ten_thuong_hieu, thuonghieu.img
	// 		FROM `thuonghieu` 
	// 		WHERE thuonghieu.$this->column_name LIKE $this->search 
	// 		LIMIT 10 ";
	// 	$query = mysqli_query($conn,$sql);
	// 	return $query;
	// }
	// public function add($add,$uploadedFiles){
	// 	global $conn;
	// 	$this->ten_thuong_hieu=$ten_thuong_hieu;
	// 	$this->uploadedFiles=$uploadedFiles;
	// 	$uploadFiles = new uploadFiles;
	// 	$upload = $uploadFiles->upload($this->uploadedFiles);
	// 	$sql = "INSERT INTO `thuonghieu`(`ten_thuong_hieu`, `img`) VALUES ('$this->ten_thuong_hieu','$upload')";
	// 	$query = mysqli_query($conn,$sql);
	// 	return $query;
		
	// }
}
/**
 * 
 */
class store extends disconnect
{
	
	public function add($address,$sdt,$date_tao){
		global $conn;
		$this->address=$address;
		$this->sdt=$sdt;
		$this->date_tao=$date_tao;
		$sql = "INSERT INTO `hethongch`( `dia_chi`, `sdt`, `ngay_tao`) 
				VALUES ('$this->address','$this->sdt','$this->date_tao')
			";
		$query = mysqli_query($conn,$sql);
		return $query;
		
	}
}

/**
 * 
 */
class infor extends disconnect
{
	public function add($tenCty,$dia_chi,$tel,$email,$website,$hotline,$tongdTuvan,$facebook,$instagram,$pinterest,$google){
		global $conn;
		$this->tenCty=$tenCty;
		$this->dia_chi=$dia_chi;
		$this->tel=$tel;
		$this->email=$email;
		$this->website=$website;
		$this->hotline=$hotline;
		$this->tongdTuvan=$tongdTuvan;
		$this->facebook=$facebook;
		$this->instagram=$instagram;
		$this->pinterest=$pinterest;
		$this->google=$google;
		
		$sql = "UPDATE `thongtinweb` 
				SET `tenCty`='$this->tenCty'
				,`dia_chi`='$this->dia_chi'
				,`tel`='$this->tel'
				,`email`='$this->email'
				,`website`='$this->website'
				,`hotline`='$this->hotline'
				,`tongdTuvan`='$this->tongdTuvan'
				,`facebook`='$this->facebook'
				,`instagram`='$this->instagram'
				,`pinterest`='$this->pinterest'
				,`google`='$this->google'
				WHERE 1
				";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
}




class order extends disconnect
{
	
	public function get($item_per_page,$offset){
		global $conn;
		$this->item_per_page=$item_per_page;
		$this->offset=$offset;
		$sql = "SELECT donhang.ma_dh, thongtintk.ho_va_ten, donhang.ngay_tao,donhang.ngay_ship, donhang.trang_thai, thongtintk.sdt,thongtintk.dia_chi,thongtintk.sdt,thongtintk.email 
			FROM `donhang` 
			-- INNER JOIN sanpham ON donhang.ma_sp = sanpham.ma_sp
			INNER JOIN thongtintk ON donhang.id_khach_hang = thongtintk.id
			LIMIT $this->item_per_page OFFSET $this->offset ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getdetail($id){
		global $conn;
		$this->id=$id;
		$sql = "SELECT thongtintk.id, donhang.ma_dh, thongtintk.ho_va_ten, donhang.ngay_tao,donhang.ngay_ship,donhang.ngay_ship_ht,donhang.ghi_chu,donhang.tong_tien,donhang.phi_ship, donhang.trang_thai, thongtintk.sdt,thongtintk.dia_chi,thongtintk.sdt,thongtintk.email 
			FROM `donhang` 
			-- INNER JOIN sanpham ON donhang.ma_sp = sanpham.ma_sp
			INNER JOIN thongtintk ON donhang.id_khach_hang = thongtintk.id
			WHERE ma_dh = $this->id;
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getID($id){
		global $conn;
		$this->id=$id;
		$sql = "SELECT   chitietdonhang.ma_sp,sanpham.ten_sp,chitietdonhang.gia_tien,chitietdonhang.so_luong
			FROM `chitietdonhang` 
			INNER JOIN donhang ON donhang.ma_dh = chitietdonhang.ma_dh
			INNER JOIN sanpham ON sanpham.ma_sp = chitietdonhang.ma_sp
			WHERE donhang.ma_dh = $this->id;
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getSearch($column_name,$search){
		global $conn;
		$this->column_name=$column_name;
		$this->search=$search;
		$sql = "SELECT donhang.ma_dh, thongtintk.ho_va_ten, donhang.ngay_tao,donhang.ngay_ship, donhang.trang_thai, thongtintk.sdt,thongtintk.dia_chi,thongtintk.sdt,thongtintk.email 
			FROM `donhang` 
			-- INNER JOIN sanpham ON donhang.ma_sp = sanpham.ma_sp
			INNER JOIN thongtintk ON donhang.id_khach_hang = thongtintk.id
			WHERE $this->column_name LIKE $this->search 
			LIMIT 20 ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}

	public function getNum_rows(){
		global $conn;
		$totalRecords = mysqli_query($conn, "SELECT * FROM `donhang`");
		$totalRecords = $totalRecords->num_rows;
		return $totalRecords;
	}
	
	
	public function update($ma_dh,$trang_thai){
		global $conn;
		$this->ma_dh=$ma_dh;
		$this->trang_thai=$trang_thai;
		
		$sql = "UPDATE `donhang`
			SET `trang_thai`='$this->trang_thai'
			WHERE ma_dh = $this->ma_dh";
		$query = mysqli_query($conn,$sql);
		return $query;
		
	}
	public function updateN_ship($ma_dh,$ngay,$select){
		global $conn;
		$sql = "UPDATE `donhang`
			SET `$select`='$ngay'
			WHERE ma_dh = $ma_dh";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function delete($id){
		global $conn;
		$this->id=$id;
		$sql = "DELETE FROM `donhang` WHERE ma_dh = $this->id";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
}




?>