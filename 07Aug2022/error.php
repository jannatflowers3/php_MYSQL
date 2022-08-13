<?php

fopen("file.txt",'r');
$error = error_get_last();

echo "<pre>";
print_r($error);
?>