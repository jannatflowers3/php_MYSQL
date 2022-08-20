<?php

class fileread{
    public function getdata(){
        // $file = fopen("use.txt","r");
        //  while(!feof($file)){    //end of file  means (feof)
        //     $data = fgets($file);
        //     echo $data ."<br>";
        //  }


        $datafile = file("use.txt");
        foreach($datafile as $data){
            echo $data ."<br>";
        }
    }





}
$output = new fileread();
$output->getdata();


?>