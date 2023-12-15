<!DOCTYPE html>
<html>
<head>
	<title>Edit date and time of server</title>
</head>
<body>
	<?php
		echo "The date and time of server is: ".date("m/d/20y h:i:sa");
		$date=mktime(3,24,6,6,6,2020);
		echo "<br>Date and time after editing: ".date("m/d/20y h:i:sa",$date);
	?>
</body>
</html>