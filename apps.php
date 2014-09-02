<!DOCTYPE html>
<html>
<head>
<?php include("config.php") ?>
<?PHP
require_once("include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.php");
    exit;
}
if(!$fgmembersite->User() == "n4ru")
{
    $fgmembersite->RedirectToURL("index.php");
    exit;
}
?>
  <?php

// Create connection
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$result = mysqli_query($con,"SELECT * from `apps` WHERE `ID`='".$id."'");
	while($row = mysqli_fetch_array($result)) 
	{
	$id = $row['ID'];
	$name = $row['name'];
	$email = $row['email'];
	$user = $row['user'];
	$pass = $row['pass'];
	}
	$pass = md5($pass);
	// Check connection
	if (mysqli_connect_errno($con))
 	 {
 		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 	 }
	$sql = "INSERT INTO `users` VALUES (NULL, '".$name."', '".$email."', '', '".$user."', '".$pass."', 'y')";
	$sql = mysqli_query($con,$sql);	
	$query = mysqli_query($con,"UPDATE `apps` set accept='1' WHERE `ID` = '".$id."'");
}
if(isset($_GET['decline'])) {
	$id = $_GET['decline'];
	$sql = mysqli_query($con,"UPDATE `apps` set accept='2' WHERE `ID` = '".$id."'");
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
<title>YuGiOh! Playbook! - Applications</title>
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
<?php
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT * from `apps` WHERE `accept` = '0'");
while($row = mysqli_fetch_array($result)) 
{
$id = $row['ID'];
$name = mysqli_real_escape_string($con,$row['name']);
$email = mysqli_real_escape_string($con,$row['email']);
$user = mysqli_real_escape_string($con,$row['user']);
$pass = mysqli_real_escape_string($con,$row['pass']);
$references = mysqli_real_escape_string($con,$row['references']);
$decks = mysqli_real_escape_string($con,$row['decks']);
$comm = mysqli_real_escape_string($con,$row['comm']);
echo '<br>Name: '.$name.' - Email: '.$email.'<br><br>References: '.$references.'<br><br>Decks: '.$decks.'<br><br>Communities: '.$comm.'<br><br><a href="apps.php?id='.$id.'">Accept</a> - <a href="apps.php?decline='.$id.'">Decline</a><br><br><hr>';
}
?>
  </div>
</div>
</body>
</html>