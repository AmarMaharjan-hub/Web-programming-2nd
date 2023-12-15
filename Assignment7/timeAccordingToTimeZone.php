<!DOCTYPE html>
<html>
<head>
	<title>Time according to the time zone</title>
</head>
<body>
	<?php
		date_default_timezone_set("Asia/Kathmandu");
		echo "Time of Nepal: ".date("h:i:sa");
	?>
</body>
</html>