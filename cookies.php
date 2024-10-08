<?php
//cookies are the small files that are stored on user's computer
//they are used to store user's preferences and other information
echo "Welcome to the world of cookies<br>";
echo time();
setcookie("category","books",time()+86400,"/");
echo"The cookie is set<br>";
?>