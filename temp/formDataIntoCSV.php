<?php
//Write a program to save form data into a file "MyFile.csv".
	$values=array($_POST['alias'],$_POST['address']);
	$file=fopen("MyFile.csv","w") or die("Unexpected error occured.");
	if(fputcsv($file,$values)){
		echo "Data inserted successfully";
	}else{
		echo "Couldn't insert data.";
	}
?>