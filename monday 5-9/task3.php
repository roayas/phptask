<?php
if(isset($_POST['submit'])){
    $day = $_POST['day'];
    $day=strtolower($day);
    $poem= "Laugh on $day, ";
    // echo $poem;
    if($day=='monday'){
        echo $poem.'laugh for danger.';
    }else if($day=='tuesday'){
        echo $poem.'kiss a stranger.';
    } else if($day=='wednesday'){
        echo $poem.'laugh for a letter.';
    }else if($day=='thursday'){
        echo $poem.'something better.';
    }else if($day=='friday'){
        echo $poem.'laugh for sorrow.';
    }else if($day=='saturday'){
        echo $poem.' joy tomorrow.';
    }
}else{

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
        plase inter a day <input type="text" name="day">
        <input type="submit" value='submit' name='submit' >

    </form>
</body>
</html>
<?php
}
?>