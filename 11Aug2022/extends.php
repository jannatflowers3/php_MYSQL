<?php
class employee{

private $name;
private $title;
protected $wage;

public function jannat1(){
    return $this->name;
}

public function jannat2($myname){
    $this->name =$myname;
}

public function sayhello(){
    echo "Hi ,MY NAME IS{$this->jannat1()}.";
}
public function setwage($money){
    $this->wage = $money;
}


}
// $obj = new employee();
// $obj->jannat2("this is jannatul ferdaush<br>");
// $obj->setwage(2000);
class programmer extends employee{
    public function bonus($percent){
           $amount = $this->wage *$percent /100;
           return $amount;
    }
}

$obj1 = new programmer();
$obj1->jannat2("this is jannatul ferdaush<br>");
$obj1->setwage(2000);
echo $obj1->bonus(6);
?>