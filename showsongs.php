<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" type="text/css" href="favsongs.css">
  <title>Show songs in the database</title>
  <meta http-equiv="content-type" content="text/html; charset-iso-8859-1" />
</head>

<body>

<?php include 'include.htm';?>
<h1>ShowSongs.php</h1>

<?php

  $DBConnect = mysql_connect("itec315.frostburg.edu","akhan03","3125589");

    if ($DBConnect === false)
      print "Unable to connect to database. Error Number: ".mysql_errno();

    else {

  		$DBname = "akhan03";

  		if (!@mysql_select_db($DBname,$DBConnect))
  			 print "No database found.";

  		else {
  			$TableName = "favsongs";
  			$SQLString = "select * from $TableName";
  			$QueryResult = @mysql_query($SQLString, $DBConnect);

  			if (mysql_num_rows($QueryResult) ==0)
  				print "There are no entries in the database to show";

  			else {
  				print "Here is the list of songs in your database<br>";
  				print "<table width ='100%' border='3px'>";
  				print "<tr><th>Count (PK)</th><th>Artist</th><th>CD</th>
                <th>Favorite Song</th></tr>";
  				while (($Row = mysql_fetch_assoc($QueryResult)) !== false) {

  					print"<tr><td>{$Row['Count']}</td>";
  					print"<td>{$Row['artist']}</td>";
  					print"<td>{$Row['cd']}</td>";
  					print"<td>{$Row['song']}</td></tr>";
				  }

				print "</table>";

			   }
			mysql_free_result($QueryResult);
		  }
		mysql_close($DBConnect);
  }
?>

</body>
</html>
