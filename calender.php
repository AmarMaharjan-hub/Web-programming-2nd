<!DOCTYPE html>
<html>
<head>
	<title>Calender</title>
</head>
<body>
	<?php
		$date=time();
		$month=date('m',$date);
		$day=date('d',$date);
		$year=date('y',$date);

		$firstDay=mktime(0,0,0,$month,1,$year);
		$title=date('F',$firstDay);
		$dayOfWeek=date('D'	,$firstDay);

		switch($dayOfWeek){
			case "Sun":
				$blank=0;
				break;
				case "Mon":
				$blank=1;
				break;
				case "Tue":
				$blank=2;
				break;
				case "Wed":
				$blank=3;
				break;
				case "Thu":
				$blank=4;
				break;
				case "Fri":
				$blank=5;
				break;
				case "Sat":
				$blank=6;
				break;
		}
		$monthDays=cal_days_in_month(0,$month,$year);
		$disWeek=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
		echo "<table border=2><tr><th colspan=7>$title $dayOfWeek</th></tr>
			<tr>";
			foreach($disWeek as $val)
				echo "<td>".$val."</td>";
		echo "</tr><tr>";
			$daysCount=1;
			while($blank>0){
				echo "<td></td>";
				$blank--;
				$daysCount++;
			}
			$dayOfMonth=1;
			for($i=1;$i<=$monthDays;$i++){
				echo "<td>$i</td>";
				if($daysCount%7==0){
					echo "</tr><tr>";
				}
				$daysCount++;
			}
			while($daysCount<=35){
				echo "<td></td>";
				$daysCount++;
			}
		echo "</tr></table>";
	?>
</body>
</html>