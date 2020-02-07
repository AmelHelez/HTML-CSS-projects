<?php
include('db.php');
session_start();
?>

<!doctype html>
<html>
<head>
    <title>List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
   <div class="wrapper">
       <h1>University</h1>
       <p>Welcome to the list!</p>
   </div>
</header>
<main class="wrapper">
<?php $query = mysqli_query($conn,'select * from student'); ?>
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
    <p><a href="add.php">Add a new student!</a></p>
</main>
</body>
</html>
