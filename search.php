<!DOCTYPE html> 
<html>
<head>
<?php include("config.php") ?>
<?php
$search = $_GET['query'];
$search = mysqli_real_escape_string($con,$search);
$result = mysqli_query($con,'SELECT * FROM decks WHERE name LIKE "%' . $search . '%" OR traits LIKE "%'.$search.'%"');

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>YuGiOh! Playbook! - Searching for <?php echo $search?></title>

<META NAME="description" CONTENT="A database website that lets you browse Decks, combos, and plays, for YuGiOh TCG.">
<META NAME="keywords" CONTENT="YuGiOh, TCG, Playbook, Trading Cards, Decklist, card games">
<META NAME="robots" CONTENT="all, index, follow"> 

<link href="css/basic.css" rel="stylesheet" type="text/css">
<link href="macro.png" rel="shortcut icon">
</head>
<body><div id="fixed-div"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=KCT6CK54UJGPU">
<img src="http://ygoplaybook.com/instant.png" id="submit" height="150" width="150" alt="Donate"></a>
</div>
<div id=content>
	
    <div id=header>
    <a href="index.php"><img src="logo.png" alt="YuGiOh Playbook"></a>    
    </div>
  	<div id=browse>
    <img src="results.png" width="98" height="19" style="position: absolute; top: -13px; left: 20px; z-index: 2;" alt="Results">
    <?php
require_once("include/membersite_config.php");
while($row = mysqli_fetch_array($result)) 
{
$id = $row['ID'];
$name = $row['name'];
$image = $row['image'];
$core = $row['core'];
$cover = $row['cover'];
$cards = $row['cards'];
$traits = $row['traits'];
$descr = $row['descr'];
$plays = $row['plays'];
$arch = $row['arch'];
$last_edit = $row['last_edit'];
if(($fgmembersite->CheckLogin()) && ($arch == 1)) {
	if ($fgmembersite->User() == "n4ru") {
		echo '<a href="deck.php?id=' . $id . '">' . $name . '</a> ('.$last_edit.') <b>(Archived)</b><br>';
	} else {
		echo '<a href="deck.php?id=' . $id . '">' . $name . '</a> (Archived)<br>';
	}
} else if ($arch == 0) {
	if (($fgmembersite->CheckLogin()) && ($fgmembersite->User() == "n4ru")) {
		echo '<a href="deck.php?id=' . $id . '">' . $name . '</a> ('.$last_edit.')<br>';	
	} else {
		echo '<a href="deck.php?id=' . $id . '">' . $name . '</a><br>';
	}
}
}
?>
<br><a href="index.php">Return</a>
    </div>

</div>

</body>
</html>