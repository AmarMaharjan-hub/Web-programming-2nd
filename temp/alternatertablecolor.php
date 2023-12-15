<?php
	$marks=array(
	"Suraj"=>array("Web"=>55, "DBMS"=>60, "Java"=>65, "Ecomomics"=>70, "Account"=>75),
	"Nischal"=>array("Web"=>60, "DBMS"=>60, "Java"=>65, "Ecomomics"=>70, "Account"=>75),
	"Anu"=>array("Web"=>70, "DBMS"=>60, "Java"=>65, "Ecomomics"=>70, "Account"=>75),
	"Kajol"=>array("Web"=>55, "DBMS"=>60, "Java"=>65, "Ecomomics"=>70, "Account"=>75),
	"Ayusha"=>array("Web"=>55, "DBMS"=>60, "Java"=>65, "Ecomomics"=>70, "Account"=>75));
	echo "<table border='1'>";
	echo "<tr><th>Name</th><th>Web</th><th>DBMS</th><th>Java</th><th>Ecomomics</th><th>Account</th></tr>";
	$color=array('red','green');
	$index=0;
	foreach($marks as $key=>$value)
	{
		echo "<tr bgcolor='".$color[$index]."'><td>$key</td>";
		foreach($value as $v)
		{
			echo "<td>$v</td>";
		}
		echo "</tr>";
		$index=1-$index;
	}
	echo "</table>";
?>