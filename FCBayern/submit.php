<?php
include ('db.php');
session_start();

$name = mysqli_real_escape_string($conn,$_POST['name']);
$surname = mysqli_real_escape_string($conn,$_POST['surname']);
$dob = mysqli_real_escape_string($conn,$_POST['dob']);

mysqli_query($conn,"insert into student (name,surname,dob) values ('$name', '$surname','$dob') ");

header('Location: list.php');