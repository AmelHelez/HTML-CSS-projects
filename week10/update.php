<?php
$id = $_POST['user_id'];
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
include('includes/db.php');
mysqli_query($conn, "UPDATE users set fname = '$fname', lname = '$lname', email = '$email' where id = $id");
header('Location: index.php');
exit();
?>