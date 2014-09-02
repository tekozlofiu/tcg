<!DOCTYPE html> 
<html><head>
<?PHP
require_once("include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<div id="fixed-div"><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="UM4UWJZR6VSC4">
<input type="image" src="http://ygoplaybook.com/instant.png" border="0" name="submit" height="150px" width="150px">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>

<link href="css/font.css" rel="stylesheet" type="text/css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>YuGiOh! Playbook! - Editor</title>

<META NAME="description" CONTENT="A database website that lets you browse Decks, combos, and plays, for YuGiOh TCG.">
<META NAME="keywords" CONTENT="YuGiOh, TCG, Playbook, Trading Cards, Decklist, card games">
<META NAME="Content-language" CONTENT="en">
<META NAME="robots" CONTENT="all, index, follow">

<link href="css/basic.css" rel="stylesheet" type="text/css">
<link href="macro.png" rel="shortcut icon">
    
</head>
<body><div id=content>
    <p align="center"><a href="index.php"><img src="logo.png"></a>    
    <p>&nbsp;
    <p align="center"><img src="6.png" width="344" height="108">
    <p align="left">&nbsp;
    <p align="left">Decks can be edited by visiting their page and hitting the &quot;[EDIT]&quot; link.
    <p align="left">&nbsp;
    <p align="left"><strong>All decks must be 100% TCG legal. The only exceptions are extra, side, and tech cards, which you can add ONLY if they already have a release date in the TCG.</strong>
    <p align="left">&nbsp;
    <p align="left">To add a deck, visit the main page and hit &quot;Add Deck&quot;.\ Keep in mind that decks should only be added if they provide great consistency and have seen a decent amount of play or demonstrate the potential to compete with meta.
    <p align="left">&nbsp;
    <p align="left">Before moving on, leave your deck bias or entertainment writing off the site. We aim to inform people who already know what they want to research or play. We don't need to &quot;draw them in&quot; with exciting buzzwords or hyperboles. Do not use any of it. Keep it simple and straight to the information.
    <p align="left">&nbsp;
    <p align="left"><strong>Editing and Adding decks:</strong><br>
    
    <p>&nbsp;
    <p align="center"><img src="1.png" width="321" height="42">
<p>&nbsp;
    <p align="left">1. The first 4 boxes should be self-explanatory and are labeled. The first box should have the name of the current deck (ie: Merlanteans), while the second is the &quot;core&quot; the deck (ie: Mermails). If it's a variant of a certain deck, it's origin should be in this box. If it's the &quot;core&quot; that you're adding, this box should be the same as the first. The third box should have a link to an image of the card in the fourth box, preferably from the wikia, while the fouth and final box should be a card that well represents the deck as a whole.
<p align="left">&nbsp;
    <p align="center"><img src="2.png" width="383" height="411" align="middle">
<p align="left">&nbsp;
    <p align="left">2. The following two boxes use a WYSIWYG editor. For the first, include a list of cards that are most important to the deck. Please do not use <strong>any</strong> formatting in these sections, simply enter the cards seperated by newlines. Do not label them by sections (ie: Monsters, Traps, Spells), but please do seperate them without labels. Only include each card once (<em>do not mention counts</em>), and be as thorough as possible, without including deck staples. This is because <u>we try not to encourage netdecking, and card counts are heavily personal choices</u>. The next box should contain a list of traits that describe the functions of the deck, it's strengths and it's weaknesses. Keep the second box to 5 or 6 different traits, and the first box below 20 cards. 
    <p align="left"><strong>Review other <em>published</em> decks for examples!</strong>
<p align="left">&nbsp;
    <p align="center"><img src="4.png" width="352" height="152">
<p align="left">&nbsp;
    <p align="left">3. This box should contain a short but thorough description of the deck, summing up the previous box. Be as general and unbiased as possible here. Do not mention specific card names unless they are a constant presence in the deck.
<p align="left">&nbsp;
    <p align="center"><img src="3.png" width="383" height="203">
    <p align="left">&nbsp;
    <p align="left">4. The next section is one of the most important and should be extremely thorough. <br>
    
    <p align="left">  Follow the theme used by previous deck pages, which includes the following;
    <p align="left">- When first mentioning a card, make sure to <strong>bold</strong> it <strong>and use it's full name</strong>. Do not bold it again while describing the same play.
    <p align="left">- When mentioning a play, be sure to include images of the cards from wikia, along with inserting a plus or arrow as necessary. These images are located at &quot;plus.png&quot; or &quot;arrow.png&quot;.
<p align="left">- You do not need to left-align the text or resize the images. This is done automatically. All images resize to 100x145.
<p align="left">If you need to use images that aren't wikia cards or &quot;plus.png&quot;/&quot;arrow.png&quot;, let me know and I'll decide if it should be added to the site.
<p align="left">- Follow the existing format for plays; Card Image, then Arrow or Plus, then another Card Image. Newline, then explain the play. Some plays are very general or nonspecific and don't need images linked. Use proper judgement.
<p align="left">- <strong>Do not</strong> include any links.
<p align="left">- <strong>Do not</strong> list single card plays unless only 1 card is actually required to summon or react to <em>multiple</em> situations. &quot;Banish cards to summon Chaos Sorcerer and get rid of any threat.&quot; is <strong>not </strong>an example of a good play. It is a play, but is obvious enough to not have to be included. &quot;Summon Chaos Sorcerer, banish, then summon Birdman by swapping Chaos Sorcerer and then summon Chaos Sorcerer again to attack.&quot; is a play, but is <strong>NOT </strong>a one-card play, and should list both cards when describing the play. Exceptions to this include cards being placed in the &quot;<strong>Techs and Siding</strong>&quot; section.
<p align="left">- <strong>Do not</strong> list generic plays that work in any deck. &quot;Pot of Duality to search.&quot; is an example of a generic play that should not be listed. You can mention cards that help with general consistency or stalling at the bottom of the plays section, but do not give each card it's own play.
<p align="left">- Avoid phrases like &quot;OTK&quot; or &quot;spam&quot; when referring to field swarming. It is called field swarming, please refer to it as such.
<p align="left">- Unless it has a very specific purpose, do not add &quot;Tour Guide to the Underworld&quot; into a deck or tech/side. A good example of proper usage of Tour Guide in a deck is Chaos Control or a card utilizing Dark Armed Dragon, where Tour Guide going into a Leviair to Special Summon a specific card (ie: Sacred Crane, Necroface), to get that card's effect or to continue another specific play.
<p align="left">&nbsp;
    <p align="center"><img src="5.png" width="383" height="223">
    <p align="left">&nbsp;
    <p align="left">5. Finally, the last box should include tech cards and siding options. Be thorough and include any possible techs or sides you can think of or find. We aim to be informative through text and descriptions, not lists. Only the traits and card utilized sections should use lists. Do not split Techs and Siding, as some people like to main cards others tech or side. Remember, we do not like to promote netdecking, but do like diversity. Use a the following format when creating the Techs and Sides section;
  <p align="left">&nbsp;
    <p align="left"><font size=24px><strong>Techs and Siding:</strong></font>
  <p align="left">&nbsp;
    <p align="left"><em><strong>Spell Card A</strong></em><strong> - </strong>Short but thorough description.
    <p align="left"><em><strong>Monster Card A</strong></em><strong> - </strong>Short but thorough description.
    <p align="left"><em><strong>etc</strong></em>
    <p align="left">&nbsp;
    <p align="left">Newly added decks must first be approved before being displayed in search results publicly, but you can find them by searching for them. They will be labeled as &quot;(Archived)&quot; prior to approval, but can still be viewed and edited by all contributors. Those found consistently formatting incorrectly will have contributor status revoked after being warned. <strong>Vandals will be immediately IP banned.</strong> <strong>If you find a page defaced, DO NOT EDIT IT.</strong> <strong>PM me and I will take care of it.</strong>
    <p align="left">&nbsp;
    <p align="left">If you have a layout or general site suggestion, don't hesitate to PM me. I realize that the guidelines above may seem extremely strict or specific, but I feel it is necessary for a fluent and consistent browsing experience.
    <p align="left"><br>
    
</div>
</body>
</html>