<?php 
session_start();
include('models/model.php');
$_SESSION['page'] = 'main_thuong_hieu';
require_once('views/tc_admin.php');

?>