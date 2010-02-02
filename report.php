<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Aliens Abducted Me - Report an Abduction</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<script type="text/javascript" src="calendarDateInput.js" />

<body>
<div id="wrap">
	<div id="header"><h1>Aliens R Us</h1></div>
	
	<div id="nav"><p><i>The top uncensored site for the latest abudctions.</i></p></div>
	<div id="main">
	
<?php
  include "db_connect.php";
  
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
  $when_it_happened = $_POST['whenhappened'];
  $city = $_POST['city'] ;
  $state = $_POST['state'];
  $duration = $_POST['howlong'];
  $how_many = $_POST['howmany'];
  $what_they_did = $_POST['whattheydid'];
  $fang_spotted = $_POST['fangspotted'];
  $email = $_POST['email'];
  $other = $_POST['other'];

  
  
  echo "<p>Thanks for submitting the form, $name.</p>";
  echo "<p>You were abducted in $location ($when_it_happened)" ;
  echo ' and were gone for ' . $duration . '</p>';
  
  
  
  $query = "INSERT INTO abduction_reports (firstname, lastname, email, city, state_abducted, date_abducted) " . 
  		   "VALUES ('$firstname', '$lastname', '$email', '$city', '$state', '$when_it_happened')";
  
  echo "<p>$query</p>";
  $result = mysqli_query($db, $query);
  
  echo "<h1>Abductions by date</h1>";
  
  
  $query = "SELECT * FROM abduction_reports ORDER BY date_abducted";
  
  $result = mysqli_query($db, $query);
  
  
  echo "<table id=\"hor-minimalist-b\">\n<tr><th>Date</th><th>Abductee</th><th>City</th><th>State</th><tr>\n\n";
  
  while($row = mysqli_fetch_array($result)) {
  	$firstname = $row['firstname'];
  	$lastname = $row['lastname'];
  	$date = $row['date_abducted'];
  	$city = $row['city'];
  	$state = $row['state_abducted'];
  	echo "<tr><td  >$date</td><td  >$firstname $lastname</td><td >$city</td><td>$state</td></tr>\n";
  }
 echo "</table>\n"; 
  
  mysqli_close($db);
  
  
?>
	
	
	
	</div>
	
	
	
	
	<div id="sidebar"><p><b>Search Site by City</b></p>
	<form method="post" action="searchCity.php">
	<input type="text" id="searchbox" name="searchbox" />
	<input type="submit" value="go" name="submit" />
	</form>
	<p  class="side"><b>Featured Story:</b><br />
	It is June 1969. My 4 year old daughter and I take my new Volkswagen "Bug" on a trip to the Midwest where I have family. I left about 3:00 a.m., loaded with Auto Club maps and made Flagstaff late that night staying at a motel. Early the next morning I stopped for gas and information. ... <br /><i>Submitted by Jeff Jarvis</i></p>
	</div>
	<div id="footer"><p>This is a footer</p></div>
</div>
</body>
</html>
