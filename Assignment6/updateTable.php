<!DOCTYPE html>
<html>
<head>
	<title>Update table</title>
</head>
<body>
	<?php
		include('databaseConnect.php');
		$query="Update student set name='Dikesh' where id=3;";
		$qu=mysqli_query($con,"select name from student where id=4;");
		if(mysqli_query($con,$query)){
			echo "Update successfull";
		}else{
			echo "Couldn't update. ".mysqli_error($con);
		}

		echo mysqli_num_rows($qu);
		mysqli_close($con);
	?>
</body>
</html>