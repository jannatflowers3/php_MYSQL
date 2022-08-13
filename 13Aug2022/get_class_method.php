<?php
 
 class teacher{
   public $name="jannat";
   public $age;
   public $qualification;

function teach(){

}
function assignment(){

}

 }

//  associative array containing the names of
// all properties and their corresponding values defined within the class specified by
// class_name

// property name and value dekhae
$method = get_class_methods("teacher");
print_r($method);
echo "<br>";

$vars = get_class_vars("teacher");
print_r($vars);
 


?>