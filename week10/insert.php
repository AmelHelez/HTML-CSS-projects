<?php
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
include('includes/db.php');
mysqli_query($conn, "INSERT INTO users (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$password')");
header('Location: index.php');
exit();
?>