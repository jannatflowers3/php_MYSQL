<?php
 class student {

 }
 class teacher{

 }

 $strud = new student();
 if($strud instanceof student){
    echo "yes <br>";
 }
 else{
    echo "No <br>";
 }
//  new class tar instant ta kar object   kiin ajachai kore
 $strud = new student();
 if($strud instanceof teacher){
    echo "yes<br>";
 }
 else{
    echo "No";
 }

 echo class_exists("teacher");   //class ar modhe teacher class method ta ase kina nthakle 1 dekhavbe na thakle 0 output dekhave
//  new class tar instant class ar modhe class ase kiin ajachai kore
echo class_exists("teacher_all");



echo "<br>";
echo get_class($strud);
?>