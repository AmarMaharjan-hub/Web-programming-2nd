<html>
	<head>
		<title>Form Processor</title>
	</head>
	<body>
		<?php
			$defaults=$_POST;
			print "Hello, ".htmlentities($defaults['name'])." !!!<br/>";
			print "According to the form you submitted:<br/>";
			print "You are a ".htmlentities($defaults['age'])." years old ";
			print htmlentities($defaults['gender'])." living in ";
			print htmlentities($defaults['address']);
		?>
	</body>
</html>