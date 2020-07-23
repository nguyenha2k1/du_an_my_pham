<?php 
/**
 * 
 */
include('../config/connect.php');

/**
 * login
 */
/**
 * 
 */
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
class loginAdmin extends disconnect
{
	public $user;
	public $pass;
	public function __construct($user,$pass){
		$this->user=$user;
		$this->pass=$pass;
	}
	function login(){
		global $conn;
		$sql = "Select * from taikhoan where ten_tk = '$this->user' and mk = '$this->pass' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		return $num_rows;
		$this->disconnect_db();
	}
}
/**
 * 
 */
class dashboard extends disconnect
{
	
	public function get(){

	}
}
/**
 * 
 */






















class product extends disconnect
{
	
	public function get($item_per_page,$offset){
		global $conn;
		$this->item_per_page=$item_per_page;
		$this->offset=$offset;
		$sql = "SELECT sanpham.ma_sp, sanpham.ten_sp, sanpham.date_tao,sanpham.gia_ban, sanpham.gia_thi_truong, sanpham.sl_trong_kho,thuonghieu.ten_thuong_hieu, phanloaisp.ten_loai_sp, sanpham.sl_da_ban,sanpham.hien_thi
			FROM `sanpham` 
			INNER JOIN thuonghieu ON sanpham.ma_th = thuonghieu.ma_th
			INNER JOIN phanloaisp ON sanpham.ma_pl = phanloaisp.ma_pl
			LIMIT $this->item_per_page OFFSET $this->offset ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getSearch($column_name,$search){
		global $conn;
		$this->column_name=$column_name;
		$this->search=$search;
		$sql = "SELECT sanpham.ma_sp, sanpham.ten_sp, sanpham.date_tao,sanpham.gia_ban, sanpham.gia_thi_truong, sanpham.sl_trong_kho,thuonghieu.ten_thuong_hieu, phanloaisp.ten_loai_sp, sanpham.sl_da_ban,sanpham.hien_thi
			FROM `sanpham` 
			INNER JOIN thuonghieu ON sanpham.ma_th = thuonghieu.ma_th
			INNER JOIN phanloaisp ON sanpham.ma_pl = phanloaisp.ma_pl
			WHERE sanpham.$this->column_name LIKE $this->search 
			LIMIT 30 ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getTh(){
		global $conn;
		$sql = "SELECT * FROM `thuonghieu` ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getPl(){
		global $conn;
		$sql = "SELECT * FROM `phanloaisp` ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getNum_rows(){
		global $conn;
		$totalRecords = mysqli_query($conn, "SELECT * FROM `sanpham`");
		$totalRecords = $totalRecords->num_rows;
		return $totalRecords;
	}
	public function add($ten_sp,$date_tao,$gia_ban,$gia_thi_truong,$sl_trong_kho,$hien_thi,$ma_th,$ma_pl,$khai_quat,$noidung){
		global $conn;
		$this->ten_sp=$ten_sp;
		$this->date_tao=$date_tao;
		$this->gia_ban=$gia_ban;
		$this->gia_thi_truong=$gia_thi_truong;
		$this->sl_trong_kho=$sl_trong_kho;
		$this->hien_thi=$hien_thi;
		$this->ma_th=$ma_th;
		$this->ma_pl=$ma_pl;
		$this->khai_quat=$khai_quat;
		$this->noidung=$noidung;
		$sqlSp = "INSERT INTO `sanpham`(`ten_sp`, `date_tao`, `gia_ban`, `gia_thi_truong`, `ma_th`, `sl_trong_kho`, `ma_pl`, `hien_thi`) 
			VALUES ('$this->ten_sp','$this->date_tao',$this->gia_ban,$this->gia_thi_truong,$this->ma_th,$this->sl_trong_kho,$this->ma_pl,$this->hien_thi)
			";
		$querySp = mysqli_query($conn,$sqlSp);
		$sql = "SELECT ma_sp
				FROM sanpham
				ORDER BY  ma_sp DESC
				LIMIT 1
				";
		$query = mysqli_query($conn,$sql);
		$result = mysqli_fetch_assoc($query);
		$ma_sp=$result['ma_sp'];
		$this->ma_sp=$ma_sp;
		$sqlTt = "INSERT INTO `gioithieusp`(ma_sp, `khai_quat`, `noidung`) 
				VALUES ($this->ma_sp,'$this->khai_quat','$this->noidung')
				";
		$queryTt = mysqli_query($conn,$sqlTt);
		return $querySp and $queryTt;
	}
	public function edit($id){
		global $conn;
		$this->id=$id;
		$sql = "SELECT  sanpham.ten_sp,sanpham.gia_ban, sanpham.gia_thi_truong, sanpham.sl_trong_kho,sanpham.ma_th, sanpham.ma_pl, sanpham.hien_thi,gioithieusp.khai_quat,gioithieusp.noidung,img_sp.img/*,thuonghieu.ma_th,phanloaisp.ma_pl */
			FROM `sanpham` 
			INNER JOIN gioithieusp ON sanpham.ma_sp = gioithieusp.ma_sp
			/*INNER JOIN thuonghieu ON sanpham.ma_th = thuonghieu.ma_th
			INNER JOIN phanloaisp ON sanpham.ma_pl = phanloaisp.ma_pl */
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp WHERE sanpham.ma_sp= $this->id";
			// $sql = "SELECT  sanpham.ten_sp,sanpham.gia_ban, sanpham.gia_thi_truong, sanpham.sl_trong_kho,sanpham.ma_th, sanpham.ma_pl, sanpham.hien_thi
			// FROM `sanpham` 
			// ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function update($ma_sp,$ten_sp,$gia_ban,$gia_thi_truong,$sl_trong_kho,$hien_thi,$ma_th,$ma_pl,$khai_quat,$noidung){
		global $conn;
		$this->ma_sp=$ma_sp;
		$this->ten_sp=$ten_sp;
		$this->gia_ban=$gia_ban;
		$this->gia_thi_truong=$gia_thi_truong;
		$this->sl_trong_kho=$sl_trong_kho;
		$this->hien_thi=$hien_thi;
		$this->ma_th=$ma_th;
		$this->ma_pl=$ma_pl;
		$this->khai_quat=$khai_quat;
		$this->noidung=$noidung;
		// update riêng bảng
		$sqlSp = "UPDATE `sanpham` 
			SET `ten_sp`='$this->ten_sp',`gia_ban`=$this->gia_ban,`gia_thi_truong`=$this->gia_thi_truong,`ma_th`=$this->ma_th,`sl_trong_kho`=$this->sl_trong_kho,`ma_pl`=$this->ma_pl,`hien_thi`=$this->hien_thi 
			WHERE ma_sp = $this->ma_sp";
		$querySp = mysqli_query($conn,$sqlSp);
		$sqlTt = "UPDATE `gioithieusp`
			SET `khai_quat`='$this->khai_quat',`noidung`='$this->noidung' 
			WHERE ma_sp = $this->ma_sp";
		$queryTt = mysqli_query($conn,$sqlTt);

		return $querySp and $queryTt;
		
	}
	public function delete($id){
		global $conn;
		$this->id=$id;
		$sql = "DELETE FROM `sanpham` WHERE ma_sp = $this->id";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
}















class imagesSp extends disconnect
{
	
	public function get($item_per_page,$offset){
		global $conn;
		$this->item_per_page=$item_per_page;
		$this->offset=$offset;
		$sql = "SELECT sanpham.ma_sp, sanpham.ten_sp, img_sp.img
			FROM `sanpham` 
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			LIMIT $this->item_per_page OFFSET $this->offset ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getSearch($column_name,$search){
		global $conn;
		$this->column_name=$column_name;
		$this->search=$search;
		$sql = "SELECT sanpham.ma_sp, sanpham.ten_sp, img_sp.img
			FROM `sanpham` 
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			WHERE sanpham.$this->column_name LIKE $this->search 
			LIMIT 20 ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	
	public function getNum_rows(){
		global $conn;
		$totalRecords = mysqli_query($conn, "SELECT * FROM `img_sp`");
		$totalRecords = $totalRecords->num_rows;
		return $totalRecords;
	}
	
	public function edit($id){
		global $conn;
		$this->id=$id;
		$sql = "SELECT  sanpham.ten_sp, img_sp.img
				FROM `sanpham` 
				INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
				WHERE sanpham.ma_sp= $this->id
			";
			
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function update($ma_sp,$img){
		global $conn;
		$this->ma_sp=$ma_sp;
		$this->img=$img;
		
		// update riêng bảng
		$sql = "UPDATE `img_sp` 
			SET `img`=$this->img  
			WHERE ma_sp = $this->ma_sp";
		$query = mysqli_query($conn,$sql);
		return $query;
		
	}
	
}






















class account extends disconnect
{
	
	public function get($item_per_page,$offset){
		global $conn;
		$this->item_per_page=$item_per_page;
		$this->offset=$offset;
		$sql = "SELECT sanpham.ma_sp, sanpham.ten_sp, sanpham.date_tao,sanpham.gia_ban, sanpham.gia_thi_truong, sanpham.sl_trong_kho,thuonghieu.ten_thuong_hieu, phanloaisp.ten_loai_sp, sanpham.sl_da_ban,sanpham.hien_thi
			FROM `sanpham` 
			INNER JOIN thuonghieu ON sanpham.ma_th = thuonghieu.ma_th
			INNER JOIN phanloaisp ON sanpham.ma_pl = phanloaisp.ma_pl
			LIMIT $this->item_per_page OFFSET $this->offset ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getSearch($column_name,$search){
		global $conn;
		$this->column_name=$column_name;
		$this->search=$search;
		$sql = "SELECT sanpham.ma_sp, sanpham.ten_sp, sanpham.date_tao,sanpham.gia_ban, sanpham.gia_thi_truong, sanpham.sl_trong_kho,thuonghieu.ten_thuong_hieu, phanloaisp.ten_loai_sp, sanpham.sl_da_ban,sanpham.hien_thi
			FROM `sanpham` 
			INNER JOIN thuonghieu ON sanpham.ma_th = thuonghieu.ma_th
			INNER JOIN phanloaisp ON sanpham.ma_pl = phanloaisp.ma_pl
			WHERE sanpham.$this->column_name LIKE $this->search 
			LIMIT 30 ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getTh(){
		global $conn;
		$sql = "SELECT * FROM `thuonghieu` ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getPl(){
		global $conn;
		$sql = "SELECT * FROM `phanloaisp` ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getNum_rows(){
		global $conn;
		$totalRecords = mysqli_query($conn, "SELECT * FROM `sanpham`");
		$totalRecords = $totalRecords->num_rows;
		return $totalRecords;
	}
	public function add($ten_sp,$date_tao,$gia_ban,$gia_thi_truong,$sl_trong_kho,$hien_thi,$ma_th,$ma_pl,$khai_quat,$noidung){
		global $conn;
		$this->ten_sp=$ten_sp;
		$this->date_tao=$date_tao;
		$this->gia_ban=$gia_ban;
		$this->gia_thi_truong=$gia_thi_truong;
		$this->sl_trong_kho=$sl_trong_kho;
		$this->hien_thi=$hien_thi;
		$this->ma_th=$ma_th;
		$this->ma_pl=$ma_pl;
		$this->khai_quat=$khai_quat;
		$this->noidung=$noidung;
		$sqlSp = "INSERT INTO `sanpham`(`ten_sp`, `date_tao`, `gia_ban`, `gia_thi_truong`, `ma_th`, `sl_trong_kho`, `ma_pl`, `hien_thi`) 
			VALUES ('$this->ten_sp','$this->date_tao',$this->gia_ban,$this->gia_thi_truong,$this->ma_th,$this->sl_trong_kho,$this->ma_pl,$this->hien_thi)
			";
		$querySp = mysqli_query($conn,$sqlSp);
		$sql = "SELECT ma_sp
				FROM sanpham
				ORDER BY  ma_sp DESC
				LIMIT 1
				";
		$query = mysqli_query($conn,$sql);
		$result = mysqli_fetch_assoc($query);
		$ma_sp=$result['ma_sp'];
		$this->ma_sp=$ma_sp;
		$sqlTt = "INSERT INTO `gioithieusp`(ma_sp, `khai_quat`, `noidung`) 
				VALUES ($this->ma_sp,'$this->khai_quat','$this->noidung')
				";
		$queryTt = mysqli_query($conn,$sqlTt);
		return $querySp and $queryTt;
	}
	public function edit($id){
		global $conn;
		$this->id=$id;
		$sql = "SELECT  sanpham.ten_sp,sanpham.gia_ban, sanpham.gia_thi_truong, sanpham.sl_trong_kho,sanpham.ma_th, sanpham.ma_pl, sanpham.hien_thi,gioithieusp.khai_quat,gioithieusp.noidung,img_sp.img/*,thuonghieu.ma_th,phanloaisp.ma_pl */
			FROM `sanpham` 
			INNER JOIN gioithieusp ON sanpham.ma_sp = gioithieusp.ma_sp
			/*INNER JOIN thuonghieu ON sanpham.ma_th = thuonghieu.ma_th
			INNER JOIN phanloaisp ON sanpham.ma_pl = phanloaisp.ma_pl */
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp WHERE sanpham.ma_sp= $this->id";
			// $sql = "SELECT  sanpham.ten_sp,sanpham.gia_ban, sanpham.gia_thi_truong, sanpham.sl_trong_kho,sanpham.ma_th, sanpham.ma_pl, sanpham.hien_thi
			// FROM `sanpham` 
			// ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function update($ma_sp,$ten_sp,$gia_ban,$gia_thi_truong,$sl_trong_kho,$hien_thi,$ma_th,$ma_pl,$khai_quat,$noidung){
		global $conn;
		$this->ma_sp=$ma_sp;
		$this->ten_sp=$ten_sp;
		$this->gia_ban=$gia_ban;
		$this->gia_thi_truong=$gia_thi_truong;
		$this->sl_trong_kho=$sl_trong_kho;
		$this->hien_thi=$hien_thi;
		$this->ma_th=$ma_th;
		$this->ma_pl=$ma_pl;
		$this->khai_quat=$khai_quat;
		$this->noidung=$noidung;
		// update riêng bảng
		$sqlSp = "UPDATE `sanpham` 
			SET `ten_sp`='$this->ten_sp',`gia_ban`=$this->gia_ban,`gia_thi_truong`=$this->gia_thi_truong,`ma_th`=$this->ma_th,`sl_trong_kho`=$this->sl_trong_kho,`ma_pl`=$this->ma_pl,`hien_thi`=$this->hien_thi 
			WHERE ma_sp = $this->ma_sp";
		$querySp = mysqli_query($conn,$sqlSp);
		$sqlTt = "UPDATE `gioithieusp`
			SET `khai_quat`='$this->khai_quat',`noidung`='$this->noidung' 
			WHERE ma_sp = $this->ma_sp";
		$queryTt = mysqli_query($conn,$sqlTt);

		return $querySp and $queryTt;
		
	}
	public function delete($id){
		global $conn;
		$this->id=$id;
		$sql = "DELETE FROM `sanpham` WHERE ma_sp = $this->id";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
}


























/**
 * 
 */
// class getSp
// {
// 	public $arrayGet;
// 	public $arrayColumns;
// 	public $arrayValues;
// 	public $fromTable;
// 	public $where;
// 	public $set;
// 	public $limit;
// 	public $orderBy;
// 	public $groupBy;
// 	const $distinct='DISTINCT';

// 	public function __construct($arrayGet,$arrayColumns,$arrayValues,$fromTable,$where,$set,$limit,$orderBy,$groupBy){
// 		$this->arrayGet=$arrayGet;
// 		$this->arrayColumns=$arrayColumns;
// 		$this->arrayValues=$arrayValues;
// 		$this->fromTable=$fromTable;
// 		$this->where=$where;
// 		$this->set=$set;
// 		$this->limit=$limit;
// 		$this->orderBy=$orderBy;
// 		$this->groupBy=$groupBy;
// 	}
	
// 	function disconnect_db(){
// 		global $conn;
// 		if($conn){
// 			mysqli_close($conn);
// 		}
// 	}
// 	function get($){
// 		global $conn;
// 		$sql = "Select $this->arrayGet $this->distinct from $this->fromTable   ";
// 		$query = mysqli_query($conn,$sql);
// 		$result=mysqli_fetch_array($query);
// 		return $result;
// 		$this->disconnect_db();
// 	}
// 	function push(){
// 		global $conn;
// 		$sql = "INSERT INTO TEN_BANG (cot1, cot2, cot3,...cotN) VALUES (gia_tri1, gia_tri2, gia_tri3,...gia_triN);";
// 		$query = mysqli_query($conn,$sql);
// 		return $query;
// 		$this->disconnect_db();
// 	}
// 	function update(){
// 		global $conn;
// 		$sql = "UPDATE TEN_BANG SET cot1 = gtri1, cot2 = gtri2...., cotN = gtriN WHERE [DIEU_KIEN];";
// 		$query = mysqli_query($conn,$sql);
// 		return $query;
// 		$this->disconnect_db();
// 	}
// 	function delete(){
// 		global $conn;
// 		$sql = "DELETE FROM ten_bang WHERE [dieu_kien];";
// 		$query = mysqli_query($conn,$sql);
// 		return $query;
// 		$this->disconnect_db();
// 	}
// }
?>

