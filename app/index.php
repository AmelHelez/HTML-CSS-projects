<?php
include('includes/db.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>App</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="wrapper">
        <h1>Piggy Bank</h1>
        <nav>
            <ul>
                <li><a href="">Homepage</a></li>
                <li><a href="">Categories</a></li>
                <?php if (isset($_SESSION['auth'])): ?>
                <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                <li><a href="sign_in.php">Sign in</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
    <?php echo '<br>' ?>
</header>
<main class="wrapper">
    <?php if (isset($_SESSION['name'])): ?>
    <h1>Hello, <?php echo $_SESSION['name'] ?></h1>
    <?php endif; ?>
    <?php
    $query = mysqli_query($conn, 'select * from bank account where account_id = 3;');

    while($row = mysqli_fetch_assoc($query)) { ?>
        <a href="read-article.php?id=<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a>

        <?php } ?>

</main>
<footer>
    <div class="wrapper">
     &copy; Copyright <?php echo date('Y'); ?>
    </div>
</footer>
</body>
</html>