<!DOCTYPE html>
<html>
<head>
	<title>Continue Statement</title>
</head>
<body>
	<?php
		echo "Using continue to print only even numbers from 1 to 10:<br>";
		for($i=1;$i<=10;$i++){
			if($i%2==1){
				continue;
			}
			echo "$i<br>";
		}
	?>
</body>
</html>