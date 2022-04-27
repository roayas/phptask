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
     Enter URL <input type="url" name="url"
       placeholder="https://example.com" ><br><br>
       <button type='submit'>go</button>
    </form>
</body>
</html>
<?php
$go =$_POST['url'];
header("location: $go");

?>