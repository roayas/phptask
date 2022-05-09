<?php
if(isset($_POST['submit'])){
    $fc=$_POST['fc'];
    $arr=[];
    array_push($arr,$fc);
    echo $fc;
    print_r($arr);
}
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
<form method="post">
   Enter Your Favorite City.  <input type="text" name="fc">
   <input type="submit" value='submit' name='submit' > 
</form>
</body>
</html>