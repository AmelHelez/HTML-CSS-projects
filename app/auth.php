<?php
include('includes/db.php');

session_start();

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

$query = mysqli_query($conn, "select * from client a, log_in b where a.client_id = b.client; ");
if(mysqli_num_rows($query) == 0) {
    exit('Incorrect email and/or password');
}

$row = mysqli
?>