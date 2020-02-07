<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    exit('You are not authenticated');
}
$id = $_GET['id'];
include('includes/db.php');
mysqli_query($conn, "DELETE FROM users where id = $id");
header('Location: index.php');
exit();
?>