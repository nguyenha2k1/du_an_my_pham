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
	public function getAll($from){
		global $conn;
		$this->from = $from;
		$sql = "SELECT * FROM $this->from ";
		$query = mysqli_query($conn,$sql);
		return $query;
	}

	public function getProduct(){
		global $conn;
		$sql = "SELECT sanpham.ten_sp,sanpham.gia_ban,sanpham.gia_thi_truong,img_sp.img 
			FROM sanpham
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			LIMIT 12
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
	public function getProductWhere($where1,$where2){
		global $conn;
		$this->where1 = $where1;
		$this->where2 = $where2;
		$sql = "SELECT * 
			FROM sanpham
			INNER JOIN img_sp ON sanpham.ma_sp = img_sp.ma_sp
			LIMIT 12
			";
		$query = mysqli_query($conn,$sql);
		return $query;
	}
}


?>