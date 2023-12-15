<html>
	<head>
		<title>Calculator</title>
	</head>
	<body>
			<?php
				$result;
				$num1=$_POST['num1'];
				$num2=$_POST['num2'];
				$operator=$_POST['operator'];
				switch($operator){
					case '+':
						$result=$num1+$num2;
						break;
					case '-':
						$result=$num1-$num2;
						break;
					case '*':
						$result=$num1*$num2;
						break;
					case '/':
						$result=$num1/$num2;
						break;
					case '%':
						$result=$num1%$num2;
						break;
				}
			?>
	</body>
</html>