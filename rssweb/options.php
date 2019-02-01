<?php error_reporting(0); $caddressVariable1 = $_POST['rssAddress1']; $self = $_SERVER['PHP_SELF'];
if ($caddressVariable1 != null) { /*A function that sets the cookies */
setcookie("feedAddress1", $caddressVariable1, time()+36000);
header("Location:index.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
 
<link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
<div id="container">
<header>
<a href="index.php"><div class="pageLinkButton"> <p>Main Screen</p></div></a>
<a href=""><div class="pageLinkButton"><p>TEXT PLACEHOLDER</p></div></a>
<h1 id="titlePhrase">TEXT PLACEHOLDER</h1> <!-- The linking section of the header -->
<p>TEXT PLACEHOLDER</p>
</header>
<main>
<div class="rssData">
<form action="<?php echo($self); ?>" method="post" class="rssDisplayFeed"> 
Address: <input type="text" name="rssAddress1"/> <!-- A form that inputs the feed addresses -->
<input type="submit" name="rssSub1" value="Submit">
</form>


</div>

</main>
<footer>
<p>TEXT PLACEHOLDER</p>
</footer>
</div>
</body>
</html>