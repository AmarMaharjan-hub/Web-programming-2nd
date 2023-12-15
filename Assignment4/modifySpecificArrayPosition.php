<!DOCTYPE html>
<html>
<head>
	<title>Modify array</title>
</head>
<body>
	<?php
		$arr=array(3,4,7,2,6);
		echo "Before modifying array:<br>";
		foreach($arr as $k=>$i){
			echo "$i<br>";
			if($k==3){
				$arr[$k]+=5;
			}
		}
		echo "Adding 5 to the element at index 3:<br>";
		foreach($arr as $i){
			echo "$i<br>";
		}
	?>
</body>
</html>