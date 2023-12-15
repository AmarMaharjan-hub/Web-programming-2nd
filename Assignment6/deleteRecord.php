<!DOCTYPE html>
<html>
<head>
	<title>delete record</title>
</head>
<body>
	<?php
		include('databaseConnect.php');
		$query="delete from student where id=4";
		if(mysqli_query($con,$query)){
			echo "Deletion successfull.";
		}else{
			echo "Couldn't delete data. ".mysqli_error($con);
		}
		$mysqli=mysqli_error($con);
	?>
</body>
</html>