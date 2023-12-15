<!DOCTYPE html>
<html>
<head>
	<title>Modify element of array</title>
</head>
<body>
	<?php
		$arr=array(4,3,2,5,6);
		echo "Before modifying array:<br>";
		foreach($arr as $k=>$i){
			echo "$i<br>";
			$arr[$k]+=5;
		}
		echo "After adding 5 to the elements:<br>";
		foreach($arr as $i){
			echo "$i<br>";
		}
	?>
</body>
</html>