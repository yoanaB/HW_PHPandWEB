<!-- Създайте HTML страница с PHP скрипт, в който потребителя трябва да въведе стойност
в градуси Celsius C и на трябва да получи градуси Fahrenheit F.
Използвайте формулата C = ( 5 / 9 ) * (F -32). След това доразширете задачата, като
добавите лист, от който потребителя да сам да избере дали да конвертира от C към F
или от F към C. -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Insert title here</title>
</head>
<body>
	<form action="task3_2.php" method="post">
		<div>
			<label for="celsius">Enter degrees in Celsius:</label>
			<input type="text" id="celsius" name="celsius" />
		</div>
		<div>
			<input type="submit" />
		</div>
	</form>
</body>
</html>