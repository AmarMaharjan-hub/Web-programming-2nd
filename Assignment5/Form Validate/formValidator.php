<html>
	<head>
		<title>form validator</title>
	<head>
	<body>
		<?php
			$name=trim($_POST['name']);
			$nameLength=strlen($name);
			$address=trim($_POST['address']);
			$addressLength=strlen($address);
			$phone=trim($_POST['phone']);
			$phoneLength=strlen($phone);
			$error="";
			$alpha="/^[A-Z a-z 0-9]{6,12}$/";
			$num="/^98[0-9]{8}$/";
			if($nameLength<5){
				$error=$error."Name must be atleast 5 characters long<br><br>";
			}
			if(!preg_match($alpha,$name)){
				$error=$error."Incorrect name format<br><br>";
			}
			if($addressLength<5){
				$error=$error."Address must be atleast 5 characters long<br><br>";
			}
			if(!preg_match($alpha,$address)){
				$error=$error."Incorrect address format<br><br>";
			}
			
			if($phoneLength!=8){
				$error=$error."Phone number should be 10 digits long<br><br>";
			}
			if(!preg_match($num,$phone)){
						$error=$error."Incorrect phone format.<br>";
			}
			$email = $_POST["email"];
			if(strlen($email)==0){
				$error=$error."Email field is empty<br><br>";
			}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
					$error=$error."Invalid email fromat<br><br>";
			}
			if($error){
				echo "$error";
				echo "<a href='formValidation.html'>Apply again</a>";
			}else{
				echo "Form Accepted";
			}
		?>
	</body>
</html>