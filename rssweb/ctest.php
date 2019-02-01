<?php session_start(); error_reporting(0); 
$caddressVariable1 = $_COOKIE['feedAddress1']; $caddressVariable2 = $_COOKIE['feedAddress2']; $caddressVariable3 = $_COOKIE['feedAddress3']; $colourScheme = $_COOKIE['colourSchemeValue'];
?> <!-- Preliminary .php code that loads cookies -->

<!DOCTYPE html>
<html>
<head>
 
<link type="text/css" rel="stylesheet" href="<?php echo $colourScheme; ?>"> <!-- Links to the external stylesheet(s) -->

</head>
<body>
<div id="container">
<header>
<a href="ctestOptions.php"><div class="pageLinkButton"> <p>Options Page</p></div></a> <!-- The links to other pages -->
<a href="ctestHelp.php"><div class="pageLinkButton"><p>Help Page</p></div></a> <!-- The links to other pages -->
<h1 id="titlePhrase">Welcome to the fDot RSS feed viewer</h1>
<p>To use this tool, simply input the address of the RSS feed you'd like to view in one of the empty boxes below, press submit, and you're golden.</p>
</header>
<main>

<div class="rssData">
<?php /*The function that converts .xml data to .html tags*/
$html1 = "";
$addressVariable1 = $_POST['rssAddress1'];
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

<div class="rssData">

<?php /*The function that converts .xml data to .html tags*/
$html2 = "";
$addressVariable2 = $_POST['rssAddress2'];
$xml2 = simplexml_load_file($caddressVariable2);
for($i = 0; $i < 10; $i++){
	$title2 = $xml2->channel->item[$i]->title;
	$link2 = $xml2->channel->item[$i]->link;
	$description2 = $xml2->channel->item[$i]->description;
	$pubDate2 = $xml2 ->channel->item[$i]->pubDate;
    $html2 .= "<a href='$link2'><h3>$title2</h3></a>";
	$html2 .= "$description2<br>";
	$html2 .= "<p id='dennis'>$pubDate2</p>";
}
echo $html2;
?>

</div>



<div class="rssData">
<?php

$html3 = "";
$addressVariable3 = $_POST['rssAddress3'];
$xml3 = simplexml_load_file($caddressVariable3);
for($i = 0; $i < 10; $i++){
	$title3 = $xml3->channel->item[$i]->title;
	$link3 = $xml3->channel->item[$i]->link;
	$description3 = $xml3->channel->item[$i]->description;
	$pubDate3 = $xml3 ->channel->item[$i]->pubDate;
    $html3 .= "<a href='$link3'><h3>$title3</h3></a>";
	$html3 .= "$description3<br>";
	$html3 .= "<p id='dennis'>$pubDate3</p>";
}
echo $html3;
?>

</div>

</main>
<footer>
<p>Here's some standard footer rubbish, not that you'll be reading any of it.</p>
</footer>
</div>
<?php echo $caddressVariable1;  echo $caddressVariable2; echo $caddressVariable3; ?>
</body>
</html>