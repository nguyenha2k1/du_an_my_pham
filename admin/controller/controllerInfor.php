<?php 
session_start();
include('models/model.php');
$_SESSION['page'] = 'main_tt_website';
require_once('views/tc_admin.php');

?>