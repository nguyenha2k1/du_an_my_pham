<?php
$q= (isset($_GET['q']))?$_GET['q']:'';
$conn = mysqli_connect('localhost','root','');
if (!$conn) {
	die ("Không thể kết nối!". mysqli_error($conn));
}
mysqli_select_db($conn,'my_pham');
$sql = "SELECT * FROM sanpham WHERE ten_sp like '%".$q."%'";
$result = mysqli_query($conn,$sql);
while ($row= mysqli_fetch_array($result))
echo "<li>".$row['ten_sp']."</li>";
mysqli_close($conn);
?>