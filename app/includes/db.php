<?php

$conn = @mysqli_connect('localhost', 'root','','project_db');

if(!$conn) {
    exit('There is some problem with the database..');
}
?>