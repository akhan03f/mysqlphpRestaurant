<html>
<head>
  <link rel="stylesheet" type="text/css" href="favsongs.css">
  <title>Name Input</title>
  <meta http-equiv="content-type" content ="text/html; charset-iso=8859-1" />
</head>

<body>
<?php include 'include.htm';?>
<h1>Song_Input.php</h1>
<h2>This is an input page.</h2>
<h2>Please input your favorite song's information below: </h2>

<div class="container">
<fieldset>
  <form method="POST" action="storesongs.php">
    <p>Artist: <input type="text" name="artist" /></p>
    <p>CD: <input type="text" name="cd" /></p>
    <p>Favorite Song from CD: <input type="text" name="song" /></p>
    <p><input type="submit" value="Submit" /></p>
  </form>
</fieldset>
</div>

<body>
<html>
