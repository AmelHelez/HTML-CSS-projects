<?php
include('db.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Student List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"
</head>
<body>
<header>
    <div class="wrapper">

        <h1><a href="index.php">International University Bugojno</a></h1>
        <nav>
            <p>Welcome to the student list!</p>
        </nav>
    </div>
</header>
<div class="clear"></div>
<main class="wrapper">
    <?php
    $query = mysqli_query($conn,"select * from student");
    ?>

    <table>
        <tr>
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
            <th>
                Date Of Birth
            </th>
            <th>
                Option 1
            </th>
            <th>
                Option 2
            </th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td>
                    <?php echo $row['name'] ?>
                </td>
                <td>
                    <?php echo $row['surname'] ?>
                </td>
                <td>
                    <?php echo $row['dob'] ?>
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
    <div class="addstudent">
    <a href="add.php">Add a new student!</a>
    </div>
</main>
<footer>
    <div class="wrapper">
    &copy; Student list made by Amel Helez
    </div>
</footer>
</body>
</html>
