<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$nameerr = $emailerr = $gendererr = $passworderr = $numbererr = "";
$name = $email = $gender = $password = $number="";
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){j
        $nameerr = "Please enter your name";
    }
    else{
        $name = test_input($_POST["name"]);
       }
    
   if(empty($_POST["gender"])){
        $gendererr = "Please enter your gender";
    }
    else{
        $gender = test_input($_POST["gender"]);
       }

    if(empty($_POST["email"])){
        $emailerr = "Please enter your email";
    }
    else{
        $email = test_input($_POST["email"]);
       }

    if(empty($_POST["password"])){
        $passworderr = "Please enter password";
    }
    else{
        $password = test_input($_POST["password"]);
       }
    if(empty($_POST["number"])){
        $numbererr = "Please enter phone number";
    }
    else{
        $number = test_input($_POST["number"]);
       }
    
    
}
?>


<h2> Form Validation </h2>
<p><span class="errro">* required field</span></p>
<form method = "post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
">
Name:<input type="text" name = "name">
<span class="errro">* <?php echo $nameerr;?></span><br><br>
Gender:<input type="radio" name = "gender" value = "male">Male
<input type="radio" name = "gender" value = "female">Female
<input type="radio" name = "gender" value = "other">Other
<span class="errro">* <?php echo $gendererr;?></span><br><br>
Email:<input type="text" name="email">
<span class="errro">* <?php echo $emailerr;?></span><br><br>
Password:<input type="password" name="password">
<span class="errro">* <?php echo $passworderr;?></span><br><br>
Phone Number:<input type="text" name="number">
<span class="errro">* <?php echo $numbererr;?></span><br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
echo "<h2> Your input: </h2>";
echo $name;
echo "<br>";
echo $gender;
echo "<br>";
echo $email;
echo"<br>";
echo $password;
echo"<br>";
echo $number;
?>
</body>
</html>