<?php
include ('db.php');
session_start();

$id = mysqli_real_escape_string($conn,$_POST['id']);
$name = mysqli_real_escape_string($conn,$_POST['name']);
$surname = mysqli_real_escape_string($conn,$_POST['surname']);
$dob = mysqli_real_escape_string($conn,$_POST['dob']);

mysqli_query($conn,"update student set name='$name', surname='$surname', dob='$dob' where id = " . $id);

header("Location: list.php");

?>