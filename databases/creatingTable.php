<!DOCTYPE html>
<html>
<head>
	<title>Creating a table</title>
</head>
<body>
	<?php
		include('databaseConnect.php');
		$query="Create table student(id int(5) primary key,name varchar(50) not null,address varchar(50));";
		if(mysqli_query($con,$query)){
			echo "Table created successfully.";
		}else{
			echo "Table couldn't be created.".mysqli_error($con);
		}
		mysqli_close($con);
	?>
</body>
</html>