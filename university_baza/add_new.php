<?php
include('db.php');
?>

<!doctype html>
<html>
<head>
    <title>
        Add a new student
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="wrapper">
        <nav>
            <h1 title="SSST Logo"><a href="index.php"><img src="download.jpg" alt="university_logo"></a></h1>
            <p>Add a new student</p>
        </nav>
    </div>
    <div style="clear: both"></div>
</header>
<main class="wrapper">
    <form method="post" action="save.php">
        <label for="name">First Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>
        <label for="surname">Last Name</label>
        <input type="text" name="surname" id="surname" required>
        <label for="dob">Date Of Birth</label>
        <input type="date" name="dob" id="dob" required>
        <button type="submit">Create student!</button>
    </form>
</main>
<div style="margin-top: 195px"></div>
<?php include('footer.php'); ?>
</body>
</html>
