<html>
	<head>
		<title>Comparison Operator</title>
	</head>
	<body>
		<?php
			$var1=5;
			$var2=2;
			print "variable 1=$var1<br/>variable 2=$var2<br/><br/>";
			if($var1<$var2){
				print "$var1 is smaller than $var2.<br/>";
			}else{
				print "$var1 is greater than $var2.<br/>";
			}
			if($var1>$var2){
				print "$var1 is greater than $var2.<br/>";
			}else{
				print "$var1 is smaller than $var2.<br/>";
			}
			if($var1==$var2){
				print "$var1 is equal to $var2.<br/>";
			}else{
				print "$var1 is not equal to $var2.<br/>";
			}
			if($var1<=$var2){
				print "$var1 is smaller or equal to $var2.<br/>";
			}else{
				print "$var1 is greater than $var2.<br/>";
			}
			if($var1>=$var2){
				print "$var1 is greater than or equal to $var2.<br/>";
			}else{
				print "$var1 is smaller than $var2.<br/>";
			}
			if($var1!=$var2){
				print "$var1 is not equal to $var2.<br/>";
			}else{
				print "$var1 is equal to $var2.<br/>";
			}
		?>
	</body>
</html>