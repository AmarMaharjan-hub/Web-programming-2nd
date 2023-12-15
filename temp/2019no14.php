<?php
	$user=$_POST['name'];
	$pass=$_POST['password'];
	$con=mysqli_connect("localhost","root","","login");
	if(!$con){
		die("Failed to connect");
	}else{
		echo "Successfully connected to database";
	}
	//$query="Select * from userdetails WHERE name=' ".$user." ' password=' ".$pass." '";
/*	$result=mysqli_query($con, $query);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			echo "Welcome to the page<br>";
			echo "Name:" .$row['user']. "<br/>";
			//echo "Address:" .$row['a']. <br/>";
			
	}
	else{
		echo "<html>
			<head> 
				<script type='text/javascript'>";
				function show_alert($user, $pass){
					alert("Username and password is incorrect";
					session_start();
					$_SESSION['u']=$user;
					header("location: 219no14.html");
					exit(0);
					}
				</script>
			</head>
			"<body onload=show_alert()>";
			include ("2019n014.html");
			echo "</body> </html>";
			exit(0);
		}
		*/
	function checker($user,$pass){
		global $con;
		$temp1=0;
		$query="Select * from user";
		$res=mysqli_query($con,$query);
		if(mysqli_num_rows($res)>0){
			while($row=mysqli_fetch_assoc($res)){
				if($row['username']==$user && $row['password']==$pass){
					echo "<br>Welcome to the page<br>";
					echo "Name:" .$row['username']. "<br/>";
					$temp1=1;
					break;
				}
			}
			if($temp1==0){
				header("Location: 2019no14.html");
				exit(0);
			}
		}else{
			echo "No user in the database.";
		}
	}
	checker($user,$pass);

?>
					
					