<?php
include('db.php');
session_start();

$id = mysqli_real_escape_string($conn,$_POST['id']);
$fname = mysqli_real_escape_string($conn,$_POST['name']);
$lname = mysqli_real_escape_string($conn,$_POST['surname']);
$dob = mysqli_real_escape_string($conn,$_POST['dob']);

mysqli_query($conn,"update student set name = '$fname', surname = '$lname', dob = '$dob' where id=" . $id);

header('Location: list.php');
?>