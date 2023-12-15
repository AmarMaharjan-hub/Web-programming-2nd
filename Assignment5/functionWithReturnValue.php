<!DOCTYPE html>
<html>
<head>
	<title>Function with return value</title>
</head>
<body>
	<?php
		function add($num1,$num2){
			$sum=$num1+$num2;
			return $sum;
		}
		echo "Calling function add by passing argument(3,5) with return value:".add(3,5);
	?>
</body>
</html>