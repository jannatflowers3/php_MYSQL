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
   $student = array(
    array("id"=>1,"Name"=>"Janatul Ferdaush","MCQ"=>40,"Descriptive"=>67,"Evidence"=>90),
    array("id"=>2,"Name"=>"Farjana Akter","MCQ"=>30,"Descriptive"=>20,"Evidence"=>20),
    array("id"=>3,"Name"=>"Bipasha Akter","MCQ"=>50,"Descriptive"=>57,"Evidence"=>70),
    
   );



  foreach($student as $students){
list($id,$name,$mcq,$des,$evidence) = array_values($students);
if($mcq+$des >=70 && $evidence>=30){
    echo "ID:". $id .", Name :".$name.", MCQ : ".$mcq." , Descriptive :".$des." , Evidence :".$evidence." , total result :".($mcq+$des).", result :"."PASS <br>";
    // echo "ID : $id Name: $name writtern:".($mcq + $des) ."result :pass <br>";
}
else{
    echo "ID:". $id .", Name :".$name.", MCQ : ".$mcq." , Descriptive :".$des." , Evidence :".$evidence." , total result :".($mcq+$des).", result :"."Fail <br>"; 
}
}



   ?>
</body>
</html>