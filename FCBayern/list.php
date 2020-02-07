<?php
include('db.php');
session_start();
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
    <div class="clear"></div>
</header>
<div class="clear"></div>
<main class="wrapper">
    <?php
    $query = mysqli_query($conn,"select * from student"); ?>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date Of Birth</th>
            <th>Option 1</th>
            <th>Option 2</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td>
                <?php echo $row['name']; ?>
            </td>
            <td>
                <?php echo $row['surname']; ?>
            </td>
            <td>
                <?php echo $row['dob']; ?>
            </td>
            <td>
                <a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <p><a href="add.php">Add a new student!</a></p>
</main>
<footer>
    <div class="wrapper">
        Copyright by Amel Helez
    </div>
</footer>
</body>
</html>