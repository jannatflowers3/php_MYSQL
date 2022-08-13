<?php

try{
    $openfile = fopen("contacts.txt","r");
    if(!$openfile){
        throw new Exception("could not open the file");
    }

}

catch (Exception $e){
    // echo "Error (File: ".$e->getFile().", line ".
    // $e->getLine()."): ".$e->getMessage();
    
// file folder ar directory show korbe dile na dile only message golo dekhabe could not opendir
// php .ini file a display_error k off kore dite hobe


    echo $e->getMessage();
}
?>