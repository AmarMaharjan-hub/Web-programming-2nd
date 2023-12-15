<!DOCTYPE html>
<html>
<head>
	<title>Function with two parameter</title>
</head>
<body>
	<?php
		function mul($num1,$num2){
			$product=$num1*$num2;
			echo "$num1 X $num2 = $product";
		}
		echo "Calling function mul with two parameter(4,7)<br>";
		mul(4,7);
	?>
</body>
</html>