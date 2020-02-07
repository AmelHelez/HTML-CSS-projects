<?php

include('db.php');
session_start();
?>

<!doctype html>
<html>
<head>
    <title>
        List Of Students
    </title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<header>
    <div class="wrapper">
        <nav>
            <h1 title="SSST Logo"><a href="index.php"><img src="download.jpg" alt="university_logo"></a></h1>
            <p>Welcome to the student list!</p>

        </nav>
        <div class="clear"></div>
    </div>

</header>
    <main class="wrapper">

    <?php
    $query = mysqli_query($conn,'select * from student');
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
        <?php while ($row = mysqli_fetch_assoc($query)) { ?>
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
        <br><br><br><br>
    <p><a href="add_new.php">Add a new student!</a></p>
    </main>
<?php
include('footer.php');
?>
</body>
</html>
