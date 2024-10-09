<?php
//starting a session
session_start();
//stroing a session
$_SESSION["username"]="John";
$_SESSION["category"]="Book";
//accessing session data
echo $_SESSION["username"];
echo $_SESSION["category"];
echo"We have saved your session";
//unseting the session
// session_unset();
// session_destroy();
// echo"<br> you hvae been logged out";
?>