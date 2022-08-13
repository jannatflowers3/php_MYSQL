
<?php
class Employee {
public static $favSport = "Football";
public static function watchTV()
{
echo "Watching ".self::$favSport;
}
// this  ar poriborte self use kori static method use korar jonn
}
class Executive extends Employee {
public static $favSport = "Polo";
}
echo Employee::$favSport;
echo "<br>";
echo Executive::$favSport;
echo "<br>";
echo Employee::watchTV();
echo "<br>";
echo Executive::watchTV();
?>
