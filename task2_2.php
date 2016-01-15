<?php
require_once 'functions.php';

$firstPass = get_value($_POST, 'password1');
$secondPass = get_value($_POST, 'password2');

echo "the passwords are the same if the result is 0:";
var_dump(strcmp($firstPass, $secondPass));
$firstPass = md5($firstPass);
$secondPass = md5($secondPass);
var_dump($firstPass);
?>