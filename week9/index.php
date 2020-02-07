<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form handling</title>
    <style>
  input { display: block; width: 300px; margin-bottom: 35px;}
   input[type="radio"] { display: inline-block; width: auto;}
        label + label { display: block;}
    </style>
</head>
<body>
Hello
<?php
$test = 'Hello';
echo $test;
?>

<form action="form.php?fname=John&lname=Doe" method="post">
    <label for="first_name">First name</label>
    <input type="text" name="first_name" id="first_name" required placeholder="Enter your first name"

    <label for="last_name">Last name</label>
    <input type="text" name="last_name" id="last_name" required>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <label for="dob">Date of birth</label>
    <!--<input type="date" name="dob" id="dob" required> -->
    <select name="day" id="day">
        <?php
        $days = range(1,31);
        foreach ($days as $day) { ?>
        <option value="<?php echo $day ?>"><?php echo $day ?></option>
        <?php
        }
        ?>
    </select>
    <br>
    <label>Gender</label>
    <input type="radio" value="Male" name="gender" id="male" required>
    <label for="male">Male</label>
    <input type="radio" value="Female" name="gender" id="female" required>
    <label for="female">Female</label>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Submit</button>
</form>
</body>
</html>