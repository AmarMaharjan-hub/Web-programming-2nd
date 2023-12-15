<!DOCTYPE html>
	<?php
		$cookieName="user";
		$cookieValue="Ram";
		setcookie($cookieName,$cookieValue,time()+(86400*7),"/");
	?>
<html>
<head>
	<title>Set a cookie</title>
</head>
<body>
	<?php
		if(!isset($_COOKIE['cookieName'])){
			echo "Cookie name ".$cookieName." is not set.";
		}else{
			echo "Cookie name ".$cookieName." is set";
			echo "value: ".$_COOKIE['cookieName'];
		}
	?>
</body>
</html>