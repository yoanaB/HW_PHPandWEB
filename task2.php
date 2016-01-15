
<!--Създайте HTML страница с PHP скрипт, в който потребителя трябва да въведе username
и 2 пароли. Проверете дали двете пароли съвпадат и след това ги криптирайте.
Изпишете след това username и криптираната парола. Направете всички възможни
проверки за въведените стойности. -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Insert title here</title>
</head>
<body>
	<form action="task2_2.php" method="post">
		<div>
			<label for="username">Enter a username:</label>
			<input type="text" id="username" name="username" />
			<label for="password1">Enter a password:</label>
			<input type="password" id="password1" name="password1" />
			<label for="password2">Repeat the password:</label>
			<input type="password" id="password2" name="password2" />
		</div>
		<div>
			<input type="submit" />
		</div>
	</form>
	

</body>
</html>