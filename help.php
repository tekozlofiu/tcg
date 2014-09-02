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
<script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>

<link href="css/basic.css" rel="stylesheet" type="text/css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>YuGiOh! Playbook! - Editor</title>

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
    <a href="index.php"><img src="logo.png" alt="YuGiOh Playbook" class="centerimage"></a> 
    <br>&nbsp;
    <img src="6.png" alt="" width="344" height="108" class="centerimage">
    <br>&nbsp;
    <br>Decks can be edited by visiting their page and hitting the &quot;[EDIT]&quot; link.
    <br>&nbsp;
    <br><strong>All decks must be 100% TCG legal. The only exceptions are extra, side, and tech cards, which you can add ONLY if they already have a release date in the TCG.</strong>
    <br>&nbsp;
    <br>
    To add a deck, visit the main page and hit &quot;Add Deck&quot;.\ Keep in mind that decks should only be added if they provide great consistency and have seen a decent amount of play or demonstrate the potential to compete with meta.
    <em>Remember, we are looking to add only the most essential cards to the deck, and only the techs/sides that see very frequent play in these decks. If you aren't sure, do not add it.</em><br>&nbsp;
    <br>Before moving on, leave your deck bias or entertainment writing off the site. We aim to inform people who already know what they want to research or play. We don't need to &quot;draw them in&quot; with exciting buzzwords or hyperboles. Do not use any of it. Keep it simple and straight to the information.
    <br>&nbsp;
    <br><strong>Editing and Adding decks:</strong><br>
    
    <p>&nbsp;
    <br><img src="1.png" alt="" width="321" height="42" class="centerimage">
<p>&nbsp;
    <br>1. The first 4 boxes should be self-explanatory and are labeled. The first box should have the name of the current deck (ie: Merlanteans), while the second is the &quot;core&quot; the deck (ie: Mermails). If it's a variant of a certain deck, it's origin should be in this box. If it's the &quot;core&quot; that you're adding, this box should be the same as the first. The third box should have a link to an image of the card in the fourth box, preferably from the wikia, while the fouth and final box should be a card that well represents the deck as a whole.
<br>&nbsp;
    <br><img src="2.png" alt="" width="383" height="411" class="centerimage">
<br>&nbsp;
    <br>2. The following two boxes use a WYSIWYG editor. For the first, include a list of cards that are most important to the deck. Please do not use <strong>any</strong> formatting in these sections, simply enter the cards seperated by newlines. Do not label them by sections (ie: Monsters, Traps, Spells), but please do seperate them without labels. Only include each card once (<em>do not mention counts</em>), and be as thorough as possible, without including deck staples. This is because <u>we try not to encourage netdecking, and card counts are heavily personal choices</u>. The next box should contain a list of traits that describe the functions of the deck, it's strengths and it's weaknesses. Keep the second box to 5 or 6 different traits, and the first box below 20 cards. 
    <br><strong>Review other <em>published</em> decks for examples!</strong>
<br>&nbsp;
    <br><img src="4.png" alt="" width="352" height="152" class="centerimage">
<br>&nbsp;
    <br>3. This box should contain a short but thorough description of the deck, summing up the previous box. Be as general and unbiased as possible here. Do not mention specific card names unless they are a constant presence in the deck.
<br>&nbsp;
    <br><img src="3.png" alt="" width="383" height="203" class="centerimage">
    <br>&nbsp;
    <br>4. The next section is one of the most important and should be extremely thorough. <br>
    
    <br>  Follow the theme used by previous deck pages, which includes the following;
    <br>- When first mentioning a card, make sure to <strong>bold</strong> it <strong>and use it's full name</strong>. Do not bold it again while describing the same play.
    <br>- When mentioning a play, be sure to include images of the cards from wikia, along with inserting a plus or arrow as necessary. These images are located at &quot;plus.png&quot; or &quot;arrow.png&quot;.
<br>- You do not need to left-align the text or resize the images. This is done automatically. All images resize to 100x145.
<br>If you need to use images that aren't wikia cards or &quot;plus.png&quot;/&quot;arrow.png&quot;, let me know and I'll decide if it should be added to the site.
<br>- Follow the existing format for plays; Card Image, then Arrow or Plus, then another Card Image. Newline, then explain the play. Some plays are very general or nonspecific and don't need images linked. Use proper judgement.
<br>- <strong>Do not</strong> include any links.
<br>- <strong>Do not</strong> list single card plays unless only 1 card is actually required to summon or react to <em>multiple</em> situations. &quot;Banish cards to summon Chaos Sorcerer and get rid of any threat.&quot; is <strong>not </strong>an example of a good play. It is a play, but is obvious enough to not have to be included. &quot;Summon Chaos Sorcerer, banish, then summon Birdman by swapping Chaos Sorcerer and then summon Chaos Sorcerer again to attack.&quot; is a play, but is <strong>NOT </strong>a one-card play, and should list both cards when describing the play. Exceptions to this include cards being placed in the &quot;<strong>Techs and Siding</strong>&quot; section.
<br>- <strong>Do not</strong> list generic plays that work in any deck. &quot;Pot of Duality to search.&quot; is an example of a generic play that should not be listed. You can mention cards that help with general consistency or stalling at the bottom of the plays section, but do not give each card it's own play.
<br>- Avoid phrases like &quot;OTK&quot; or &quot;spam&quot; when referring to field swarming. It is called field swarming, please refer to it as such.
<br>- Unless it has a very specific purpose, do not add &quot;Tour Guide to the Underworld&quot; into a deck or tech/side. A good example of proper usage of Tour Guide in a deck is Chaos Control or a card utilizing Dark Armed Dragon, where Tour Guide going into a Leviair to Special Summon a specific card (ie: Sacred Crane, Necroface), to get that card's effect or to continue another specific play.
<br>&nbsp;
    <br><img src="5.png" width="383" height="223" alt="">
    <br>&nbsp;
    <br>5. Finally, the last box should include tech cards and siding options. Be thorough and include any possible techs or sides you can think of or find. We aim to be informative through text and descriptions, not lists. Only the traits and card utilized sections should use lists. Do not split Techs and Siding, as some people like to main cards others tech or side. Remember, we do not like to promote netdecking, but do like diversity. Use a the following format when creating the Techs and Sides section;
  <br>&nbsp;
    <br><strong>Techs and Siding:</strong>
  <br>&nbsp;
    <br><em><strong>Spell Card A</strong></em><strong> - </strong>Short but thorough description.
    <br><em><strong>Monster Card A</strong></em><strong> - </strong>Short but thorough description.
    <br><em><strong>etc</strong></em>
    <br>&nbsp;
    <br>Newly added decks must first be approved before being displayed in search results publicly, but you can find them by searching for them. They will be labeled as &quot;(Archived)&quot; prior to approval, but can still be viewed and edited by all contributors. Those found consistently formatting incorrectly will have contributor status revoked after being warned. <strong>Vandals will be immediately IP banned.</strong> <strong>If you find a page defaced, DO NOT EDIT IT.</strong> <strong>PM me and I will take care of it.</strong>
    <br>&nbsp;
    <br>If you have a layout or general site suggestion, don't hesitate to PM me. I realize that the guidelines above may seem extremely strict or specific, but I feel it is necessary for a fluent and consistent browsing experience.
    <br><br>
</div>
</body>
</html>