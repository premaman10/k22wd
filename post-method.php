<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta>
    <title></title>
    <style>
    
    </style>
    <title>Example of PHP GET</title>
</head>
    
    <body>
<?php
if(isset($_POST["name"])){
    echo "<p>Hi, ".$_POST["name"]."</p>";

}
?>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
    <label for="inputName">Name:</label>
    <input type="text" id="inputName" name="name">
    <input type="submit" value="Submit">
</form>
    </body>
</html>