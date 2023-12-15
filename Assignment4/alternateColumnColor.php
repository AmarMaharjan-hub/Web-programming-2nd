<!DOCTYPE html>
<html>
<head>
	<title>Alternate color of column</title>
</head>
<body>
	<?php
		$color=array("#35b0a4","#cc65e0");
		$colorPicker=0;
		echo "<table border=1><tr>";
		for($i=0;$i<10;$i++){
			echo "<td bgcolor='".$color[$colorPicker]."''>$i</td>";
			$colorPicker=1-$colorPicker;
		}
		echo "</tr></table>";
	?>
</body>
</html>