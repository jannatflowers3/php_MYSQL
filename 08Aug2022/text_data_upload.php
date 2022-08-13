<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data connecting </h1>

    <?php
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $message = $_POST['message'];
// $total = $id+$name+$message;
$total =$id." ".$name." ".$message."\n";
    $file = fopen("text_dataupload.txt", "a");

fwrite($file,$total);
fclose($file);


}

?>
    <form action="" method="post" enctype= multipart/form-data>
    <input type="text" name="id"><br>
    <input type="text" name="name"><br>
  <input type="text" name="message"><br>
    <!-- <textarea name="message" id="" cols="30" rows="10" t></textarea><br> -->
    <input type="submit" name="submit" vlaue="submit">

</form>
<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>message</th>

    </tr>
    <?php
    $file = file("text_dataupload.txt");
foreach($file as $result){
    list($id,$name,$message)=explode(" ",$result);
    echo "<tr>

    <td>$id</td>
    <td>$name</td>
    <td>$message</td>

    </tr>";
}
?>  
</table>

</form>
</body>
</html>