<!DOCTYPE html>
<html>
<head>
	<title>connection to the server</title>
</head>
<body>
	<?php
		$con=mysqli_connect("localhost","root","");
		if(!$con){
			die ("Coundn't connect to the database.");
		}else{
			echo "Connection succesful";
		}
	?>
</body>
</html>