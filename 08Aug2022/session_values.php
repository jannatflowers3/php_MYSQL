<?php
session_start();
print_r($_SESSION);
$_SESSION['name']= "jannat";
$_SESSION['age'] = 25;
$_SESSION['hobby'] = 'progmming';

// first a sob golo data dkhabe unsest korle akt akta kore array moche jabe
unset($_SESSION['age']);
?>