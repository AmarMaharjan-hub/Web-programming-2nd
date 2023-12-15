<!DOCTYPE html>
<html>
<head>
	<title>Default values</title>
</head>
<body>
	<?php
		$name=trim($_POST['name']);
		$email=trim($_POST['email']);
		$error="";
		if(strlen($name)<5){
			$error.="Name must be atleast 5 characters long";
		}else{
			for($i=0;$i<strlen($name);$i++){
				if($name[$i]<'A' && $name[$i]>'Z' || $name[$i]<'a' && $name[$i]>'z'){
					$error.="Invalid Name format";
					break;
				}
			}
		}
		if(strlen($email)==0){
			$error.="Email is empty";
		}else if(filter_var($email,FILTER_EMAIL_VALIDATE)){

		}
	?>
</body>
</html>