<?php
include('db.php');
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
    <?php
    $id = $_GET['id'];
    $query = mysqli_query($conn,"select * from student where id = " .$id);
    $user = mysqli_fetch_assoc($query);
    ?>
    <form method="post" action="update.php?id=<?php echo $id; ?>">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <label for="name">First Name</label>
        <input type="text" name="name" id="name" required value="<?php echo $user['name'] ?>">
        <label for="surname">Last Name</label>
        <input type="text" name="surname" id="surname" required value="<?php echo $user['surname'] ?>"
        <label for="dob">Date Of Birth</label>
        <input type="date" id="dob" name="dob" required value="<?php echo $user['dob'] ?>">
               <button type="submit">Edit!</button>
    </form>
</main>
<footer>
    <div class="wrapper">
        Copyright by Amel Helez
    </div>
</footer>
</body>
</html>