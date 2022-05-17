<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=ex", $username, $password);
  // set the PDO error mode to exception
  $sql= "INSERT INTO info (	namee, email, salary) VALUES ('sara','sara@vb.bn', '10000');";
  $sql2="DELETE FROM info WHERE id='4'";
  $sql3 ="UPDATE info set namee= 'thana' where id ='6';";
  $sql4 ="CREATE TABLE new_info(
    `id` int (14) Not null,
    `age`int (14) Not null,
    `mobile` int (14) Not null);


   ";
 $sql5= "INSERT INTO new_info (id, age, mobile) VALUES (6,18, '07777777');";
 $sql6 = "SELECT * FROM info 
 INNER JOIN new_info ON info.id=new_info.id;
 ";
 $users=$conn->query($sql6);

 foreach ($users as $row) {
     print $row["namee"] . " - " . $row["id"] . "<br/>";
 }
  $conn->exec($sql5);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>