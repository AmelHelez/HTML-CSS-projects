<!DOCTYPE html>
<html>
<head>
    <title>List</title>
</head>
<body>
<?php

/*
$my_array = array("Fedex","(Shipping Company)","24/7");

list($a, $b, $c) = $my_array;
echo "I have company, a $a, a $b and a $c.";
*/

$conn = mysqli_connect('localhost','root','','university');


$query = mysqli_query($conn,"select * from student");
?>
<div id="wrapper">
    <div id="header">
        <h1>SERVICES</h1>
    </div>
    <div id="main_content">
        <table>
            <tr>
                <th>Service name</th>
                <th>Service description</th>
                <th>Availability</th>
                <th>EDIT</th>
            </tr>
            <?php
            while($row = mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <td>
                        <?php echo $row['name'] ?>
                    </td>
                    <td>
                        <?php echo $row['surname'] ?>
                    </td>
                    <td>
                        <?php echo $row['dob'] ?>
                    </td>
                    <td>
                        <a href="update.php?id=<?php echo $row['id'] ?>">Edit</a>
                    </td>
                </tr>
            <?php } ?>

        </table>
    </div>
</div>
</body>

</html>
