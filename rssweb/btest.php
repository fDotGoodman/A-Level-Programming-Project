<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
 
<style type="text/css" rel="stylesheet">
body {font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; color: red;
}
main {width:700px; margin:auto; border:1px solid gray; text-align:center;min-height:800px;
}
table {width:700px; margin:auto;
}
th {background-color:orange; 
}
td {width:200px; 
}
</style>


</head>
<body>
<main>
<?php
$html = ""; /*Assigns a blank variable*/
$var_value = 'http://feeds.bbci.co.uk/news/technology/rss.xml'; /*The source for the rss data*/
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

</main>
</body>
</html>