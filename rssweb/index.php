<!DOCTYPE html>
<html>
<head>
 
<style type="text/css" rel="stylesheet">
body {font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;
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

<form action="index.php" method="post">
Address: <input type="text" name="varname" value="" /><br>
<input type="submit">
</form>

<?php
$html = "";
$var_value = $_POST['varname'];
$xml = simplexml_load_file($var_value);
for($i = 0; $i < 10; $i++){
	$title = $xml->channel->item[$i]->title;
	$link = $xml->channel->item[$i]->link;
	$description = $xml->channel->item[$i]->description;
 
      
	$html .= "<a href='$link'><h3>$title</h3></a>";
	$html .= "$description";
	$html .= "<br />$pubDate<hr />";
}
echo $html;
?>

</main>
</body>
</html>