<?php
include('includes/db.php');
?>
<!doctype html>
<html>
<head>
    <title>Sign in</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="wrapper"></div>
    <h1>Bank Account</h1>
    <nav>
        <ul>
            <li><a href="">Homepage</a></li>
            <li><a href="">Categories</a></li>
            <li><a href="sign_in.php">Sign in</a></li>
        </ul>
    </nav>
    </div>
</header>
<main>
    <form method="post" action="auth.php">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Sign in</button>
    </form>
</main>
<footer>
    <div class="wrapper">
        Copyright
    </div>
</footer>
</body>
</html>
    </nav>
</header>
</body>
</html>
