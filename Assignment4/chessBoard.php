<html>
	<head>
		<title>Chess board</title>
	</head>
	<body>
		<?php
			$color=array("black","white");
			$colAlt=1;
			print "<table border=1 cellpadding=\"20px\" align=\"center\">";
			for($i=0;$i<8;$i++){
				print "<tr>";
				for($j=1;$j<=8;$j++){
					$txtAlt=1-$colAlt;
					print "<td bgcolor=\"$color[$colAlt]\" align=\"middle\" valign=\"center\" style=\"color:$color[$txtAlt]\">".($i*8+$j)."</td>";
					$colAlt=1-$colAlt;
				}
				$colAlt=1-$colAlt;
				print "</tr>";
			}
			print "</table>";
		?>
	</body>
</html>