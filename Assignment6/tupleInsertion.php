<!DOCTYPE html>
<html>
<head>
	<title>record insertion</title>
</head>
<body>
	<?php
		include('databaseConnect.php');
		$query="Insert into student values(15,'Mari','Jallu');";
		$query.="Insert into student values(20,'Bari','Kallu');";
		echo "$query";
		if(mysqli_multi_query($con,$query)){
			echo "Insertion Successful";
		}else{
			echo "Couldn't insert data".mysqli_error($con);
		}
		mysqli_close($con);
	?>
</body>
</html>