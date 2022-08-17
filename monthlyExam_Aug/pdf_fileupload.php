<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file"><br>
<input type="submit" name="submit" value="submit">
    </form>

    <?php
if(isset($_POST['submit'])){
    $name =$_FILES['file']['name'];
    $ext = explode(".",$name);
    $ext = strtolower(end($ext));


    // $time =time();
    // $newname = $time." .".$ext;
    

    $type = $_FILES['file']['type'];
    $tmp = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
    $errors = array();
    $filetype = array("pdf","png","docx");
  
    // if($size>1024*400){
    //     $errors[]="file size must be 400kb";
    // }
    if(!in_array($ext,$filetype)){
        $errors[]= "file type must be pdf  or png or docx";
    }
    if(count($errors)>0){
        foreach($errors as $err){
            echo $err . "<br>";
        }
        echo "<br>";
    }
    else{
        $result = move_uploaded_file($tmp,"uploads/".$name);
        if($result==1){
            echo "file upload successfully";
        }
    }

}
    ?>
    <!-- <h1>PDF /IMAGE/DOCUMENT FILE UPLOAD</h1> -->
    
</body>
</html>