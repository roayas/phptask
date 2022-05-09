<?php
$temperatures=[68, 70, 72, 58, 60,  79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83];

$sum=0;
 foreach($temperatures as $e){
   $sum+=$e;
}
$avg = $sum /count($temperatures);
echo "the averge of temperatures $avg <br>";
$z=$temperatures[0];
for($i=1;$i<count($temperatures);$i++){
    if($z<$temperatures[$i]){
        $z=$temperatures[$i];
    }else{
        $z=$z;
    }
}
 echo "highst temperatures is $z <br>";

 $t=$temperatures[0];
for($i=1;$i<count($temperatures);$i++){
    if($t>$temperatures[$i]){
        $t=$temperatures[$i];
    }else{
        $t=$t;
    }
}
 echo "lowest temperatures is $t";