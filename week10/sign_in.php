<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <title>
        Sign in
    </title>
    <link rel="stylesheet" href="css/signin.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<form action="auth.php" method="POST">
    <?php
    if (isset($_SESSION['msg'])) {
        echo '<p style="margin: 0 0 20px">' . $_SESSION['msg'] . '</p>';
        unset($_SESSION['msg']);
    }
    ?>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Submit</button>

</form>
</body>
</html>