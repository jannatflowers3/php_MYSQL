<?php
$directory = "F:";
// echo disk_free_space($directory);
$bytes = disk_free_space($directory);
echo  $bytes/1024/1024 ."total space : <br>";
$totalin_bytes = disk_free_space($directory);
echo "free space : "."$bytes/1024/1024/1024,2";

?>