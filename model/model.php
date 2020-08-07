<?php 
include('config/connect.php');


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
class getData extends disconnect
{
	
	public function getWhere($select,$from,$where1,$where2)
	{
		global $conn;
		$this->select = $select;
		$this->from = $from;
		$this->where1 = $where1;
		$this->where2 = $where2;
		$sql = "SELECT $this->select FROM $this->from WHERE $this->where1 = $this->where2";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getWhereCart($where1,$where2)
	{
		global $conn;
		$this->where1 = $where1;
		$this->where2 = $where2;
		$sql = "SELECT sanpham.ten_sp,sanpham.gia_ban,sanpham.ma_sp,sanpham.gia_thi_truong,img_sp.img 
			FROM sanpham
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			WHERE $this->where1 = $this->where2
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getAll($from){
		global $conn;
		$this->from = $from;
		$sql = "SELECT * FROM $this->from ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	

	public function getProduct(){
		global $conn;
		$sql = "SELECT sanpham.ten_sp,sanpham.gia_ban,sanpham.ma_sp,sanpham.gia_thi_truong,img_sp.img 
			FROM sanpham
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			LIMIT 12
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getProductNgauNhien(){
		global $conn;
		$sql = "SELECT sanpham.ten_sp,sanpham.gia_ban,sanpham.ma_sp,sanpham.gia_thi_truong,img_sp.img 
			FROM sanpham
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			ORDER BY RAND()
			LIMIT 12
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getProductWhere($where1,$where2){
		global $conn;
		$this->where1 = $where1;
		$this->where2 = $where2;
		$sql = "SELECT sanpham.ten_sp,sanpham.gia_ban,sanpham.ma_sp,sanpham.gia_thi_truong,img_sp.img 
			FROM sanpham
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			WHERE $this->where1 = $this->where2
			LIMIT 12
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getProductNew($date){
		global $conn;
		$this->date = $date;
		$sql = "SELECT sanpham.ten_sp,sanpham.gia_ban,sanpham.ma_sp,sanpham.gia_thi_truong,img_sp.img 
			FROM sanpham
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			WHERE date_tao > '$this->date' 
			ORDER BY RAND() DESC 
			LIMIT 8
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getProductDetail($ma_sp){
		global $conn;
		$this->ma_sp = $ma_sp;
		$sql = "SELECT sanpham.ma_sp, sanpham.ten_sp,sanpham.gia_ban,sanpham.ma_pl, sanpham.gia_thi_truong, sanpham.sl_trong_kho, sanpham.hien_thi,gioithieusp.khai_quat,gioithieusp.noidung,img_sp.img,thuonghieu.ten_thuong_hieu,phanloaisp.ten_loai_sp ,img_sp.img
			FROM `sanpham` 
			INNER JOIN gioithieusp ON sanpham.ma_sp = gioithieusp.ma_sp
			INNER JOIN thuonghieu ON sanpham.ma_th = thuonghieu.ma_th
			INNER JOIN phanloaisp ON sanpham.ma_pl = phanloaisp.ma_pl 
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp 
			WHERE sanpham.ma_sp= $this->ma_sp
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getImgbs($ma_sp){
		global $conn;
		$this->ma_sp = $ma_sp;
		$sql = "SELECT  sanpham.ten_sp,img_sp_bs.img
			FROM `sanpham` 
			INNER JOIN img_sp_bs ON sanpham.ma_sp = img_sp_bs.ma_sp 
			WHERE sanpham.ma_sp= $this->ma_sp
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}

	public function getMadm($ma_dm){
		global $conn;
		$this->ma_dm = $ma_dm;
		$sql = "SELECT phanloaisp.ma_dm,img_dm.img,danhmuc.ten_dm
				FROM phanloaisp
				INNER JOIN img_dm ON phanloaisp.ma_dm = img_dm.ma_dm
				INNER JOIN danhmuc ON phanloaisp.ma_dm = danhmuc.ma_dm
				WHERE phanloaisp.ma_dm = $this->ma_dm
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getDm(){
		global $conn;
		$sql = "SELECT *
				FROM danhmuc
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getMapl($ma_pl){
		global $conn;
		$this->ma_pl = $ma_pl;
		$sql = "SELECT phanloaisp.ten_loai_sp,phanloaisp.ma_pl
				FROM phanloaisp
				WHERE phanloaisp.ma_pl = $this->ma_pl
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getMath($ma_th){
		global $conn;
		$this->ma_th = $ma_th;
		$sql = "SELECT thuonghieu.ten_thuong_hieu,thuonghieu.ma_th
				FROM thuonghieu
				WHERE thuonghieu.ma_th = $this->ma_th
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	
	public function getProductDm($ma_dm,$item_per_page,$offset){
		global $conn;
		$this->ma_dm = $ma_dm;
		$this->item_per_page=$item_per_page;
		$this->offset=$offset;
		$sql = "SELECT sanpham.ten_sp,sanpham.gia_ban,sanpham.ma_sp,sanpham.gia_thi_truong,img_sp.img 
			FROM `sanpham` 
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			INNER JOIN phanloaisp ON sanpham.ma_pl = phanloaisp.ma_pl
			WHERE phanloaisp.ma_dm = $this->ma_dm
			ORDER BY RAND() DESC 
			LIMIT $this->item_per_page OFFSET $this->offset ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getProDm($ma_dm){
		global $conn;
		$this->ma_dm = $ma_dm;
		$sql = "SELECT sanpham.ten_sp,sanpham.gia_ban,sanpham.ma_sp,sanpham.gia_thi_truong,img_sp.img 
			FROM `sanpham` 
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			INNER JOIN phanloaisp ON sanpham.ma_pl = phanloaisp.ma_pl
			WHERE phanloaisp.ma_dm = $this->ma_dm
			ORDER BY RAND() DESC 
			LIMIT 12  ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getProductPl($ma_pl,$item_per_page,$offset){
		global $conn;
		$this->ma_pl = $ma_pl;
		$this->item_per_page=$item_per_page;
		$this->offset=$offset;
		$sql = "SELECT sanpham.ten_sp,sanpham.gia_ban,sanpham.ma_sp,sanpham.gia_thi_truong,img_sp.img
			FROM `sanpham` 
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			INNER JOIN phanloaisp ON sanpham.ma_pl = phanloaisp.ma_pl
			WHERE phanloaisp.ma_pl = $this->ma_pl
			ORDER BY RAND() DESC 
			LIMIT $this->item_per_page OFFSET $this->offset ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getProductTh($ma_th,$item_per_page,$offset){
		global $conn;
		$this->ma_th = $ma_th;
		$this->item_per_page=$item_per_page;
		$this->offset=$offset;
		$sql = "SELECT sanpham.ten_sp,sanpham.gia_ban,sanpham.ma_sp,sanpham.gia_thi_truong,img_sp.img
			FROM `sanpham` 
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			INNER JOIN thuonghieu ON sanpham.ma_th = thuonghieu.ma_th
			WHERE thuonghieu.ma_th = $this->ma_th
			ORDER BY RAND() DESC 
			LIMIT $this->item_per_page OFFSET $this->offset ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getNum_rowsPl($ma_pl){
		global $conn;
		$totalRecords = mysqli_query($conn, "SELECT * 
			FROM `sanpham` 
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			INNER JOIN phanloaisp ON sanpham.ma_pl = phanloaisp.ma_pl
			WHERE phanloaisp.ma_pl = $ma_pl");
		$totalRecords = $totalRecords->num_rows;
		return $totalRecords;
	}
	public function getNum_rowsTh($ma_th){
		global $conn;
		$totalRecords = mysqli_query($conn, "SELECT * 
			FROM `sanpham` 
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			INNER JOIN thuonghieu ON sanpham.ma_th = thuonghieu.ma_th
			WHERE thuonghieu.ma_th = $ma_th");
		$totalRecords = $totalRecords->num_rows;
		return $totalRecords;
	}
	public function getNum_rows($ma_dm){
		global $conn;
		$totalRecords = mysqli_query($conn, "SELECT * 
			FROM `sanpham` 
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			INNER JOIN phanloaisp ON sanpham.ma_pl = phanloaisp.ma_pl
			WHERE phanloaisp.ma_dm = $ma_dm");
		$totalRecords = $totalRecords->num_rows;
		return $totalRecords;
	}
}




/**
 * 
 */
class pushdata extends disconnect
{
	public function updateTK($id,$name,$sex,$sdt,$address,$email)
	{
		global $conn;
		$sql = "UPDATE `thongtintk` 
		SET `ho_va_ten`='$name',`gioi_tinh`='$sex',`sdt`='$sdt',`dia_chi`='$address',`email`='$email'
		WHERE id = $id";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function pushTK($ngay_tao,$cap,$name,$sex,$sdt,$address,$email)
	{
		global $conn;
		$sqlTk = "INSERT INTO `taikhoan`(`ngay_tao`, `cap`) 
					VALUES ('$ngay_tao','$cap')
					";
		$queryTk =  mysqli_query($conn,$sqlTk);

		$sql = "SELECT id
				FROM taikhoan
				ORDER BY  id DESC
				LIMIT 1
				";
		$query = mysqli_query($conn,$sql);
		$result = mysqli_fetch_assoc($query);
		$id=$result['id'];

		$sqlTTtk = "INSERT INTO `thongtintk`( `id`, `ho_va_ten`, `gioi_tinh`, `sdt`, `dia_chi`, `email`) 
		VALUES ('$id','$name','$sex','$sdt','$address','$email')
		";
		$queryTTtk = mysqli_query($conn, $sqlTTtk);
		return $id;
	}
	public function pushOrder($id,$note,$ngay_tao,$phi_ship,$tong_tien,$trang_thai){
		global $conn;
		

		$sqlDh = "INSERT INTO `donhang`( `id_khach_hang`, `ghi_chu`, `phi_ship`, `tong_tien`, `ngay_tao`, `trang_thai`) 
		VALUES ('$id','$note','$phi_ship','$tong_tien','$ngay_tao','$trang_thai')
		";

		$queryDh = mysqli_query($conn, $sqlDh);
		$sqlIDdh = "SELECT ma_dh
				FROM donhang
				ORDER BY  ma_dh DESC
				LIMIT 1
				";
		$queryIDdh = mysqli_query($conn,$sqlIDdh);
		$resultIDdh = mysqli_fetch_assoc($queryIDdh);
		$ma_dh=$resultIDdh['ma_dh'];

		return $ma_dh;

	}
	public function pushOrderCt($ma_sp,$soluong,$ma_dh,$gia_tien){
		global $conn;
		$sql = "INSERT INTO `chitietdonhang`(`ma_sp`, `so_luong`, `ma_dh`, `gia_tien`) 
		VALUES ('$ma_sp','$soluong','$ma_dh','$gia_tien')
		";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
}
/**
 * 
 */
class account extends disconnect
{
	
	function login($user,$pass){
		global $conn;
		$sql = "Select * from taikhoan where ten_tk = '$user' and mk = '$pass' and cap = 3 ";
		$query = mysqli_query($conn , $sql);
		
		return $query;
	}
	function getAccount($user){
		global $conn;
		$sql = "SELECT thongtintk.id, thongtintk.ho_va_ten,thongtintk.gioi_tinh,thongtintk.sdt,thongtintk.dia_chi,thongtintk.email 
		FROM taikhoan INNER JOIN thongtintk ON taikhoan.id = thongtintk.id 
		WHERE taikhoan.ten_tk = '$user'";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	function getName($user)
	{
		global $conn;
		$sql = "SELECT thongtintk.ho_va_ten FROM taikhoan INNER JOIN thongtintk ON taikhoan.id =thongtintk.id WHERE taikhoan.ten_tk = '$user'";
		$query = mysqli_query($conn, $sql);
		return $query;
	}
}

?>