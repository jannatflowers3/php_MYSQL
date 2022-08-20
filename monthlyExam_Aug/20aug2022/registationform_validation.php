<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="enter your name"><br>
        <input type="email" name="email" placeholder="enter your email"><br>
        <input type="password" name="pass" placeholder="enter your pass"><br>
        <input type="password" name="repass" placeholder="enter your confpass"><br>
        <input type="submit" value="submit" name="submit">

    </form>
    <?php
    if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];

        if($_SERVER['REQUEST_METHOD']=='POST'){
            extract($_POST);
            if($name == " " || $email ==" "|| $pass == " "|| $repass == " "){
                echo "please fill up the form <br>";
            }
           
                extract($_POST);
                if(filter_var($email,FILTER_VALIDATE_EMAIL)==true){
                    echo "<h3> $email valid </h3> <br>";
                }
                else{
                    echo "<h3> you have put an invalid email address</h3><br>";
                }
    
                if(strlen($pass)>=4 && strlen($pass)<=8){
                    echo "<h3> password validatea <br>";
                }
                else{
                    echo "<h3> you have put minimum 4 and maximum 8 cahracter long password<br>";
                }
                if($pass != $repass){
                    echo "password are not same";
                }
            
           }



    }
       
    ?>
</body>
</html>