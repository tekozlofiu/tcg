<!DOCTYPE html>
<html>
<head>
<?php include("config.php") ?>
<?PHP
require_once("include/membersite_config.php");
$fgmembersite->CheckLogin();
if((!$fgmembersite->User()) == "n4ru")
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
<title>YuGiOh! Playbook! - Add User</title>
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
    <form name="app" action="addu.php" method="POST">
      <p>&nbsp;</p>
      <p align="left">ADDING USER</p>
      <p>&nbsp;</p>
      <p>
        <input id="name" type="text" placeholder="Name" name="name" >
      -
      <input type="text" placeholder="Email" name="email" >
      </p>
      <p>&nbsp;</p>
      <p>
        <input type="text" placeholder="Username" name="user" >
        -
        <input type="password" placeholder="Password" name="pass" >
      <p><br>
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
	$pass = md5($pass);
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$user = mysqli_real_escape_string($con,$_POST['user']);
	$sql = "INSERT INTO `users` VALUES (NULL, '".$name."', '".$email."', '', '".$user."', '".$pass."', 'y');";
	$sql = mysqli_query($con,$sql);
	mysqli_close($con);
}
?>
</div>
</body>
</html>