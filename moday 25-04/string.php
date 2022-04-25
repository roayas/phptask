<?php
//Q1
//a
function upperCase($string){
    $string= strtoupper($string);
    echo $string;
}
// upperCase('roa yaseen');

//b
function lowerCase($string){
    $string= strtolower($string);
    echo $string;
}
// lowerCase('ROA MOHAMMAD');
//c
function frist_word($string){
    $string= ucfirst($string);
    echo $string;
}
// frist_word('roa moh yas');
//d 
function frist_letter($string){
    $string=  ucwords($string);
    echo $string;
}
// frist_letter('roa moh yas');

//Q3
function Find_theword($a,$b){
    $a = strtolower($a);
    $b= strtolower($b);
if(strpos($a, $b) !== false){
    echo "Word Found!";
} else{
    echo "Word Not Found!";
}
}
// Find_theword('I am a full stack developer at orange coding academy', 'Orange');

//Q4
$path = 'www.orange.com/index.php';
$file_name= substr(strrchr($path, '/'), 1);
// echo $file_name;
//Q5
$string='info@orange.com';
$username= strstr($string, '@', true);
// echo $username;
//Q6
$string='info@orange.com';
// echo 'The last 3 letters are: '.substr($string, -3);

//Q7
function Password($lenght){
    $word='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($word),0,$lenght);
}
// echo 'Your password cosist of 15 character which is: '.Password(4);
//Q8
$string= 'That new trainee is so genius.';
// echo 'The string before replacing is: '. $string;
// echo '<br> <br>';
// echo 'The string after replacing is: '. preg_replace('/That/','The', $string,1);

//Q9

//Q10
$str ="Twinkle, twinkle, little star.";
$str =explode(" ",$str);
// var_dump($str);

//Q11
$leteer = 'z';
// echo ++$leteer ;

//Q12
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
// echo $new_string."\n";

//Q13
$x = '000547023.24';
$str1 = ltrim($x, '0');
// echo $str1."\n";

//Q14
$my_str = 'The quick brown fox jumps over the lazy dog';
// echo str_replace("fox", " ", $my_str)."\n";

//Q15 
$test = 'The quick brown fox jumps over the lazy dog---';
$test = str_replace("-", " ", $test);
// echo $test;

//Q16
$x =  '\"\1+2/3*2:2-3/4*3';
$x =str_replace(str_split('\/:*?"<>|+-'), ' ', $x);
// echo $x;

//Q17
$my_string = 'The quick brown fox jumps over the lazy dog';
// echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";

//Q18
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
// echo $x;

//Q19
for($x='a';$x<='z';++$x){
    // echo $x.'<br>';
}
?>
