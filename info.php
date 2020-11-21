<?php

include("security.php");
include("security_level_check.php");
include("selections.php");
/*

bWAPP, or a buggy web application, is a free and open source deliberately insecure web application.
It helps security enthusiasts, developers and students to discover and to prevent web vulnerabilities.
bWAPP covers all major known web vulnerabilities, including all risks from the OWASP Top 10 project!
It is for security-testing and educational purposes only.

Enjoy!

Malik Mesellem
Twitter: @MME_IT

bWAPP is licensed under a Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License (http://creativecommons.org/licenses/by-nc-nd/4.0/). Copyright © 2014 MME BVBA. All rights reserved.

*/
// To print the path where PHP save the user sessions.
// $path = session_save_path();
// echo $path;

echo ucwords($_SESSION["login"]);
echo ucwords($_SESSION["admin"]);
echo ucwords($_SESSION["token"]);
echo ucwords($_SESSION["amount"]);


//phpinfo();


?>