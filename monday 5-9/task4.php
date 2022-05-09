<?php
if(isset($_POST['submit'])){
    $day = $_POST['day'];
    $day=strtolower($day);
    $poem= "Laugh on $day, ";
    // echo $poem;
    switch($day){
        case 'monday':
            echo $poem.'laugh for danger. <br> <a href="task4.php"><button>back</button></a>';
             break;
        case 'tuesday':
            echo $poem.'kiss a stranger. <br> <a href="task4.php"><button>back</button></a>';
            break;
        case 'wednesday':
            echo $poem.'laugh for a letter. <br> <a href="task4.php"><button>back</button></a>';
            break;
        case 'thursday':    
            echo $poem.'something better. <br> <a href="task4.php"><button>back</button></a>';
            break;
        case 'friday':    
            echo $poem.'laugh for sorrow. <br> <a href="task4.php"><button>back</button></a>';
            break;
        case 'saturday':    
            echo $poem.'joy tomorrow. <br> <a href="task4.php"><button>back</button></a>';
            break;
        default:
            echo 'Try a nother day. <br> <a href="task4.php"><button>back</button></a>';
            break;
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