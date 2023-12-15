<!DOCTYPE html>
<html>
<head>
	<title>Function with default parameter</title>
</head>
<body>
	<?php
		function  add($num1=1,$num2=2,$num3=3){
			$sum=$num1+$num2+$num3;
			print "$num1+$num2+$num3=$sum<br>";
		}
		echo "calling function add with values (2,4,6)<br>";
		add(2,4,6);
		add(2,4);
		add(2);
		add();
	?>
</body>
</html>