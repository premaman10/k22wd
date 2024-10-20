<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    echo "Hi , " . $name;
    
}
?>

</body>
</html>