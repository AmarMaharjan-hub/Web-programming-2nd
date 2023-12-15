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
				print "<form method='post' action='Calculator.php'>
		<table>
			<tr>
				<td>Enter 1st number: </td>
				<td><input type='text' name='num1'></td>
			</tr>
			<tr>
				<td>Enter 2nd number: </td>
				<td><input type= 'text' name='num2'></td>
			</tr>
			<tr>
				<td>
					Choose an Operator:
				</td>
				<td>
					<select name='operator'>
						<option>+</option>
						<option>-</option>
						<option>*</option>
						<option>/</option>
						<option>%</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Result: </td>
				<td><input type='text' name='result' disabled='disabled	' value='$result'></td>
			</tr>
			<tr>
				<td><input type='Submit' value='Submit'></td>
				<td><input type='Reset' value='Reset'></td>
			</tr>
		</table>
		</form>";
			?>
	</body>
</html>