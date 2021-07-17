<html>
<head>
  <link rel="stylesheet" type="text/css" href="favsongs.css">
  <title>Stored Names</title>
</head>

<body>

<?php include 'include.htm';?>
<h1>StoreSongs.php</h1>
<h2>The data from the input page has been accepted and stored in the database.</h2>

<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//Hide notices - Notice: Undefined variable: artist in C:\xampp\htdocs\users\akhan03\COSC630\Week 5 Database\storesongs.php on line 34

if(empty($_POST['artist']) || empty($_POST['cd']) || empty($_POST['song']))
  print "You must enter all of the information.l";

else {

  $DBConnect = mysql_connect("itec315.frostburg.edu","akhan03","3125589");

    if ($DBConnect === false)
      print "Unable to connect to database. Error Number: ".mysql_errno();

    else {

      $DBname = "akhan03";
      mysql_select_db($DBname,$DBConnect);

      $TableName = "favsongs";
      $artist = stripslashes($_POST['artist']);
      $cd = stripslashes($_POST['cd']);
      $song = stripslashes($_POST['song']);

      $SQLstring = "insert into $TableName(artist, cd, song) value ('$artist', '$cd', '$song')";
      $QueryResult = mysql_query($SQLstring,$DBConnect);

      if ($QueryResult===false)
        print "There is an error.";
      else {
        print "We can assume that the record has been added.";
      }
    }

    mysql_close($DBConnect);

  }

?>
</body>
</html>
