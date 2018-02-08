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
	$sql_statement .= "WHERE state = 'la' "; //es kommen nur ergebnis mit where state la
	$sql_statement .= "ORDER BY lastName, firstName ";

	$result = $mysqli->query($sql_statement);
	//var_dump($result);

	if (!$result) {
	       $outputDisplay = "<p>MySQL No: " . $mysqli->errno . "</p>"; //hier ohne punkt vorm = (weil wir das erste Mal das erstellen)
	       $outputDisplay .= "<p>MySQL Error: " . $mysqli->error . "</p>";
	       $outputDisplay .= "<p>SQL Statement: " . $sql_statement . "</p>";
	       $outputDisplay .= "<p>MySQL Affected Rows: " . $mysqli->affected_rows . "</p>";
	}
	$row = $result->fetch_assoc();

	$firstName = $row['firstName'];
	$lastName = $row['lastName'];
	$state = $row['state'];


	print "Author name: " . $firstName;
	print "<br>";
	print "Author lastname: " . $lastName;
	print "<br>";
	print "Author state: " . $state;
	?>

	</body>
</html>
