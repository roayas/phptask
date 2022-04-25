<?php
//Q1
function prime_number($num){
        for ($i=2; $i < $num ; $i++){
            if ($num % $i === 0 && $num !== $i){
                echo $num .'is not a prime number'; 
            }
        else {
            echo $num .'is  a prime number'; 
        }
  

}}
// prime_number(7);


//Q2
function reverse_string($string){
    // for($i=strlen($string)$i>0;$i--){

    // }
    return strrev($string);
} 
// echo reverse_string('raghad');

//Q3
function lower_case($a){
    if (ctype_lower($a)){
        echo 'Your String is Ok';
    }else{
        echo 'Your String is not Ok';
    }
}
// lower_case('Roa');

//Q4
function swap($x,$y){
    $x=$x+$y;
    $y=$x-$y;
    $x=$x-$y;
    echo $x.' has been swapped to: '. $y. '<br>';
    echo $y.' has been swapped to: '. $x. '<br>';
}
// swap(3,5);


//Q6
function checkArmstrong($num){
    $sum=0;
    $x=$num;
    while($x !=0 ){
        $rem = $x % 10; // To break up the digits of the main number
        $sum = $sum + $rem*$rem*$rem; //To find the cube of each number in addition to the sum of the cube of the last digit
        $x = $x /10; //To move between digits using .
    }
    if ($num == $sum)
    return 1;
return 0;
}
// $num=407;
// if(checkArmstrong($num) == 1)
//    echo 'Yes! It is an Armstrong';
// else
//   echo 'No! It is not an Armstrong';

//َQ7
function checkPalindrome($s){
    $newString=preg_replace('/[^A-Za-z0-9]/g', '', $s);

    if($newString == strrev($newString)){
        echo 'Yes, it is a palindrome';
    }else{
        echo 'No, it is not a palindrome';
    }
}
// checkPalindrome('Eva, can I see bees in a cave?');

//Q8

function remove_duplicates($array){
    $array = array_unique($array);
    echo implode(",",$array); /// convert array to string 
}
remove_duplicates(array(2, 4, 7, 4, 8, 4));
?>




