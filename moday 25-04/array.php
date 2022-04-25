<?php
//Q1
$colors = array('red', 'green','white');
print" Q1 <br> The memory of that scene for me is like a frame of film forever frozen at that moment: the {$colors[0]} carpet, the  {$colors[1]} lawn, the  {$colors[2]}house, the leaden sky. The new president and his first lady. - Richard M. Nixon <br><br>";

//q2
echo  'Q2 <br> <ul>';
foreach($colors as $color){
 echo '<li>'.$color.'</li>';
}
echo '</ul> <br><br>';

//q3 
echo 'Q3 <br>';
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
echo '<ul>';
foreach($cities as $city => $i){
    echo "<li>The capital of $city is $i</li> ";
}
echo '</ul><br><br>';

//q4
echo 'Q4 <br>';
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color[4].'<br><br>';


//q5
echo 'Q5 <br>';
$arry =array(1,2,3,4,5);
$Location= 4;
$NewItem= '$';

array_splice($arry,$Location-1,0,$NewItem); // add new item in array

foreach($arry as $i){
   echo $i;
}
echo'<br><br>';

//q6
echo 'Q6 <br>';
$fruits = array(
    "d" => "lemon", 
    "a" => "orange", 
    "b" => "banana", 
    "c" => "apple");
asort($fruits);
foreach($fruits as $fruit=> $i)
{
    echo $fruit . '= '. $i . '<br>';
}
echo'<br><br>';

//q7
echo 'Q7 <br>';

$temp= "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";

$array=explode(',',$temp); //To convert the string to array
$sum=0;
$length=count($array);
foreach($array as $singleTemp){
    $sum=$sum+$singleTemp;
}
$Average=$sum/$length; 
echo 'Average Temperature is: '. $Average. '<br>';

sort($array);
echo 'List of five lowest temperatures: ';
for ($i=0;$i<5;$i++)
echo $array[$i]. ' ';
echo '<br>';

rsort($array);
echo 'List of five highest temperatures: ';
for ($i=0;$i<5;$i++)
echo $array[$i]. ' ';
echo'<br><br>';


//q8
echo 'Q8 <br>';
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$meregedArray=array_merge($array1,$array2);
print_r($meregedArray);
echo'<br><br>';

//q9
echo 'Q9 <br>';
$colors = array("red","blue", "white","yellow");
foreach($colors as $color){
    echo strtoupper($color.'<br>');
}
echo'<br><br>';

//q10
echo 'Q10<br>';
$colors = array("RED","BLUE", "WHITE","YELLOW");
foreach($colors as $color){
    echo strtolower($color.'<br>');
}
echo'<br><br>';

//q11
echo 'Q11 <br>';
for($i=200; $i<251;$i++){
    if($i%4===0){
        echo $i.'  ';
    }
}
echo'<br><br>';


//q12
echo 'Q12 <br>';
$words =  array("abcd","abc","de","hjjj","g","wer");
$short = $words[0];
// echo $short;
// for($i=1; $i<=count($words);$i++){
    
//     if (strlen($words[$i])<= strlen($short)){
//         $short=$words[$i];
//     }

// }
// echo "The shortest array length is  $short ";
$array= array_map('strlen',  $words); 
echo 'The shortest array length is ' .min($array).'. '. 'The longest array length is '.max($array);
echo'<br><br>';

//q13
echo 'Q13 <br>';
$range=range(11,20);
shuffle($range); 
for($i=0;$i<10;$i++) 
    echo $range[$i].' ';
echo'<br><br>';

//q14
echo 'Q14 <br>';
$array1 = array( 2, 0, 10, 12, 6); 
$minum = min($array1);
if ($minum ==0){
    sort($array1);
    echo $array1[1];
}else{
echo min($array1);}
echo'<br><br>';

