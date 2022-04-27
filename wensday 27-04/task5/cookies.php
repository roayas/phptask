<?php
// $name='COOKIE';
// $value='ROA';
// setcookie($name, $value, time() + 3600,'/', 'github.com', TRUE, TRUE);

$cookie_name = "AAA";
$cookie_value = "BB BB";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

echo '<pre>';

print_r($_COOKIE);

echo '</pre>';