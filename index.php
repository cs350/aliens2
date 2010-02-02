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
    <?php include("header.html"); ?>
	<div id="main">
	
	  <p>Share your story of alien abduction:</p>
  <form method="post" action="report.php">
    <label for="firstname">First name:</label>
    <input type="text" id="firstname" name="firstname" /><br />
    <label for="lastname">Last name:</label>
    <input type="text" id="lastname" name="lastname" /><br />
    <label for="email">What is your email address?</label>
    <input type="text" id="email" name="email" /><br />
    <label for="city">Where did it happen?</label>
    <input type="text" id="city" name="city" />
    
    <select name="state">
    <option>AZ</option>
    <option>NM</option>
    <option>TX</option>
    </select> <br />
  
    <label for="whenhappened">When did it happen?</label>
    <script>DateInput('whenhappened', true, 'YYYY-MM-DD')</script>
    <br />
    <label for="howlong">How many days were you gone?</label>
    <input type="text" id="howlong" name="howlong" /><br />
    <label for="howmany">How many did you see?</label>
    <input type="text" id="howmany" name="howmany" /><br />
    <p>Please describe what happened<p>
     <textarea id="other" name="description" rows="8" cols="54" ></textarea><br />

    <input type="submit" value="Report Abduction" name="submit" />
  </form>
	
	
	
	
	</div>
	
	
	
	
    <?php include("sidebar.html"); ?>
	<div id="footer"><p>This is a footer</p></div>
</div>
</body>
</html>
