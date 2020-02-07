<?php
$conn = @mysqli_connect('localhost', 'root', '', 'csis270_app');
if (!$conn) {
    exit('There is some problem with the database');
}
$query = mysqli_query($conn, 'select * from articles');
$result = array();
while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}
header('Content-Type: application/json');
echo json_encode($result)
?>