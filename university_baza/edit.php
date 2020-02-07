<?php
include('db.php');
?>

<!doctype html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="wrapper">

        <h1 title="SSST Logo"><a href="index.php"><img src="download.jpg" alt="university_logo"></a></h1>
        <p><a href="list.php">Go to the student list!</a></p>
    </div>
</header>
<div style="clear: both"></div>
<?php
$userID = $_GET['id'];
$userQuery = mysqli_query($conn,"select * from student where id = " . $userID);
$user = mysqli_fetch_assoc($userQuery);

?>


<form method="post" action="update.php?id=<?php echo $userID; ?>">
    <input type="hidden" name="id" value="<?php echo $userID ?>">
    <label for="name">First Name</label>
    <input type="text" name="name" id="name" placeholder="Enter your name" required value="<?php echo $user['name'] ?>">
    <label for="surname">Last Name</label>
    <input type="text" name="surname" id="surname" placeholder="Enter your surname" required value="<?php echo $user['surname'] ?>">
    <label for="dob">Date Of Birth</label>
    <input type="date" name="dob" id="dob" required value="<?php echo $user['dob'] ?>">
    <button type="submit">Finish Editing!</button>
</form>
<div style="margin-top: 190px"></div>
<?php
include('footer.php');
?>
</body>
</html>
