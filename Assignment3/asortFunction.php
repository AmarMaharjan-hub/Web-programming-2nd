<html>
	<head>
		<title>Associative array sorting</title>
	</head>
	<body>
		<?php
			$var1=array("Ram"=>232,"Shyam"=>33,"Hari"=>5244,"Mohan"=>7);
			asort($var1);
			print "Displaying array content in ascending order:<br/>";
			foreach($var1 as $i=>$v)
				print $var1[$i]."<br/>";
		?>
	</body>
</html>