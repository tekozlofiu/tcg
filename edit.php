<!DOCTYPE html> 
<html><head>
<?php include("config.php") ?>
<?php
// Create connection

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if (!empty($_GET)) {
$id = mysqli_real_escape_string($con,$_GET['id']);
$result = mysqli_query($con,"SELECT * from `decks` WHERE `ID` = " . $id);
while($row = mysqli_fetch_array($result)) 
{
$name = $row['name'];
$image = $row['image'];
$core = $row['core'];
$cover = $row['cover'];
$cards = $row['cards'];
$traits = $row['traits'];
$descr = $row['descr'];
$plays = $row['plays'];
$tech = $row['tech'];
$arch = $row['arch'];
}
}
?>


<?PHP
require_once("include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
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
	<title>YuGiOh! Playbook! - Editor</title>

<META NAME="description" CONTENT="A database website that lets you browse Decks, combos, and plays, for YuGiOh TCG.">
<META NAME="keywords" CONTENT="YuGiOh, TCG, Playbook, Trading Cards, Decklist, card games">
<META NAME="robots" CONTENT="all, index, follow">

<link href="css/basic.css" rel="stylesheet" type="text/css">
<link href="macro.png" rel="shortcut icon">
    
</head>
<body>
<div id="announcement"><b>Attention:</b> People are already having issues following the guidelines for formatting. Please give the <a href="help.php">help page</a> a read again, it has been updated to be more thorough and clear in case there was some confusion before. The guidelines are not optional. We strive to maintain a fluent and consistent layout through the site for ease of use. <br><br> Thanks,<br>~ <i>n4ru</i><br><br><b>Update:</b> Content and writing has gotten a bit better, but I'm seeing some cards that don't belong due to consistency or other issues. Don't just throw random cards into the Tech/Side section. Thanks.</div>
<div id="fixed-div"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=KCT6CK54UJGPU">
<img src="http://ygoplaybook.com/instant.png" id="submit" height="150" width="150" alt="Donate"></a>
</div>
<div style="text-align: center; margin:auto 0; display: block;">
    <a href="index.php"><img src="logo.png" alt="YuGiOh Playbook"></a>    
    <br><div id="container"><?php 
	if (empty($_GET)) {
    echo '<form name="add" action="edit.php" method="POST">
  	  <input id="name" type="text" placeholder="Name" name="name" > - 
	  <input type="text" placeholder="Core" name="core" >
  	  <p><input type="text" placeholder="Image" name="image" > - 
	  <input type="text" placeholder="Cover" name="cover" ><br><p>Cards Utilized:<textarea placeholder="Cards Utilized" name="cards" id="w3"></textarea>
  	  <br><p>Traits:<textarea placeholder="Traits" name="traits" id="w2"></textarea>
  	  <br><p><textarea placeholder="Description" name="descr" style="width: 350px; height: 150px"></textarea>
  	  <br><p>Plays:<textarea placeholder="Plays" name="plays" id="w1"></textarea>
  	  <br><p>Techs and Siding:<textarea placeholder="Techs and Siding" name="tech" id="w4"></textarea>
      <input type="submit" value="Submit" name="submit">
    </form>';
	} else {
	echo '<form name="add" action="edit.php?id='.$id.'" method="POST">
  	  <input id="name" type="text" value="'.$name.'" name="name" > - 
	  <input type="text" value="'.$core.'" name="core" >
  	  <p><input type="text" value="'.$image.'" name="image" > - 
	  <input type="text" value="'.$cover.'" name="cover" ><br><p>Cards Utilized:<textarea name="cards" id="w2">'.$cards.'</textarea>
  	  <br><p>Traits:<textarea name="traits" id="w3">'.$traits.'</textarea>
  	  <br><p><textarea name="descr" style="width: 350px; height: 150px">'.$descr.'</textarea>
  	  <br><p>Plays:<textarea name="plays" id="w1">'.$plays.'</textarea>
  	  <br><p>Techs and Siding:<textarea name="tech" id="w4">'.$tech.'</textarea>
      <input type="submit" value="Submit" name="submit">
    </form>';
	}
	?></div>
    <?php

// Create connection
if(isset($_POST['submit'])) {

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if (!empty($_GET)){
$id = mysqli_real_escape_string($con,$_GET['id']);
$result = mysqli_query($con,"SELECT * from `decks` WHERE `ID` = " . $id);
while($row = mysqli_fetch_array($result)) 
{
$name = mysqli_real_escape_string($con,$row['name']);
$image = mysqli_real_escape_string($con,$row['image']);
$core = mysqli_real_escape_string($con,$row['core']);
$cover = mysqli_real_escape_string($con,$row['cover']);
$cards = mysqli_real_escape_string($con,$row['cards']);
$traits = mysqli_real_escape_string($con,$row['traits']);
$descr = mysqli_real_escape_string($con,$row['descr']);
$plays = mysqli_real_escape_string($con,$row['plays']);
$tech = mysqli_real_escape_string($con,$row['tech']);
$arch = mysqli_real_escape_string($con,$row['arch']);
}
$sql = "INSERT INTO `decks_lastrevision` VALUES (".$id.", '".$name."', '".$image."', '".$core."', '".$cover."', '".$cards."', '".$traits."', '".$descr."', '".$plays."', '".$tech."', '1', '".$fgmembersite->User()."', NULL)";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
}
$name = mysqli_real_escape_string($con,$_POST['name']);
$image = mysqli_real_escape_string($con,$_POST['image']);
$core = mysqli_real_escape_string($con,$_POST['core']);
$cover = mysqli_real_escape_string($con,$_POST['cover']);
$cards = mysqli_real_escape_string($con,$_POST['cards']);
$traits = mysqli_real_escape_string($con,$_POST['traits']);
$descr = mysqli_real_escape_string($con,$_POST['descr']);
$plays = mysqli_real_escape_string($con,$_POST['plays']);
$tech = mysqli_real_escape_string($con,$_POST['tech']);
if (empty($_GET)) {
$sql = "INSERT INTO `decks` VALUES (NULL, '".$name."', '".$image."', '".$core."', '".$cover."', '".$cards."', '".$traits."', '".$descr."', '".$plays."', '".$tech."', '1', '".$fgmembersite->User()."')";
} else {
$sql = "UPDATE `decks` SET name='".$name."', image='".$image."', core='".$core."', cover='".$cover."', cards='".$cards."', traits='".$traits."', descr='".$descr."', plays='".$plays."', tech='".$tech."', arch='".$arch."', last_edit='".$fgmembersite->User()."' WHERE `ID` = ".$id;
echo '<script>location.href="deck.php?id='.$id.'"</script>';
}
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
}
?>
</div>
</body>
</html>