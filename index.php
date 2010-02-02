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
        <label for="do">What did the aliens do?</label>
    <input type="text" id="do" name="do" /> <br />

    <label for="whenhappened">When did it happen?</label>
    <script>DateInput('whenhappened', true, 'YYYY-MM-DD')</script>
    <br />
    <label for="howlong">How many days were you gone?</label>
    <input type="text" id="howlong" name="howlong" /><br />
    <label for="howmany">How many did you see?</label>
    <input type="text" id="howmany" name="howmany" /><br />
    <p>Please describe what happened<p>
     <textarea id="other" name="description" rows="8" cols="54" ></textarea><br />
    <p><b>Appearance of Aliens</b></p>
    <div id="plain"><input type="checkbox" name="bald" value="checked" />bald</div></input><br />
    <div id="plain"><input type="checkbox" name="blue" />blue</div><br />
    <div id="plain"><input type="checkbox" name="blackeye" />big almond shaped black eyes</div><br />
    <div id="plain"><input type="checkbox" name="longfingers" />long fingers</div><br />
    <p>&nbsp;</p>
    <label for="fangspotted">Have you seen my dog Fang?</label>
    <div id="plain">Yes <input id="fangspotted" name="fangspotted" type="radio" value="yes" />
    No <input id="fangspotted" name="fangspotted" type="radio" value="no" /></div><br />
    <img src="fang.jpg" width="100" height="175"
      alt="My abducted dog Fang." /><br />
    <label for="other">Anything else you want to add?</label>
    <textarea id="other" name="other"></textarea><br />
    <input type="submit" value="Report Abduction" name="submit" />
  </form>
	
	
	
	
	</div>
	
	
	
	
    <?php include("sidebar.html"); ?>
	<div id="footer"><p>This is a footer</p></div>
</div>
</body>
</html>
