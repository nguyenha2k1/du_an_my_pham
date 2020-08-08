<?php 

###### db ##########
$db_username = 'root';
$db_password = '';
$db_name = 'my_pham';
$db_host = 'localhost';
################
  
//check we have username post var
if(isset($_POST["username"]))
{
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }  
  
        //try connect to db
    $connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
  
    //trim and lowercase username
    $username =  strtolower(trim($_POST["username"]));
  
    //sanitize username
    $username = filter_var($username, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
  
    //check username in db
    $results = mysqli_query($connecDB,"SELECT ten_tk FROM taikhoan WHERE ten_tk='$username' AND cap = 3");
  
    //return total count
    $username_exist = mysqli_num_rows($results); //total records
  
    //if value is more than 0, username is not available
    if($username_exist == 0) {
        echo '';
    }else{
        echo 'Tài khoản đã tồn tại!';
    }
  
    //close db connection
    mysqli_close($connecDB);
}
if(isset($_POST["email"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }  
  
    $connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
  
    $email =  strtolower(trim($_POST["email"]));
  
    $email = filter_var($email, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
  
    $results = mysqli_query($connecDB,"SELECT email FROM thongtintk WHERE email='$email'");
  
    $username_exist = mysqli_num_rows($results); //total records
  
    if($username_exist == 0) {
        echo '';
    }else{
        echo 'Email đã tồn tại!';
    }
  
    //close db connection
    mysqli_close($connecDB);
}



if(isset($_POST["sdt"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }  
  
    $connecDB = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
  
    $sdt =  strtolower(trim($_POST["sdt"]));
  
    $sdt = filter_var($sdt, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
  
    $results = mysqli_query($connecDB,"SELECT sdt FROM thongtintk WHERE sdt='$sdt'");
  
    $username_exist = mysqli_num_rows($results); //total records
  
    if($username_exist == 0) {
        echo '';
    }else{
        echo 'SĐT đã tồn tại!';
    }
  
    //close db connection
    mysqli_close($connecDB);
}
?>