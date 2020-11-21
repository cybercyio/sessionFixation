<?php
session_id();
session_start();
$_SESSION = array();
session_destroy();
header("Location: http://192.168.1.58/sflogin.php");
?>