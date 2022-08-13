<?php

function __autoload($class){
    require_once("classess/$class.class.php");
}

// classess folder then $class perameter.class hosse ecents ar .class.php nilam
$event = new events;
echo get_class($event);
// events class object k classs kora hise 
$event->name= "jannatul feredaush";
print_r($event);


echo "<br>";
$event = new patrons;
echo get_class($event);
// patrons class object k classs kora hise 


?>