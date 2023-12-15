<!DOCTYPE html>
<html>
<head>
	<title>Alternate Row color</title>
</head>
<body>
	<?php
		$color=array("#43d170","#f26363");
		$colorPicker=0;
		echo "<table border=1>";
		for($i=0;$i<10;$i++){
			echo "<tr><td bgcolor='".$color[$colorPicker]."'>$i</td></tr>";
			$colorPicker=1-$colorPicker;
		}
		echo "</table>";
	?>
</body>
</html>