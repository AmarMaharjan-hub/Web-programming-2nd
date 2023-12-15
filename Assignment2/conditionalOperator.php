<html>
	<head>
		<title>Conditional operator</title>
	</head>
	<body>
		<?php
			$var1=3;
			$var2=74;
			$var3=5;
			$var4=$var1>$var2?$var1:$var2>$var3?$var2:$var3;
			print "The greatest number is $var4 between $var1, $var2, $var3";
		?>
	</body>
</html>