<!DOCTYPE html>
<html>
<head>
	<title>Break Statement</title>
</head>
<body>
	<?php
		echo "Using break to terminate loop in the 5th iteration.<br>For loop with 10 iteration:";
		for($i=0;$i<10;$i++){
			if($i==5){
				break;
			}
			echo "$i<br>";
		}
	?>
</body>
</html>