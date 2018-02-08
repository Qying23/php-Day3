<html> 
<head> 
<title>tabelle von Database</title> 
<style>
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
	}

	td, th {
	    border: 1px solid #dddddd;
	    text-align: left;
	    padding: 8px;
	    width: 25%;
	}

	tr:nth-child(even) {

	    background-color: #dddddd;
	}
</style>
</head> 

<body> 
<?php 
$tabelle = new mysqli('localhost','root','', 'Test');

	if (!$tabelle)
	{
	   print "<h1>Unable to Connect to MySQL</h1>";
	}

$sql = "SELECT author_id, lastName, firstName, state FROM Author";
$result = mysqli_query($tabelle, $sql);

    echo "<table>
			  <tr>
			    <th>Author_id</th>
			    <th>Lastname</th>
			    <th>Firstname</th>
			    <th>state</th>
			  </tr>";
	
while($row = mysqli_fetch_assoc($result)) {

	echo     "<tr>
			    <td>". $row["author_id"] ."</td>
			    <td>". $row["lastName"] ."</td>
			    <td>". $row["firstName"] ."</td>
			    <td>". $row["state"]." </td>
			  	</tr>
		";
    } 
echo "</table>";

	// Free result set
	mysqli_free_result($result);
	// Close connection
	mysqli_close($tabelle);

?> 
</body> 
</html>