<?php 
session_start();
// include('models/modelAccoun.php');
$_SESSION['page'] = 'main_dashboard';
require_once('views/tc_admin.php');

?>