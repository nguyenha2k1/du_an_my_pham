<?php 
session_start();
include('models/model.php');
$_SESSION['page'] = 'main_email_khuyen_mai';
require_once('views/tc_admin.php');

?>