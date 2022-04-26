<form action="" method="post">
<h4>Q9 simple calculator</h4><br>
Please enter the first number <input type="number" name="number1" >
<br>
<br>
Please enter the second number <input type="number" name="number2" >
<br>
<br>
Please enter the operator <input type="text" name="operator" >
<br>
<br>
<button type="submit">Submit</button>

</form><br><br>
<?php
//q1
echo 'Q1 <br>';
$year = 2013;  
 
if(($year % 4==0) & ($year % 100 != 0) | ( $year % 400 == 0 ))
{
echo "$year is a Leap Year.";    
}
 
else  
{  
echo "$year is not a Leap Year.";    
}
echo '<br><br>';



//q2
echo 'Q2 <br>';
$temperature =18;
if ($temperature <20){
    echo'It is wintertime!';
}else{
    echo 'It is summertime!';
}
echo '<br><br>';



//q3
echo 'Q3 <br>';
$firstInteger= 3;
$secondInteger=3;

if($firstInteger==$secondInteger){
    echo ($firstInteger+$secondInteger)*3;
}else{
    echo $firstInteger+$secondInteger;
}
echo '<br><br>';




//q4
echo 'Q4 <br>';
$firstInteger= 50;
$secondInteger=20;
if($firstInteger+$secondInteger==30){
    echo $firstInteger+$secondInteger;
}else{
    echo 'false';
}
echo '<br><br>';




//q5
echo 'Q5 <br>';
$number = 20;
if ($number%3==0 && $number>0){
    echo 'true'; 
}else{
    echo 'false';
}
echo '<br><br>';



//q6
echo 'Q6 <br>';
$number = 10;
if ($number<=50 && $number>=20){
    echo 'true'; 
}else{
    echo 'false';
}
echo '<br><br>';



//q7
echo 'Q7 <br>';
$Input=array(1,5,9);
echo max($Input);
echo '<br><br>';


//q8
// 8.	Write PHP script to calculate the monthly electricity bill according to these rules
 
// a.	For first 50 units – 2.50 JOD/Unit
// b.	For next 100 units – 5.00 JOD/Unit
// c.	For next 100 units – 6.20 JOD/Unit
// d.	For units above 250 – 7.50 JOD/Unit

echo 'Q8 <br>';
$units =50;
if ($units <= 50) {
    echo $units * 2.5;
}
else if (units <= 150) {
    echo (50 * 2.5)
        + ($units - 50)
              * 5;
}
else if (units <= 250) {
    return (50 * 2.5)
        + (100 * 5)
        + ($units - 150)
              * 6.2;
}
else if (units > 250) {
    return (50 * 2.5)
        + (100 * 5)
        + (100 * 6.2)
        + ($units - 250)
              * 7.5;
}
echo '<br><br>';


//q9
echo 'Q9 <br>';

$num1=$_POST['number1'];
$num2=$_POST['number2'];
$operator=$_POST['operator'];

if ($operator == '+')
{
    $result=$num1+$num2;
    echo ' ruslt ='. $result;
}
else if ($operator == '-')
{
    $result=$num1-$num2;
    echo ' ruslt ='. $result;
}
else if ($operator == '*')
{
    $result=$num1*$num2;
    echo ' ruslt ='. $result;
}
else if ($operator == '/')
{
    $result=$num1/$num2;
    echo ' ruslt ='. $result;
}

echo '<br><br>';

//q10
echo 'Q10 <br>';
$age = 180;
if($age >= 18){
    echo 'is eligible to vote';
}else{
    echo 'is no eligible to vote';
}
echo '<br><br>';

//q11
echo 'Q11 <br>';
$Input = 0;
if ($Input > 0){
    echo 'postive number';
} else if ($Input<0){
    echo 'Negative number';
} else if ($Input==0){
    echo 'zero';
}
echo '<br><br>';

//q8
echo 'Q8 <br>';
$Inputs= array (60,86,95,63,55,74,79,62,50);
$sum =0;
foreach($Inputs as $Input){
$sum= $sum+ $Input;
}
// echo  $sum;
$avg = $sum / 9;
// echo $avg;
if($avg <60)
    echo 'Your grade is: F';
else if($avg >=60 && $avg<70)
    echo 'D';
else if($avg >=70 && $avg<80)
    echo 'C';
else if($avg >=80 && $avg<90)
    echo 'B';
else if($avg >=90 )
    echo 'A';
echo '<br><br>';

?>
