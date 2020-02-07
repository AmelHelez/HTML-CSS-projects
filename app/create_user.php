<?php
include('includes/db.php');
?>
<!doctype html>
<html>
<head>
    <title>
        Index
    </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="wrapper">
        <h1>Blog title</h1>
        <nav>
            <ul>
                <li><a href="">Homepage</a></li>
                <li><a href="">Categories</a></li>
                <li><a href="sign_in.php">Sign in</a></li>
            </ul>
        </nav>
    </div>
</header>
<main class="wrapper">
    <form method="post" action="save-user.php">
        <label for="fname">First name</label>
        <input type="text" name="fname" id="fname" required>
        <label for="lname">Last name</label>
        <input type="text" name="lname" id="lname" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <button type="submit">Submit</button>
    </form>
</main>
<footer>
    <div class="wrapper">
        Copyright
    </div>
</footer>
</body>
</html>