<?php
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$con=mysqli_connect("localhost","root","","myDB");
	if (!$con) {
		// code...
		die("Could not connect to database");
	}
	$sql="SELECT * from user_info where user='$name' AND password='$pass'";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0){
		$rows=mysqli_fetch_assoc($result);
		echo"Welcome ".$rows['User'];
	}
	else{
		header("location:form.html");
		exit(0);
	}	
?>