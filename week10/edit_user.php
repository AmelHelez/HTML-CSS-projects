<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    exit('You are not authenticated');
}
?>
<!doctype html>
<html>
<head>
    <title>
        MySQL
    </title>
    <style>
        input {
            display: block;
            margin-bottom: 20px;
            width: 300px;
        }
        input[type="radio"] {
            display: inline-block;
            width: auto;
        }
        label + label {
            display: block;
        }
    </style>
</head>
<body>
<?php
include('includes/db.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "select id, fname, lname, email from users where id = $id");
$row = mysqli_fetch_assoc($query);
?>

<form action="update.php" method="POST">
    <input type="hidden" value="<?php echo $row['id'] ?>" name="user_id">

    <label for="first_name">First name</label>
    <input type="text" name="first_name" id="first_name" required placeholder="Please enter your first name" value="<?php echo $row['fname'] ?>">

    <label for="last_name">Last name</label>
    <input type="text" name="last_name" id="last_name" required value="<?php echo $row['lname'] ?>">

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required value="<?php echo $row['email'] ?>">

    <button type="submit">Submit</button>


</form>
</body>
</html>