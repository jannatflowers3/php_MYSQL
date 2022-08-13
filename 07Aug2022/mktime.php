<?php
$current = time();
$time = mktime(06,00,10,1,1,2021);   //hour, mimute, second ,  month ,date,year
// echo date("d-m-y",$time);

$diff = $current - $time;
$daye = round($diff/60/60/24);
// echo number_format($daye);
echo $daye;

?>