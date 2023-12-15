<?php
//write a PHP program that reads CSV file which contains (itemId, itemDesc, rate, qty) and insert them into  a database. Assumption can be //made if required.
//esma file ra database paila dekhi nai exist xa vanera assunption hunxa. Esma file kohlera insert garirakh nu pardaina.
	$file=fopen("test.csv" , "r") or die ("Unable to open");
	$con=mysqli_connect("localhost" ,"root" , "" ,"demo");
	if($con){
		echo "Database connection successfull.<br>";
	}else{
		die ("Couldn't connect to database.");
	}
	$count=0;
	$dat=0;
	while(!feof($file)){
		if($data=fgetcsv($file)){
			$sql="Insert into item values( '".$data[0]."', '".$data[1]."', '".$data[2]."', '".$data[3]."')";
			if($count!=0){
				$res=mysqli_query($con, $sql);
				if($res){
					echo "Data inserted<br>";
					$dat++;
				}else{
					echo mysqli_error($con)."<br>";
				}
			}else{
				$count++;
			}
			
		}
	}
	echo "$dat data inserted successfully.";
	fclose($file);
	mysqli_close($con);
?>