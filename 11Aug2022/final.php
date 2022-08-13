<?php
class fruit{
    // final dile output dekha jai na
   public function intro(){
        echo "i am a intro class";
    }
}
    class strawberry extends fruit{
        public function intro(){
            echo " i am intro form chils";
        }
    }


$obh =new strawberry;
$obh->intro();
?>