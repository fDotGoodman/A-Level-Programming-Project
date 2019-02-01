<?php $caddressVariable1 = $_POST['rssAddress1']; $self = $_SERVER['PHP_SELF'];
if ($caddressVariable1 != null) { 
setcookie("feedAddress1", $caddressVariable1, time()+36000);
header("Location:AltSol.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
 
<link type="text/css" rel="stylesheet" href="AltSolStyle.css">
</head>
<body>
<div id="container">
<header>
<a href="options.html"><div class="pageLinkButton"> <p>( ͡° ͜ʖ ͡°)</p></div></a>
<a href="help.html"><div class="pageLinkButton"><p>( ͡° ͜ʖ ͡°)</p></div></a>
<h1 id="titlePhrase">Welcome to the fDot RSS feed viewer</h1>
<p>To use this tool, simply input the address of the RSS feed you'd like to view in the empty boxes below, press submit, and you're golden.</p>
</header>
<main>
<div class="rssData">
<form action="<?php echo($self); ?>" method="post" class="rssDisplayFeed"> 
Address: <input type="text" name="rssAddress1"/>
<input type="submit" name="rssSub1" value="Submit">
</form>


</div>

</main>
<footer>
<p>Here's some standard footer rubbins, not that you'll be reading any of it.</p>
</footer>
</div>
</body>
</html>