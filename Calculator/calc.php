<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<?php
		$num1=$_POST["first"];
		$num2=$_POST["second"];
		if($num1==''){
			$num1=0;
			if($num2==''){
				$num2=0;
			}
		}
		$operator=$_POST["operator"];
			switch($operator){
				case '+':
					$ans=$num1+$num2;
					break;
				case '-':
					$ans=$num1-$num2;
					break;
				case '*':
					$ans=$num1*$num2;
					break;
				case '/':
					if($num2==0){
						$ans="Infinity";
					}else{
						$ans=$num1/$num2;
					}
			}
		display($ans,$num1,$num2,$operator);
		function display($ans,$num1,$num2,$operator){
			$op=array('+','-','*','/');
			print "
					<h1 align='center'>Calculator</h1>
					<form method='post' action='calc.php'>
							<table align='center'>
								<tr>
									<td>Num1 :</td>
									<td><input type='text' name='first' value='$num1'></td>
								</tr>
								<tr>
									<td>Num2 :</td>
									<td><input type='text' name='second' value='$num2'></td>
								</tr>
								<tr>
									<td>Operator :</td>
									<td><select name='operator'>";
										foreach($op as $value){
											print "<option value='$value'";
											if($value==$operator){
												print "selected='selected'";
											}
											print ">$value</option>";
										}
										print "
									</select></td>
								</tr>
								<tr>
									<td>Answer :</td>
									<td><input type='text' name='answer' disabled='disabled' value='$ans'></td>
								</tr>
								<tr>
									<td colspan='2' align='center'><input type='submit' value='Calculate'></td>
								</tr>
							</table>
						</form>
			";
		}
	?>
</body>
</html>