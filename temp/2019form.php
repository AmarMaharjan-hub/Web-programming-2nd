<?php
	$name=$_POST['name'];
	$age=$_POST['age'];
	$hobbies;
	//$hobbies=$_POST['football'];
	if(empty($_POST['hobbies'])){
		$hobbies=array();
		echo "Atleast one hobby must be selected<br>";
	}else{
		$hobbies=$_POST['hobbies'];
	}
	$comment=$_POST['comment'];
	$valid=0;
	$arr=array("Football","Basketball","Cricket","Badminton");
	if(strlen(trim($name))==0){
		echo "You must enter your name <br/>";
		$valid=1;
		}
/*	if(strlen(trim($name))<2 || strlen(trim($name))>10){
		echo "Your name must be 2 to 10 characters. <br/>";
		$valid=1;
		}
*/
	$reg="/^[A-Z a-z 0-9]{2,10}$/";
	if (!preg_match($reg, $name)){
		echo "Your name must be alphanumerical <br/>";
		$valid=1;
		}
	if (strlen($age)>16 && strlen($age)<55){
		echo "Your age must be between 16 and 55 <br/>";
		$valid=1;
		}
/*	if ($hobbies['football']==""){
		echo "Atleast one hobby must be selected";
		$valid=1;
		}
*/
	if(!strlen(trim($comment))){
		$comment=" ";
		echo"There should be something on comment";
		$valid=1;
		}
	if($valid==1){
		$default=$_POST;
		echo "<form method='post' action='2019form.php'>";
		echo "Name: <input type='text' name='myname' value='".htmlentities($default['name'])."'><br>";
		echo "Age: <input type='number' name='age' value='".htmlentities($default['age'])."'><br>";
		//echo "Hobbies: <input type='checkbox' name='hobbies[]' value='".htmlentities($default['football'])."'>";
		echo "Hobbies: ";
		foreach($arr as $sport){
			echo "<input type='checkbox' name='hobbies[]' value='". $sport. "'";
			foreach($hobbies as $value){
				if($sport == $value){
					echo " checked='checked' ";
				}
			}
			echo "> $sport";
		}
		echo "<br>";
		//echo "Comment: <input type='textarea' name='comment' value='".htmlentities($default['comment'])."'><br>";
		echo "Comment: <textarea name='comment' rows=4 cols=100 wrap='virtual'>".$comment."</textarea><br>";
		echo "<input type='submit' value='Submit'></form>";
	}
	else{
		header('location: 2019form.html');
		exit(0);
	} 
?>