<!DOCTYPE html>
<html>
<head>
	<title>Modify associative array</title>
</head>
<body>
	<?php
		$arr=array("Ram"=>12,"Shyam"=>43,"Hari"=>64,"Ramesh"=>73,"Gopal"=>23);
		echo "Before modifying associative array: <br>";
		foreach($arr as $key=>$value){
			echo "$key = $value<br>";
			$arr[$key]+=5;
		}
		echo "<br>Adding 5 to the elements of array: <br>";
		foreach($arr as $key=>$value){
			echo "$key = $value<br>";
		}
	?>
</body>
</html>