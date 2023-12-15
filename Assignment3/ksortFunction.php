<html>
	<head>
		<title>Associative array key sorting</title>
	</head>
	<body>
		<?php
			$var1=array("Ram"=>232,"Shyam"=>33,"Hari"=>5244,"Mohan"=>7);
			ksort($var1);
			print "Displaying array content in ascending order by index:<br/>";
			foreach($var1 as $i=>$v)
				print $i."=".$var1[$i]."<br/>";
		?>
	</body>
</html>