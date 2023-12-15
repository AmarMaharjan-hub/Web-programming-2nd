<html>
	<head>
		<title>Global Local and Static variable</title>
	</head>
	<body>
		<?php
			$globe=5;
			function fcn(){
				global $globe;
				$loc=10;
				static $sta=5;
				print "Variable value:<br/>";
				print "global=$globe<br/>";
				print "local=$loc<br/>";
				print "static=$sta<br/><br/>";
				$sta++;
			}
			print "Calling function fcn three times:<br/><br/>";
			fcn();
			fcn();
			fcn();
		?>
	</body>
</html>