<?php 
//cách 1
// echo date('d/m/Y H:i:s', time() + 5 * 60 * 60);
// cách 2
$tz = 'Asia/Ho_Chi_Minh';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); 
$dt->setTimestamp($timestamp);
echo $dt->format('d/m/Y, H:i:s');?>