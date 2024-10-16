<?php 
ini_set("SMTP", "smtp.gmail.com");
ini_set("smtp_port", "587");
$check=mail("amanprem374@gmail.com","testing mail","this is test mail", 
"From:amanprem374@gmail.com"); 
if($check) 
{ 
    echo "email sent"; 
} 
else 
{ 
echo "email not sent"; 
} 
?>