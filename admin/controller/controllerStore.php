<?php 
session_start();
include('models/model.php');
$_SESSION['page'] = 'main_he_thong_cua_hang';
require_once('views/tc_admin.php');

?>