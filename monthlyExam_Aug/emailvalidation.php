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
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $valiemail = 0;
        $valipass = 0;
        if($email == " " && $pass==""){
            echo "<h2> enter your email and  pass <br>  ";
            return 0;
        }
        if($email==""){
            echo "<h2> enter your emial first </h2>";
        }
       else  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "<h2>  enter your valid email <br>";
        }
        else {$valiemail =1;

        }
        
        if($pass==""){
            echo "<h2> enter your password first";
        }
        else if(strlen($pass)>8 || strlen($pass)<4){
            echo "<h2> password must be within 4 to 8 charecter </h2>";
        }
        else{
            $valipass =1;
        }


        if($valiemail ==1 && $valipass ==1){
            session_start();
            $_SESSION['email'] =$email;
            $_SESSION['pass'] = $pass;
            echo "<h2>login successfully </h2>";
            echo "<a href=\"session_home.php\"> home page</a>";

        }
    }
    ?>

    <form action="" method="post">
        
        <input type="email" name="email"><br>
        <input type="password" name="pass"><br>
        <input type="submit" name="submit" value="submit">

    </form>
</body>
</html>