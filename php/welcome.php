<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome!</title>
</head>
<body>
<?php
$name = $_POST['name'];
$email = $_POST['email'];

echo "Welcome $name!<br>";
echo "Your email is $email<br>";
?>
</body>
</html>