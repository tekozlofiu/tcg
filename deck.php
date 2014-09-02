<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<META NAME="description" CONTENT="A database website that lets you browse Decks, combos, and plays, for YuGiOh TCG.">
<META NAME="keywords" CONTENT="YuGiOh, TCG, Playbook, Trading Cards, Decklist, card games">
<META NAME="robots" CONTENT="all, index, follow">
<link href="css/basic.css" rel="stylesheet" type="text/css">
<link href="macro.png" rel="shortcut icon">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>

<?php include("config.php") ?>
<?php
if (empty($_GET))
{
	header( 'Location: index.php' ) ;
}
// Create connection

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id = mysqli_real_escape_string($con,$_GET['id']);
$result = mysqli_query($con,"SELECT * from `decks` WHERE `ID` = ".$id);
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
$last_edit = $row['last_edit'];
}
?>
<title>YuGiOh! Playbook! - <?php echo $name?></title>
<?php
require_once("include/membersite_config.php");
if ($arch==1)
{
	if (!$fgmembersite->CheckLogin()) {
    $fgmembersite->RedirectToURL("index.php");
    exit;
	}
}
?>
</head><body><div id="fixed-div"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=KCT6CK54UJGPU">
<img src="http://ygoplaybook.com/instant.png" id="submit" height="150" width="150" alt="Donate"></a>
</div>
<div id=content>
<div id=header> <a href="index.php"><img src="logo.png" alt="YuGiOh Playbook"></a> </div>
<div id=deckcontent> 
  <h1><?php echo $name?>
    <?PHP
require_once("include/membersite_config.php");

if($fgmembersite->CheckLogin())
{
   echo '<a href="edit.php?id=' .$id. '">[EDIT]</a>';
   if ($fgmembersite->User() == "n4ru") {
   if (isset($_GET['arch'])) { 
   		$arch = $_GET['arch'];
		mysqli_query($con,"UPDATE `decks` set arch='".$arch."' WHERE `ID` = '".$id."'");
   		if ($arch == "1") {
   			echo '<a href="deck.php?id=' .$id. '&arch=0">[UNARCHIVE]</a>';
  		 } else {
			echo '<a href="deck.php?id=' .$id. '&arch=1">[ARCHIVE]</a>';
		 }
   } else {
		if ($arch == "1") {
			echo '<a href="deck.php?id=' .$id. '&arch=0">[UNARCHIVE]</a>';
		} else {
			echo '<a href="deck.php?id=' .$id. '&arch=1">[ARCHIVE]</a>';
		}
   }
   echo '<font size=18px>('.$last_edit.')</font>';
   }
}
?>
  </h1>
  <div style="font-size: 24px;"> Core: <?php echo $core?><br />
    Cover Card: <?php echo $cover?> </div>
  <div id=leftinfo><img src="cards.png" width="207" height="19" style="position: relative; top: 30px; left: 13px; z-index: 2; " alt="">
    <div id=sideinfo>
      <ul>
        <?php
$replace = array("<br />", "<p>", "</p>", "<br>");
$output = array("<li>", "<li>", "", "<li>");
$cards = str_replace($replace, $output, $cards);
echo $cards
?>
      </ul>
    </div>
    <img src="traits.png" width="86" height="19" style="position: relative; top: 30px; left: 13px; z-index: 2; " alt="">
    <div id=sideinfoa>
      <ul>
        <?php
$replace = array("<br />", "<p>", "</p>", "<br>");
$output = array("<li>", "<li>", "", "<li>");
$traits = str_replace($replace, $output, $traits);
echo $traits
?>
      </ul>
    </div>
  </div>
  <div id=rightinfo>
    <p>
      <?php
			  echo "<img src='" . $image . "' alt='".$cover."' width='199' height='290'>";
			  ?>
    </p>
    <div id=flavor> <img src="description.png" width="164" height="19" style="position: absolute; top: -11px; left: 18px; z-index: 2; " alt=""> <?php echo $descr?></div>
  </div>
  <!--</div> -->
  <br> 
    
  <br><br>
</div>
    <!-- //tests --> 
    <!-- //tests --> 
<div id="plays" style="margin-left: auto ; margin-right: auto ; display: block; clear:both;">
    <?php echo $plays?>
    <br> <br>
    <h2><strong>Techs and Siding:</strong></h2>
    <br>
    
      <?php echo $tech?>
  <br><br>
  <h2><strong>Variants:</strong></h2>
  <?php

if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT * from `decks` WHERE `core` = '" . $core . "' AND `ID` != '" . $id . "' OR `cover` = '" . $cover . "' AND `ID` != '" . $id . "' AND `arch` != '1'");
while($row = mysqli_fetch_array($result)) 
{
$name = $row['name'];
$variantid = $row['ID'];
echo '<div class=resultdisplay><div class=resultdisplayname><a href="deck.php?id=' . $variantid . '">' . $name . '</a></div></div>';
}
/* <div class=resultdisplaysideinfo> <img src="macro.png" alt="Banish Heavy" width="26" height="26">
<div class=resultdisplayfamily><img src="dark.png" width="26" height="26"></div> */
?>
</div>
</div>
<br>
<br>
<br>
<div id="zoom-image" style="display: none; pointer-events:none; z-index: 999;">
<img src="" style="width: 250px; height: 363px; position: relative;" />
</div>
<script type="text/javascript">
    $('#cover').mouseover(function(e){
        $('#zoom-image').show();
    });
    $('#cover').mousemove(function(e){
        var x = e.pageX;
        var y = e.pageY;
        $('#zoom-image img').attr('src', $(this).attr('src'));
        $('#zoom-image').offset({left: x-125 ,top: y-182});
    });
    $('#cover').mouseout(function(e){
        $('#zoom-image').hide();
    });
    $('#plays img').mouseover(function(e){
        if ($(this).attr('src') != "plus.png" && $(this).attr('src') != "arrow.png"){
            $('#zoom-image').show();
        }
    });
    $('#plays img').mousemove(function(e){
        var x = e.pageX;
        var y = e.pageY;
        $('#zoom-image img').attr('src', $(this).attr('src'));
        $('#zoom-image').offset({left: x-125 ,top: y-182});
    });
    $('#plays img').mouseout(function(e){
        $('#zoom-image').hide();
    });
</script>
</body>
</html>