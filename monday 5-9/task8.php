<?php
  $cities=array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
  );
  echo '<ul>';
foreach($cities as $city => $i){
    echo "<li>The capital of $city is $i</li> ";
}
echo '</ul><br><br>';
?>