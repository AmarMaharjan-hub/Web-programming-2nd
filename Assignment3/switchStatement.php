<html>
	<head>
		<title>Switch</title>
	</head>
	<body>
		<?php
			$var1=2;
			print "var1=2<br/>";
			switch($var1){
				case 0:
					print "$var1 is exactly zero";
					break;
				case $var1>0:
					print "$var1 is a positive value.";
					break;
				case $var1<0:
					print "$var1 is a negative value.";
					break;
				default:
					print "Illegal character";
			}
		?>
	</body>
</html>