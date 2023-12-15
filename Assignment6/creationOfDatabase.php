<!DOCTYPE html>
<html>
<head>
	<title>Creation of database</title>
</head>
<body>
	<?php
		include('connectToServer.php');
		$query="Create database demo";
		if(mysqli_query($con,$query)){
			echo "Database created successfully.";
		}else{
			echo "Database couldn't be created.";
		}
	?>
</body>
</html>