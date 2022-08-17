<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  if(isset($_POST['submit'])){
    $num = $_POST['num1'];
    gradepoint($num);
    
  }
  function gradepoint($num){
    if($num>=90){
        echo "<h2> you will get A+ </h2>";
    }
    if($num>=90 && $num<=100){
        echo "<h2>you will get A+";
    }


    else if($num>=80){
        echo "<h2>you will get A";
    }
    else if($num>=70){
        echo " <h2>you will get A-";
    }
   
    else if($num<50){
        echo "<h2>you will get FAIL";
    }
  }
    ?>
    <form action="" method="post">
        <input type="text" name="num1" placeholder="enter your first number">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>