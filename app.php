<!DOCTYPE html>
<html>
<head>
<?php include("config.php") ?>
<?PHP
require_once("include/membersite_config.php");

if($fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.php");
    exit;
}
?>
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<link href="css/font.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
tinyMCE.init({
	
        mode : "exact",
        elements : "w1,w2,w3,w4",
		theme_advanced_resizing : true
});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>YuGiOh! Playbook! - Apply</title>
<META NAME="description" CONTENT="A database website that lets you browse Decks, combos, and plays, for YuGiOh TCG.">
<META NAME="keywords" CONTENT="YuGiOh, TCG, Playbook, Trading Cards, Decklist, card games">
<META NAME="robots" CONTENT="all, index, follow">
<link href="css/basic.css" rel="stylesheet" type="text/css">
<link href="macro.png" rel="shortcut icon">
</head>
<body>
<div id="fixed-div"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=KCT6CK54UJGPU"> <img src="http://ygoplaybook.com/instant.png" id="submit" height="150" width="150" alt="Donate"></a> </div>
<div style="text-align: center; margin:auto 0; display: block;"> <a href="index.php"><img src="logo.png" alt="YuGiOh Playbook"></a> <br>
  <div id="container">
    <form name="app" action="app.php" method="POST">
      <p>&nbsp;</p>
      <p align="left">Thank you for your interest in joining the YuGiOh! Playbook! contribution team. Please note that you can only fill out the application once. If you are accepted, you will be able to login with your selected username and password within 24 hours. If you are accepted earlier, you may be emailed from my gmail account with your username as the subject. You will only be emailed once.</p>
      <p align="left">&nbsp;</p>
      <p align="left">The decks you plan to add should be meta or at least consistent, and you must have impeccable writing skills, including on forums. You must be able to follow simple instructions, and beyond that it's as simple as editing a wiki (although the editor isn't quite evolved yet). Keep in mind the site aims to have a consistent writing style and layout throughout to ensure easy reading for viewers, which is what separates this site from others. You must be able to adapt to this.      </p>
      <p>&nbsp;</p>
      <p>
        <input id="name" type="text" placeholder="Real Name" name="name" >
      -
      <input type="text" placeholder="Email" name="email" >
      </p>
      <p>&nbsp;</p>
      <p>
        <input type="text" placeholder="Username" name="user" >
        -
        <input type="password" placeholder="Password" name="pass" >
      <p><br>
      <p align="left">List at least three (3) references to your YuGiOh related works, including deck writeups, locals reports, in depth rulings explanations, or related content.
      <p>      
      <p>
        <textarea name="references" id="w3"></textarea>
      <p><br>
      <p align="left">Provide at least 3 different decks that you have personally made or improved. They must be consistent and meta-worthy. Explain their plays, their strengths, weaknesses, and what could be improved upon.
      <p>      
      <p>
        <textarea name="decks" id="w2"></textarea>
      <p>      
      <p><br>      
      <p align="left">How did you hear about YuGiOh Playbook? Which YuGiOh community are you from? (ie: Pojo, DNF, reddit, /dng/) Please list your username on any communities you mention. You may be contacted there if accepted.
      <p>      
      <p>
      <textarea name="comm" id="w1"></textarea>      
      <p>      
      <p>
        <input type="submit" value="Submit" name="submit">
      <p>
      <p>            
    </form>
  </div>
  <?php

// Create connection
if(isset($_POST['submit'])) {

	// Check connection
	if (mysqli_connect_errno($con))
 	 {
 		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 	 }
	$ip = $_SERVER['REMOTE_ADDR'];
	$checkip = (mysqli_num_rows(mysqli_query($con,"SELECT `IP` FROM `apps` WHERE IP='".$ip."'")) > 0) ? true : false;
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$user = mysqli_real_escape_string($con,$_POST['user']);
	$pass = mysqli_real_escape_string($con,$_POST['pass']);
	$references = mysqli_real_escape_string($con,$_POST['references']);
	$comm = mysqli_real_escape_string($con,$_POST['comm']);
	$decks = mysqli_real_escape_string($con,$_POST['decks']);
	if (!$checkip) {
		$sql = "INSERT INTO `apps` VALUES (NULL, '".$_SERVER['REMOTE_ADDR']."', '".$name."', '".$email."', '".$user."', '".$pass."', '".					 		$references."', '".$decks."', '".$comm."', '0')";
		$sql = mysqli_query($con,$sql);
		echo '<script>alert("Application Submitted. Redirecting to homepage.")</script>';
	} else {
		echo '<script>alert("Already Submitted. Redirecting to homepage.")</script>';
	}
echo '<script>location.href="index.php"</script>';
	mysqli_close($con);
}
?>
</div>
</body>
</html>