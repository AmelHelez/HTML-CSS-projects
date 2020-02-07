<?php
$conn = mysqli_connect('localhost', 'root', '');

if (!$conn) {
    exit('Error while connecting to the database');
}
echo "Connected successfully";
mysqli_select_db($conn, 'project_db');


?>