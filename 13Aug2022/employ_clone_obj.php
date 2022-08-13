<?php
class employee{

    private $name;
function set($name){
    $this->name = $name;
}
function get(){
    return $this->name;
}
}
$employee = new employee();
 $employee->set("jannatul ferdaush");

// echo  $employee->set("jannatul ferdaush");
// ai khane o echo kore set ar parameter ar value set kore dewya jai
$employee2 = clone $employee;
$employee2->set("anika akter");

print_r($employee);
echo "<br>";
print_r($employee2);
?>