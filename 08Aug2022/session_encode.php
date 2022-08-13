<?php

session_start();
$_SESSION['name']= "jannat";
$_SESSION['login']= date('M-d-y h:i:s a');
$_SESSION['age']= 25;

$var = session_encode();
echo $var;

 //session destroy dile ageer data golo destroy korbe 

print_r($_SESSION);

// session_unset();

session_destroy();
?>