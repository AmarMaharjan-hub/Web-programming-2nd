<!DOCTYPE html>
<html>
<head>
	<title>Connection to the database</title>
</head>
<body>
	<?php
		$con=mysqli_connect("localhost","root","","demo");
		if(!$con){
			die ("Connection to the database failed.");
		}else{
			echo "Connection to the database successful.<br>";
		}
		//mysqli_close($con);
	?>
</body>
</html>