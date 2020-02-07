<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    exit('You are not authenticated');
}
?>
<!doctype html>
<html>
<head>
    <title>
        MySQL
    </title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<?php
include('includes/db.php');
?>
<?php include('includes/header.php') ?>
<main class="wrapper">

    <form action="insert.php" method="POST">
        <label for="first_name">First name</label>
        <input type="text" name="first_name" id="first_name" required placeholder="Please enter your first name">

        <label for="last_name">Last name</label>
        <input type="text" name="last_name" id="last_name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Submit</button>


    </form>
</main>
<?php include('includes/footer.php') ?>
</body>
</html>