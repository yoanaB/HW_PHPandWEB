<!-- 
Създайте HTML страница с PHP скрипт, в който потребителя трябва да въведе 2 числа и
да избере от лист каква операция иска да изпълни. След това изведете резултата от
неговия избор и въведени стойности. Възможни операции нека да бъдат +, - , *, /.
Направете всички възможни проверки за въведените стойности.
 -->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<form action="task1.php" method="post">
		<div>
			<label for="firstN">Enter a number:</label>
			<input type="text" id="fisrtN" name="firstN" />
			<label for="secondN">Enter a number:</label>
			<input type="text" id="secondN" name="secondN" />
			<label>Select Operation</label>
			<select name="operation" id="">
				<option value="+">Summation</option>
				<option value="-">Substraction</option>
				<option value="*">Multiplications</option>
				<option value="/">Division</option>	
			</select>
		</div>
		<div>
			<input type="submit" />
		</div>
	</form>
	

</body>
</html>