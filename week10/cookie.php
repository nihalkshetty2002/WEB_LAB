<?php
// date_default_timezone_set('Asia/Kolkata'); 
if (isset($_COOKIE['lastVisit'])) {
	$lastVisit = "<p>Your last visit was on " . $_COOKIE['lastVisit'];
} else {
	$lastVisit = "<p>This is your first visit!</p>";
}
setcookie("lastVisit", date("F j, Y, g:i:s A"), time() + 60 * 60 * 24 * 60);
?>
<!DOCTYPE html>
<html>

<head>
	<title>Set Coockie</title>
</head>

<body>
	<?php echo $lastVisit; ?>
</body>

</html>