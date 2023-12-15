<?php
	$date= time();
	$day= date('d',$date);
	$month=date('m',$date);
	$year=date('Y',$date);
	$first_day=mktime(0,0,0,$month,1,$year);
	$title=date('F',$first_day);
	$day_of_week=date('D',$first_day);
	switch($day_of_week){
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
	
	$days_in_month=cal_days_in_month(0,$month,$year);
	echo "<table border='3' weidth=950px>";
	echo "<tr><th colspan=7>$title $year</th></tr>";
	echo "<tr><td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td>Thu</td><td>Fri</td><td>Sat</td>";
	echo "<tr><td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td>Thu</td><td>Fri</td><td>Sat</td>";
?>