<?php
include('db.php');
?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"
</head>
<body>
<header>
    <div class="wrapper">
     <h1><a href="index.php">International University Bugojno</a></h1>
        <nav>
            <p>Edit a student</p>
        </nav>
    </div>
</header>
<main class="wrapper">
    <?php
    $id = $_GET['id'];
    $query = mysqli_query($conn, "select * from student where id = " . $id);
    $user = mysqli_fetch_assoc($query);
    ?>

    <form action="update.php?id=<?php echo $id ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <label for="name">First Name</label>
        <input type="text" name="name" id="name" required value="<?php echo $user['name'] ?>">
        <label for="surname">Last Name</label>
        <input type="text" name="surname" id="surname" required value="<?php echo $user['surname'] ?>">
        <label for="dob">Date Of Birth</label>
        <input type="text" name="dob" id="dob" required value="<?php echo $user['dob'] ?>">
        <button type="submit">Finish</button>
    </form>
</main>
<footer>
    <div class="wrapper">
        &copy; Made by Helez Amel
    </div>
</footer>
</body>
</html>
