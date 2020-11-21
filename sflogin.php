<?php

$message = "";

if(isset($_REQUEST["PHPSESSID"])){
	session_id($_REQUEST["PHPSESSID"]);
	session_start();
	login();
} else {
	session_start();
	login();
} 

function login(){
	if( isset($_POST["login"]) && isset($_POST["password"])) {
		if($_POST["login"] == "hacker" && $_POST["password"] == "1234"){
			$_SESSION["loggedin"] = "LOGGEDIN";
			$_SESSION["user"] = $_POST["login"];
			header("Location: http://192.168.1.58/sfhome.php");
			exit();
		} elseif($_POST["login"] == "admin" && $_POST["password"] == "12345"){
			$_SESSION["loggedin"] = "LOGGEDIN";
			$_SESSION["user"] = $_POST["login"];
			header("Location: http://192.168.1.58/sfhome.php");
			exit();
		} else {
			$message = "Please set the <strong>correct</strong> inputs.";
		}
	}
}
?>
<html>
<head>
	<title>Session Fixation</title>
</head>
<body>
	<form action="sflogin.php" method="POST">
		<p>
			<label for="login">Login:</label>
			<br />
			<input type="text" id="login" name="login" size="20" autocomplete="on" value="hacker">
		</p> 
		<p>
			<label for="password">Password:</label>
			<br />
			<input type="password" id="password" name="password" size="20" autocomplete="off" value="1234">
		</p>
		<button type="submit" name="form" value="submit">Login</button>
	</form>
	<br />
	<?php echo "Session Cookie: PHPSESSID=" . session_id(); ?>
	<br />
	<?php echo $message; ?>
	<br />
</body>
</html>