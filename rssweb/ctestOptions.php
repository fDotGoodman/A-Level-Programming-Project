<?php session_start(); error_reporting(0);
$caddressVariable1 = $_POST['rssAddress1']; $caddressVariable2 = $_POST['rssAddress2']; $caddressVariable3 = $_POST['rssAddress3']; $colorScheme = $_POST['colorScheme']; $self = $_SERVER['PHP_SELF']; $RSSVar1 = $_POST['rssEx1']; $RSSVar2 = $_POST['rssEx2']; $RSSVar3 = $_POST['rssEx3']; $RSSVar4 = $_POST['rssEx4']; $RSSVar5 = $_POST['rssEx5']; $echoEx1 = $_COOKIE['rssExtra1']; $echoEx2 = $_COOKIE['rssExtra2']; $echoEx3 = $_COOKIE['rssExtra3']; $echoEx4 = $_COOKIE['rssExtra4']; $echoEx5 = $_COOKIE['rssExtra5'];
if (($caddressVariable1 != null)) {
	setcookie("feedAddress1", $caddressVariable1, time()+36000);
    header("Location:ctest.php");
    exit();
}
if (($caddressVariable2 != null)) {
    setcookie("feedAddress2", $caddressVariable2, time()+36000);
    header("Location:ctest.php");
    exit();
}
if (($caddressVariable3 != null)) {
    setcookie("feedAddress3", $caddressVariable3, time()+36000);
    header("Location:ctest.php");
    exit();
}
if (($RSSVar1 != null)) {
    setcookie("rssExtra1", $RSSVar1, time()+36000);
    header("Location:ctestOptions.php");
    exit();
}
if (($RSSVar2 != null)) {
    setcookie("rssExtra2", $RSSVar2, time()+36000);
    header("Location:ctestOptions.php");
    exit();
}
if (($RSSVar3 != null)) {
    setcookie("rssExtra3", $RSSVar3, time()+36000);
    header("Location:ctestOptions.php");
    exit();
}
if (($RSSVar4 != null)) {
    setcookie("rssExtra4", $RSSVar4, time()+36000);
    header("Location:ctestOptions.php");
    exit();
}
if (($RSSVar5 != null)) {
    setcookie("rssExtra5", $RSSVar5, time()+36000);
    header("Location:ctestOptions.php");
    exit();
}
if (($colorScheme != null)) {
	setcookie("colourSchemeValue",$colorScheme, time()+36000);
	header("Location:ctest.php");
	exit();
} else {
	setcookie("colourSchemeValue","styleSimple.css", time()+36000);
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
<link type="text/css" rel="stylesheet" href="styleSimple.css">
</head>
<body>
<div id="container">
<header>
<a href="ctest.php"><div class="pageLinkButton"> <p>Main Page</p></div></a>
<a href="ctestHelp.php"><div class="pageLinkButton"><p>Help Page</p></div></a>
<h1 id="titlePhrase">Welcome to the fDot RSS feed viewer</h1>
<p>To use this tool, simply input the address of the RSS feed you'd like to view in one of the empty boxes below, press submit, and you're golden.</p>
</header>
<main>



<div class="feedInput">
<form class="rssDisplayFeed" method="post">
Address: <input type="text" name="rssAddress1"/>
<input type="submit" name="rssSub1" value="Submit">
</form>
</div>



<div class="feedInput">
<form class="rssDisplayFeed" method="post">
Address: <input type="text" name="rssAddress2"/>
<input type="submit" name="rssSub2" value="Submit">
</form>
</div>



<div class="feedInput">
<form class="rssDisplayFeed" method="post">
Address: <input type="text" name="rssAddress3"/>
<input type="submit" name="rssSub3" value="Submit">
</form>
</div>


<div id="colourPicker">
<form method="post">
Pick your colour scheme
<input type="radio" name="colorScheme" value="styleSimple.css">Simple
<input type="radio" name="colorScheme" value="styleHC.css">High Contrast
<input type="radio" name="colorScheme" value="styleNight.css">Night
<input type="submit" value="Submit">
</form>


<form method="post">

Address: <input type="text" name="rssEx1"/> <br>
Address: <input type="text" name="rssEx2"/> <br>
Address: <input type="text" name="rssEx3"/> <br>
Address: <input type="text" name="rssEx4"/> <br>
Address: <input type="text" name="rssEx5"/> <br>
<input type="submit" name="rssSub3" value="Submit">
</form>
<h1>Extra RSS addresses</h1>
<ul>
<li><?php echo $echoEx1; ?></li>
<li><?php echo $echoEx2; ?></li>
<li><?php echo $echoEx3; ?></li>
<li><?php echo $echoEx4; ?></li>
<li><?php echo $echoEx5; ?></li>
</ul>


</div>
</main>
<footer>
<p>Here's some standard footer rubbins, not that you'll be reading any of it.</p>
</footer>
</div>
</body>
</html>