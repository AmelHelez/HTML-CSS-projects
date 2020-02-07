<?php

include('includes/db.php');

session_start();

$fname = mysqli_real_escape_string($conn,$_POST['fname']);
$lname = mysqli_real_escape_string($conn,$_POST['lname']);
$email = mysqli_real_escape_string($conn,$_POST['email']);

mysqli_query($conn, "INSERT INTO client (first_name,last_name,email) VALUES ($fname,$lname,$email)");
?>