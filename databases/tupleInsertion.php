<!DOCTYPE html>
<html>
<head>
	<title>record insertion</title>
</head>
<body>
	<?php
		include('databaseConnect.php');
		$query="Insert into student values(5,'Hari','Dallu');";
		if(mysqli_query($con,$query)){
			echo "Insertion Successful";
		}else{
			echo "Couldn't insert data";
		}
		mysqli_close($con);
	?>
</body>
</html>