<?php error_reporting(0); /*To hide errors*/ $address = $_POST['feedAddress']; $self = $_SERVER['PHP_SELF']; /*This saves the parameter as a variable */

if ($address !=null) { /*Run if the user has entered a parameter*/
	setcookie("rssAddress1", $address, time()+36000); /*Setting the cookie*/
    header("Location:showCookies.php"); /*Once set, go to showCookies.php */
    exit();
    }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Setting Cookies</title>
</head>

<body>
<form action="<?php echo($self); ?>" method="post" class="rssDisplayFeed">  <!-- The normal form -->
Address: <input type="text" name="feedAddress"/>
<input type="submit" name="rssSub1" value="Submit">
</form>
</body>
</html>
