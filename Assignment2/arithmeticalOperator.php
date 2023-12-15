<html>
	<head>
		<title>Arithmetical operator</title>
	</head>
	<body>
		<?php
			$var1=5;
			$var2=2;
			print "variable 1=$var1<br/> variable 2=$var2<br/>";
			print "<br/>$var1 + $var2 = ".($var1+$var2);
			print "<br/>$var1 - $var2 = ".($var1-$var2);
			print "<br/>$var1 * $var2 = ".$var1*$var2;
			print "<br/>$var1 / $var2 = ".$var1/$var2;
			print "<br/>$var1 % $var2 = ".$var1%$var2;
			print "<br/>$var1++ = ".($var1++);
			print "<br/>$var1-- = ".($var1--);
			print "<br/>++$var1 = ".(++$var1);
			print "<br/>--$var1 = ".(--$var1);
		?>
	</body>
</html>