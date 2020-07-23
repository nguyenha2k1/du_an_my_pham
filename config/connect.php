<?php 


	 	$hostname='localhost';
	 	$username='root';
	 	$pass='';
	 	$dataname='my_pham';
	 	global $conn ;
 		$conn = new mysqli($hostname,$username,$pass,$dataname);
 		if (!$conn) {
 			echo "Kết nối thất bại";
 			exit();
 		}else{
 			mysqli_set_charset($conn,'utf8');
 		}


?>