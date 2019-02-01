<?php session_start(); error_reporting(0);
$caddressVariable1 = $_POST['rssAddress1']; $caddressVariable2 = $_POST['rssAddress2']; $caddressVariable3 = $_POST['rssAddress3']; $colorScheme = $_POST['colorScheme']; $self = $_SERVER['PHP_SELF']; $RSSVar1 = $_POST['rssEx1']; $RSSVar2 = $_POST['rssEx2']; $RSSVar3 = $_POST['rssEx3']; $RSSVar4 = $_POST['rssEx4']; $RSSVar5 = $_POST['rssEx5']; $echoEx1 = $_COOKIE['rssExtra1']; $echoEx2 = $_COOKIE['rssExtra2']; $echoEx3 = $_COOKIE['rssExtra3']; $echoEx4 = $_COOKIE['rssExtra4']; $echoEx5 = $_COOKIE['rssExtra5'];
?>
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="styleSimple.css">
</head>
<body>
<div id="container">
<header>
<a href="ctest.php"><div class="pageLinkButton"> <p>Main Page</p></div></a>
<a href="ctestOptions.php"><div class="pageLinkButton"><p>Options Page</p></div></a>
<h1 id="titlePhrase">Welcome to the fDot RSS feed viewer</h1>
<p>To use this tool, simply input the address of the RSS feed you'd like to view in one of the empty boxes below, press submit, and you're golden.</p>
</header>
<main>

<div id="colourPicker">
<h1>Frequently Asked Questions </h1>
<h3>Where do I put in my feed addresses?</h3>
<p>You put them in on the <a href="ctestOptions.php">options page</a>. Simply click the link, paste your address in one of the three boxes in the middle, and press submit.</p>
<br>
<h3>What if I have more than three feed addresses?</h3>
<p>Not to worry, below normal address entering boxes on the <a href="ctestOptions.php">options page</a>, there are five extra inputs for you to store your extra addresses.</p>
<br>
<h3>I've entered the address, but none of the feeds are being displayed. Help!</h3>
<p>Make sure that you have correctly typed in teh address, if you're unsure, just copy and paste it in.</p>
<br>
<h3>How do I move my extra feeds to be loaded?</h3>
<p>You copy them from the extra storage zone, and paste them into a main input box.</p>
<br>
<h3>How do I delete feeds?</h3>
<p>You simply type anything into the required box, hit submit, and they are now deleted.</p>
<br>
<h3>What types of RSS feed does this program accept?</h3>
<p>Currently, it only accepts RSS formatted .XML files, you cannot type in a .atom feed.</p>
<br>
<br>
<h1>Need extra help? Send me an email using the form below</h1>
<form>
Put your email address or phone number here <input type="text"><br>
Type your full name here <input type="text"><br>
Explain your issue here 
<textarea id="userFeedback"></textarea>
<br>
<input type="submit">
</form>


</div>
</main>
<footer>
<p>Here's some standard footer rubbins, not that you'll be reading any of it.</p>
</footer>
</div>
</body>
</html>