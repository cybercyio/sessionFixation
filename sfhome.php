<?php

$message = "";
$message1 = "";

session_id();
session_start();

if(isset($_SESSION["loggedin"])) {
	$message = "User name: " . htmlentities($_SESSION["user"], ENT_QUOTES, "UTF-8");
	$message1 = "User Seesion ID: " . session_id();
} else {
	header("Location: http://192.168.1.58/sflogin.php");
	exit();
}
?>

<html>
<head>
	<title>Auth Page</title>
</head>
<body>
	<br />
	<br />
	<?php echo $message;?>
	<br />
	<?php echo $message1; ?>
	<br />
	<br />
	<a href="http://192.168.1.58/sflogout.php">Logout?</a>
	<br />
	<br />
</body>
</html>