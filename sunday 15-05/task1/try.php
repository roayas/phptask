<?php
include_once('connect.php');
?>


<?php

// if(isset($_POST['submit'])){
    
    $namee=$_POST['name'];
    $email=$_POST['email'];
    $salary=$_POST['salary'];



   $sql= "INSERT INTO info (namee, email, salary ) 
   VALUES ('$namee','$email', '$salary');";
   

   if(mysqli_query($conn , $sql)){
    echo 'new record created sucessfuly ';
}else{
    echo "error:".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);


//  }
?>
