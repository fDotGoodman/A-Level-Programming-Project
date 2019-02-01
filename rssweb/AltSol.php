<?php session_start(); /*error_reporting(0);*/; $caddressVariable1 = $_COOKIE['feedAddress1']; 
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
<?php
$html1 = "";

$xml1 = simplexml_load_file($caddressVariable1);
for($i = 0; $i < 10; $i++){
	$title1 = $xml1->channel->item[$i]->title;
	$link1 = $xml1->channel->item[$i]->link;
	$description1 = $xml1->channel->item[$i]->description;
	$pubDate1 = $xml1 ->channel->item[$i]->pubDate;
 
	
    $html1 .= "<a href='$link1'><h3>$title1</h3></a>";
	$html1 .= "$description1<br>";
	$html1 .= "<p id='dennis'>$pubDate1</p>";
}
echo $html1;


?>


</div>

</main>
<footer>
<p>Here's some standard footer rubbins, not that you'll be reading any of it.</p>
</footer>
</div>
<?php echo $caddressVariable1;?>
</body>
</html>