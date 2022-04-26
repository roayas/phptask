<?php
//q1
echo 'Q1 <br>';
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}
echo '<br><br>';

//q2
echo 'Q2 <br>';
$sum = 0;
for($x=1; $x<=30; $x++)
{
$sum +=$x;
}
echo  $sum;
echo '<br><br>';

//q3
echo 'Q3 <br>';
$rows=array("A","B","C","D","E");
for ($i = 0; $i < sizeof($rows); $i++) //sizeOf returns the number of elements in an array.
{
    for ($j = 1; $j < sizeof($rows)-$i; $j++)
    {
        echo "A ";
    }

    for ($k = 0; $k <= $i; $k++)
    {
        echo "$rows[$i] ";
    }
    echo '<br>';
}
echo '<br><br>';

//q4
echo 'Q4 <br>';
$rows=array("1","2","3","4","5");
for ($i = 0; $i < sizeof($rows); $i++) //sizeOf returns the number of elements in an array.
{
    for ($j = 1; $j < sizeof($rows)-$i; $j++)
    {
        echo "1 ";
    }

    for ($k = 0; $k <= $i; $k++)
    {
        echo "$rows[$i] ";
    }

    echo "<br>";
}
echo '<br><br>';

//q5
echo 'Q5 <br>';
for ($i=1; $i <= 5  ; $i++) { 

    for ($x=1; $x <= 5 ; $x++) { 
        if($x == $i)
        {
            echo $i;
        }
        else
        {
            echo '0';
        }
    }
    echo "<br>";
}
echo '<br><br>';



//q6
echo 'Q6 <br>';
$Input=10;
$sum =1;
for($i=1;$i<=$Input;$i++){
$sum= $sum*$i;

}
echo $sum;
echo '<br><br>';

//q7

echo 'Q7 <br>';
$index=7;
$fristNum=0;
echo "$fristNum,";
$secondNum =1;
echo "$secondNum,";
for ($i=0;$i<$index;$i++){
    $sum = $fristNum+$secondNum;
    echo "$sum ,";
    $fristNum= $secondNum;
    $secondNum=$sum ;
}


echo '<br><br>';

//q8
echo 'Q8 <br>';
$string ="Orange Coding Academy OOooOO";
$word = 'o';
$string =strtolower($string);
$arr= str_split($string);
$sum =0;
foreach($arr as $a){
    if ($a ===$word) {
        $sum +=1; 
    }
}
echo  $sum;
echo '<br><br>';

//q9
echo 'Q9 <br>';
echo '<table border=1 cellpadding="3" cellspacing="0"';
for($i=1; $i<=6; $i++){
    echo "<tr>";
    for ($j=1;$j<=5;$j++){
        echo "<td>$i * $j = ".$i*$j."</td>";
      }
        echo "</tr>";
}
echo '</table>';
echo '<br><br>';

//q10
echo 'Q10 <br>';
for($i=1;$i<=50;$i++)
{
  if($i%3==0){
      if ($i%5==0){
        echo "FizzBuzz ";
      }else{
        echo "Fizz ";
      }

  }
  if ($i%5==0){
    echo "Buzz ";
  }
  else if(($i%3!=0)&&($i%5!=0))
  {echo $i.' ';}
  
}

echo '<br><br>';

//q11
echo 'Q11 <br>';
$num=5;
$count=1;
for ($i=$num; $i>0;$i--)
    {
        for($j=$i;$j<$num+1;$j++)
        {
            printf("%4s",$count);
            $count++;
        }
        echo '<br>';
    }
echo '<br><br>';

//q12
echo 'Q12 <br>';
echo '<br><br>';