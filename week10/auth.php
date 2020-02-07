<?php
session_start();
include('includes/db.php');
/*$email = $_POST['email'];
$password = $_POST['password'];
echo "SELECT * FROM users WHERE email = '$email' and password = '$password'";*/
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
//echo "SELECT * FROM users WHERE email = '$email' and password = '$password'";
$query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' and password = '$password'");
if (mysqli_num_rows($query) == 0) {
    $_SESSION['msg'] = 'Email and/or password is invalid';
    header('Location: sign_in.php');
    exit();
}
$row = mysqli_fetch_assoc($query);
$_SESSION['user_id'] = $row['id'];
$_SESSION['user_name'] = $row['fname'] . ' ' . $row['lname'];
header('Location: index.php');
?>