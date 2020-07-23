<?php
/**
  * 
  */
 class database {
 	private $hostname='localhost';
 	private $username='root';
 	private $pass='';
 	private $dataname='test';
 	private $conn = NULL;
 	private $result = NULL;
 	public function connect()
 	{
 		$this->conn = new mysqli($this->hostname,$this->username,$this->pass,$this->dataname);
 		if (!$this->conn) {
 			echo "Kết nối thất bại";
 			exit();
 		}else{
 			mysqli_set_charset($this->conn,'utf8');
 		}
 		return $this->conn;
 	}
 } 
?>