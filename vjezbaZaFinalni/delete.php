<?php
include('db.php');

$id = $_GET['id'];

mysqli_query($conn,"delete from student where id = " . $id);

header('Location: list.php');
?>