<!DOCTYPE html>
<html>
<head>
	<title>Update table</title>
</head>
<body>
	<?php
		include('databaseConnect.php');
		$query="Update student set name='Dikesh' where id=3;";
		if(mysqli_query($con,$query)){
			echo "Update successfull";
		}else{
			echo "Couldn't update. ".mysqli_error($con);
		}
		mysqli_close($con);
	?>
</body>
</html>