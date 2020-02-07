<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*
$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

*/
$id = $_GET['id'];
$query = mysqli_query($conn,"select * from student where id = " . $id);
$user = mysqli_fetch_assoc($query);

?>

<?php
$id1 = mysqli_real_escape_string($conn,$_POST['id']);
$name = mysqli_real_escape_string($conn,$_POST['name']);
$surname = mysqli_real_escape_string($conn,$_POST['surname']);
$dob = mysqli_real_escape_string($conn,$_POST['dob']);

$quer = mysqli_query($conn,"update student set name = '$name', surname = '$surname', dob = '$dob' where id = " . $id1);
if($quer) {
    echo "Successfully updated!";
    header("Location: list.php");
    echo "Successfully updated!";
}
?>

<div id="wrapper">
    <div id="header">
        <h1>Edit service</h1>
    </div>
    <div id="main_content">
        <form action="update.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
			<label>Service name:	</label><input type="text" name="name" size="20" maxlength="20" value="<?php echo $user['name'] ?>" /><br />

        <label>Service desctiption:	</label><input type="text" name="surname" size="40" maxlength="40" value="<?php echo $user['surname'] ?>" /><br />

        <label>Availability: </label><input type="date" name="dob" value="<?php echo $user['dob'] ?>" />
        <input type="hidden" name="id" value="<?php echo $id ?>" />
        <input type="Submit" name="Submit" value="Update" class="butt" />
        </form>
<!--
        <?php
        $id1 = mysqli_real_escape_string($conn,$_POST['id']);
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $surname = mysqli_real_escape_string($conn,$_POST['surname']);
        $dob = mysqli_real_escape_string($conn,$_POST['dob']);

       $quer = mysqli_query($conn,"update student set name = '$name', surname = '$surname', dob = '$dob' where id = " . $id1);
      if($quer) {
          echo "Successfully updated!";
          header("Location: list.php");
          echo "Successfully updated!";
       }
        ?>
    -->
        <p class="error"><?php /* INSERT YOUR CODE HERE */ ?></p>
    </div>
</div>
</body>

</html>