<?php
include ('db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>University</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<header>
    <div class="wrapper">
    <h1><a href="index.php">International University Bugojno</a></h1>
    <nav>
        <p>Add a new student</p>
    </nav>
    </div>
</header>
<main class="wrapper">
    <form action="submit.php" method="post">
        <label for="name">First Name</label>
        <input type="text" name="name" id="name" required>
        <label for="surname">Last Name</label>
        <input type="text" name="surname" id="surname" required>
        <label for="dob">Date Of Birth</label>
        <input type="date" name="dob" id="dob" required>
        <button type="submit">Create!</button>
    </form>
</main>
<footer>
    <div class="wrapper">
        &copy; Copyright by Amel Helez
    </div>
</footer>
</body>
</html>
