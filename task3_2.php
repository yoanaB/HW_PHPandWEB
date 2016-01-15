<?php
require_once 'functions.php';

$degrees = get_value($_POST, 'celsius');
//T(°F) = T(°C) × 1.8 + 32
$result = $degrees * 1.8 + 32;
echo $result;