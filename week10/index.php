<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <title>
        MySQL
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
<?php
include('includes/header.php');
?>
<main class="wrapper">
    <?php
    include('includes/db.php');
    $query = mysqli_query($conn, 'select * from users');
    ?>
    <table>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <?php if (isset($_SESSION['user_id'])) { ?>
                <th>Edit</th>
                <th>Delete</th>
            <?php } ?>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?php echo $row['fname'] ?></td>
                <td><?php echo $row['lname'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <?php if (isset($_SESSION['user_id'])) { ?>
                    <td><a href="edit_user.php?id=<?php echo $row['id'] ?>">edit_user.php?id=<?php echo $row['id'] ?></a></td>
                    <td><a href="delete_user.php?id=<?php echo $row['id'] ?>">delete_user.php?id=<?php echo $row['id'] ?></a></td>
                <?php } ?>
            </tr>
            <?php
        }
        ?>
    </table>
</main>
<?php include('includes/footer.php') ?>
</body>
</html>