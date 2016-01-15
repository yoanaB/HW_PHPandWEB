<?php

require_once 'functions.php';

$firstN = get_value($_POST, 'firstN');
$secondN = get_value($_POST, 'secondN');
$option = get_value($_POST, 'operation');
//var_dump($firstN, $secondN, $option);
$result = 0;

?>

<?php if (!is_numeric($firstN)):?>
	<p>Please enter a numeric value!</p>
<?php elseif (!is_numeric($secondN)):?>
	<p>Please enter a numeric value!</p>
<?php endif;  ?>

<?php if($option == "+"):?>
	<?php $result = (int) $firstN + (int)$secondN;?>
	<p>The result is: <?= $result?><p>
<?php elseif($option == "*"):?>
	<?php $result = (int) $firstN * (int)$secondN;?>
	<p>The result is: <?= $result?><p>
<?php elseif($option == "-"):?>
	<?php $result = (int) $firstN - (int)$secondN;?>
	<p>The result is: <?= $result?><p>
<?php else:?>
	<?php $result = (int) $firstN / (int)$secondN;?>
	<p>The result is: <?= $result?><p>
<?php endif; ?> 
