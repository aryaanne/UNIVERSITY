<?php
session_start();
require_once('../mysql_connect.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PH UnivRecords</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap-3.3.7-dist/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:300,200italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
</head>
<body color="cyan">
<center>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
</nav>
  
<div class="container" style="margin-top: 100px; width: 450px; height: 230px; padding: 10px; background: #fff; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.76), 0 6px 20px 0 rgba(0, 0, 0, 0.45);">
  <div style="border-bottom: solid .45px #000; padding: 4px; margin-bottom: 10px;"><h2 style="font-family: 'Oswald', Arial; size: 30px;">University Records PH</h2></div>
  
  <form action="main2.php" method ="post">

  	  <div class="checkbox">
  		<label><input type="checkbox" name = "school" value="De La Salle University">DLSU</label>
	  
  		<input type="checkbox" name = "school" value="Ateneo De Manila University">ADMU</label>
	 
  	<label><input type="checkbox" name = "school" value="University of Santo Tomas">UST</label>
	</div>
	<div class="checkbox">
  	<label><input type="checkbox" name = "school" value="University of the Philippines">UP</label>
	
  	<label><input type="checkbox" name = "school" value="Mapua Institute of Technology">MIT</label>
	
  	<label><input type="checkbox" name = "school" value="Systems Technology Institute">STI</label>
	</div>
		
      <label style="font-family: 'Raleway', Arial;">Age Start:</label>
      <input type="text" class="form-control" name="start" width ="100" style="width: 75px">

      <label style="font-family: 'Raleway', Arial;">Age End:</label>
      <input type="text" class="form-control" name="end" width ="100" style="width: 75px">
	  <p style="margin-top: 10px;"><input type="submit" class="btn btn-info" value="SUBMIT"></p>

		</form>

    <form action = "viewAll.php" method ="post">
   <p style="margin-top: 10px;"><input type="submit" class="btn btn-info" value="View All"></p>
   </form>

</div>

</body>
</html>