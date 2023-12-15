<?php
//Write a program in php to open a csv file named contact.csv and write data name, address and phone in that file.
//Display the content of csv file as well.(at least two data's should be written).
	$file=fopen("contact.csv" , "w") or die("Unable to connect");
	$title=array('Name' , 'Address' , 'Phone');
	if (fputcsv($file, $title)){
		echo "Title written to the file";
		}
	else{
		echo "Title cannot be written to the file";
	}
	/*$student=array(
			array(
				"Name"=>"Karina" , 
				"Address"=>"Patan" , 
				"Phone"=>"980235456"
				),
			array(
				"Name"=>"Ram" , 
				"Address"=>"Teku" , 
				"Phone"=>"980235400"
			),
			array(
				"Name"=>"Hari" ,
				 "Address"=>"Bafal" , 
				"Phone"=>"980543456"
			));
			*/
	//multidimensional associative array nabana e ni hunxa.
	$student=array(
		array("Karina","Patan","9802354556"),
		array("Ram","Teku","980235400"),
		array("Hari","Bafal","980543456")
	);
	foreach($student as $ind){
		fputcsv($file, $ind);
	}
	fclose($file);
	echo "<br><br>";
	$file=fopen("contact.csv", "r") or die("Unable to connect");
	while(!feof($file)){
		if($dat=fgetcsv($file)){
			foreach($dat as $val){
				echo "| $val ";
			}
			echo "|<br>";
		}
	}
	
	fclose($file);
?>
			