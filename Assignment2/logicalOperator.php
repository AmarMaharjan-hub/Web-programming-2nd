<html>
	<head>
		<title>Logical operators</title>
	</head>
	<body>
		<?php
			$var1=3;
			$var2=0;
			if($var1 && $var2)
				print "<br/>var1 and var2 are true";
			else
				print "<br/>either var1 or var2 or both are false";
			if($var1 || $var2)
				print "<br/>either var1 or var2 or both are true";
			else
				print "<br/>both var1 and var2 are false";
			if($var1 AND $var2)
				print "<br/>both var1 and var2 are true";
			else
				print "<br/>either var1 or var2 or both are false";
			if($var1 OR $var2)
				print "<br/>either var1 or var2 or both are true";
			else
				print "<br/>both var1 and var2 are false";
			if(!$var1)
				print "<br/>var1 is false";
			else
				print "<br/>var1 is true";
		?>
	</body>
</html>