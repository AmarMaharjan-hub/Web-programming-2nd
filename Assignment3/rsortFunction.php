<html>
	<head>
		<title>Reverse Sorting</title>
	</head>
	<body>
		<?php
			$var1=array(234,23,7,89,23,34,32,234,6,7);
			rsort($var1);
			print "Displaying numeric array after reverse sorting:<br/>";
			foreach($var1 as $i)
				print $i."<br/>";
		?>
	</body>
</html>