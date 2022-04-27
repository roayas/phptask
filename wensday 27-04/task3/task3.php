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
</body>
</html>

<?php
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
?>