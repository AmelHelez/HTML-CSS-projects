<?php
include ('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FC Bayern Munich</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<header>
    <div class="wrapper">
        <h1><a href="index.php"><img src="headerLogo.jpg" alt="bayern">FC Bayern München</a></h1>
        <nav>
            <ul>
                <li><a href="index.php">Homepage</a></li>
                <li><a href="list.php">List</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="clear"></div>
<main class="wrapper">
    <form method="post" action="submit.php">
        <label for="name">First Name</label>
        <input type="text" id="name" name="name" required>
        <label for="surname">Last Name</label>
        <input type="text" id="surname" name="surname" required>
        <label for="dob">Date Of Birth</label>
        <input type="date" id="dob" name="dob" required>
        <button type="submit">Create!</button>
    </form>
</main>
<footer>
    <div class="wrapper">
        Copyright by Amel Helez
    </div>
</footer>
</body>
</html>
