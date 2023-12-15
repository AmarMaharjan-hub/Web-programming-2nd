<!DOCTYPE html>
<html>
<head>
	<title>Calling function with reference</title>
</head>
<body>
	<?php
		function ref(&$num1){
			$num1++;
		}
		$num1=10;
		echo "Calling function ref by passing reference of \$num1: $num1<br>";
		ref($num1);
		echo "After calling function value of \$num1: $num1";
	?>
</body>
</html>