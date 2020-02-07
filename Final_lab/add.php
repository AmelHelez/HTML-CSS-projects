<?php
include('db.php');
?>
<!doctype html>
<html>
<head>
    <title>Add new</title>
</head>
<body>
<header>
    <div class="wrapper">

    </div>
</header>
<main class="wrapper">
    <form method="post" action="submit.php">
        <label for="name">First Name</label>
        <input type="text" id="name" name="name" required>
        <label for="surname">Last Name</label>
        <input type="text" id="surname" name="surname" required>
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>
        <button type="submit">Create!</button>
    </form>
</main>
</body>
</html>


