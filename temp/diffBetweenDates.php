<?php
	$date1=mktime(0,0,0,4,5,2019);
	$date2=mktime(0,0,0,4,3,2018);
	$diff=$date1-$date2;
	$year=intval($diff/31536000);
	$month=intval($diff/2592000);
	if($month>=12){
		$month=$month-(intval($month/12)*12);
	}
	$day=intval($diff/86400);
	if($day>=365){
		$day=$day-(intval($day/365)*365);
	}
	echo "The diff between date ".date('m/d/Y',$date1)." and ".date('m/d/Y',$date2)." is: $year years $month months and $day days";
?>