<?php
include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
</head>
<body>
<header>
    <div class="wrapper">

    </div>
</header>
<main class="wrapper">
    <?php
    $userId = $_GET['id'];
    $query = mysqli_query($conn,"select * from student where id = " . $userId);
    $user = mysqli_fetch_assoc($query);
    ?>

    <form method="post" action="update.php?id=<?php echo $userId ?>">
        <input type="hidden" name="id" value="<?php echo $userId ?>">
        <label for="name">First Name</label>
        <input type="text" name="name" id="name" required value="<?php echo $user['name'] ?>">
        <label for="surname">Last Name</label>
        <input type="text" name="surname" id="surname" required value="<?php echo $user['surname'] ?>">
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required value="<?php echo $user['dob'] ?>">
        <button type="submit">Edit it!</button>
    </form>
</main>
</body>
</html>
