<?php
class employee{

private $name;
private $title;

public function jannat1(){
    return $this->name;
}

public function jannat2($myname){
    $this->name =$myname;
}

public function sayhello(){
    echo "Hi ,MY NAME IS{$this->jannat1()}.";
}
}
$obj = new employee();
$obj->jannat2("this is jannatul ferdaush<br>");
echo $obj->jannat1();
$obj->sayhello();

?>