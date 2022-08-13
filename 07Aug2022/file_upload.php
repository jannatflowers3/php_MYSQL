<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>File Uploads</H1>
    <?php
if(isset($_POST['submit'])){
    $name = $_FILES['myname']['name'];
    $ext = explode(".",$name);
    $ext = strtolower(end($ext));
//     echo "<pre>";
//  print_r($name);
    $type = $_FILES['myname']['type'];
    $tmp = $_FILES['myname']['tmp_name'];
    $size = $_FILES['myname']['size'];
    $error = $_FILES['myname']['error'];
    $errors = array();
    $filetype= array("jpg","png");

    if($size>1024*100){
        $errors[]="file must be 100kb";

    }
    if(!in_array($ext,$filetype)){

        $errors[]= "file size must be JPG or PNG";
    }
    if( count($errors)>0){
        foreach($errors as $err){
            echo $err ."<br>";
        }
        echo "<br>";
    }
    else {
       $result = move_uploaded_file($tmp,'uploads/'.$name);
       if($result==1){
        echo "upload succesfully";
       }
       
    }

}

?>
    <form action="" method ="post" enctype="multipart/form-data">
        <input type="file" name ="myname" ><br>
        <input type="submit" name ="submit" value="submit">
    </form>
</body>
</html>