<?php error_reporting(0); $address = $_COOKIE['rssAddress1']; /*Load the cookie, and set as a variable*/
?>
<!doctype html>
<html>
<head>
<style>

</style>
<meta charset="utf-8">
<title>Get Cookie Data</title>
</head>



<body>
<h1>The address you've entered is: <?php echo($address); ?>.</h1> <!-- Print the variable -->
<div>
<?php
$html = ""; /*Assigns a blank variable*/
$var_value = $address; /*The source for the rss data*/
$xml = simplexml_load_file($var_value); /*Loading the rss address to be manipulated*/
for($i = 0; $i < 10; $i++){  /*Starts a for loop for displaying a number of items*/
	$title = $xml->channel->item[$i]->title; /*Assigns the title data to the $title variable*/
	$link = $xml->channel->item[$i]->link; /*Assigns the link data to the $link variable*/
	$description = $xml->channel->item[$i]->description; /*Assigns the description data to the description variable*/
 
 
    $html .= "<a href='$link'><h3>$title</h3></a>";
	$html .= "$description<br>";
	$html .= "<p id='pubDate'>$pubDate</p>";
}
echo $html; /*This prints out the XML data on the page*/
?>
</div>
</body>
</html>