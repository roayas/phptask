<?php
session_start();
$_SESSION['task'].=$_POST['task'].',';
$newTask=explode(',',$_SESSION['task']);
for($i=0;$i<count($newTask);++$i){
    echo "<input type='checkbox'>$newTask[$i] <br>";
    
}

?>