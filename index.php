<!DOCTYPE html> 
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>YuGiOh! Playbook!</title>

<META NAME="description" CONTENT="A database website that lets you browse Decks, combos, and plays, for YuGiOh TCG.">
<META NAME="keywords" CONTENT="YuGiOh, TCG, Playbook, Trading Cards, Decklist, card games">
<META NAME="robots" CONTENT="all, index, follow"> 

<link href="css/basic.css" rel="stylesheet" type="text/css">
<link href="macro.png" rel="shortcut icon">
    
</head>
<body>
<div id="fixed-div"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=KCT6CK54UJGPU">
<img src="http://ygoplaybook.com/instant.png" id="submit" height="150" width="150" alt="Donate"></a>
</div>
<div id=content>
	
  <div id=header>
    <a href="index.php"><img src="logo.png" alt="YuGiOh Playbook"></a>    
    </div>
  <div id=menu>
    <form id="searchbox" action="search.php" method="GET">
        <input id="autocomplete" type="text" placeholder="Search for a deck" name="query" >
        <input id="searchbtn" type="submit" value="Search">
    </form>
  </div>
    <p>
      <?php
	/*
  	<div id=browse>
    <img src="browse.png" style="position:absolute; top: -16; left: 20; z-index: 2;">
    
    
    <ul id="browselist">
      <li>
		<a href="#">Popularity</a>
		<ul>
			<li><a href="#">Necroface</a></li>
		</ul>
	</li>
    
	<li class=aquisition>
		<a href="#">Cost</a>
		<ul>
			<li class=aquisitionsub><a href="#">HUE</a></li>
            <li class=aquisitionsub><a href="#">HUE HUE</a></li>
            <li class=aquisitionsub><a href="#">HUE HUE HUE</a></li>
		</ul>
	</li>
    
    <li>
    	<a href="zone.php">Date</a>
		<ul>
            <li class=aquisitionsub><a href="#">Eastern Kingdoms</a></li>
		</ul>
        
    </li>
    
	</ul>
    
    </div> <!--closes browse-->
    */
	?>
    </p>
    <p id="center"><a href="http://ygoplaybook.com/search.php?query=">View All Decks</a><br>Contributors: 
      <?php
require_once("include/membersite_config.php");
if ($fgmembersite->CheckLogin()) {
    echo '<a href="logout.php">Logout</a> - <a href="edit.php">Add Deck</a> - <a href="help.php">Help</a>';
	if ($fgmembersite->User() == "n4ru")  {
		echo '<br>Admin: <a href="addu.php">Add User</a> - <a href="apps.php">Applications</a>';
	}
} else {
	echo '<a href="edit.php">Login</a> - <a href="app.php">Apply</a>';
}
?>
    <br><br>Copyright <strong>© </strong>2013 n4ru All rights reserved.<br><br>
    <img style="border:0;width:88px;height:31px"
        src="http://www.w3c.it/events/2012/html5day/html5-logo.png"
        alt="Valid HTML5!" />
    <img style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Valid CSS!" />
</p>
    
</div> 


</body>
</html>