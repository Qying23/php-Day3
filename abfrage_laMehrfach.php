<html>
	<body>
	<?php

	$mysqli = new mysqli('localhost','root','', 'Test');

	if (!$mysqli)
	{
	       print "<h1>Unable to Connect to MySQL</h1>";
	}

	$sql_statement  = "SELECT lastName, firstName, state ";
	$sql_statement .= "FROM Author ";
	$sql_statement .= "WHERE state = 'la'"; //nur von state la
	$sql_statement .= "ORDER BY lastName, firstName ";

	$result = $mysqli->query($sql_statement);
	//var_dump($result);

	if (!$result) {
	       $outputDisplay = "<p>MySQL No: " . $mysqli->errno . "</p>"; //hier ohne punkt vorm = (weil wir das erste Mal das erstellen)
	       $outputDisplay .= "<p>MySQL Error: " . $mysqli->error . "</p>";
	       $outputDisplay .= "<p>SQL Statement: " . $sql_statement . "</p>";
	       $outputDisplay .= "<p>MySQL Affected Rows: " . $mysqli->affected_rows . "</p>";
	}
	$rows = $result->fetch_all(MYSQLI_ASSOC);



	foreach ($rows as $row) {
	   echo "<hr>";
	   echo "<br>";
	   echo $row['firstName'];
	   echo "<br>";
	   echo $row['lastName'];
	   echo "<br>";
	   echo $row['state'];
	}
	?>

	</body>
</html>
