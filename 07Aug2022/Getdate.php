<?php
echo time();

$result = getdate(1659865381);
echo "<pre>";
print_r($result);
echo "today day is ".$result['mday']." month is".$result['month'];
echo date(" Y-m-y h:m:s a", time());
?>