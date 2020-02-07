<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stajl.css">
    <title>Title</title>
</head>
<body>
<?php
 $myvar = "This is my variable";
 $number1 = 5;
 $number2 = 3;
 $sum = $number1 + $number2;
 echo "Variable: " .$myvar. "<br>Sum: " .$sum. "<br>";
 echo "Hello World! <br>";

$names[] = "John";
$names[] = "Mike";
$names[] = "Tom";

echo $names[0] ." and ". $names[2] ." are ". $names[1] . "'s neighbours.<br>";

$cars = array("Audi","BMW","Mercedes","Volkswagen");
$carslength = count($cars);

for($x = 0; $x < $carslength; $x++) {
    echo $cars[$x] . "<br>";
}

$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z . "<br>";

?>

<br><br>
<fieldset class=“radios”>
    <legend>Pick a colour:</legend>
    <input id="r" type="radio" name="color" value="red" checked="checked" />
    <label for="r" style="color: red">Red</label>
    <input id="g" type="radio" name="color" value="green" />
    <label for="g" style="color: green">Green</label>
    <input id="b" type="radio" name="color" value="blue" />
    <label for="b" style="color: blue">Blue</label> </fieldset>
<br><br>
 <label for="company">Company:</label>
<select id=“company" name=“compname" size="1">
    <option value="0"> Select a company </option>
    <option value=“Google" > Google </option>
    <option value=“Microsoft" > Microsoft </option>
    <option value=“IBM" > IBM </option> </select>
<input name="submit" type="submit" value=" Go " />

<p style="font-size: larger; font-weight: bold;">Your favorite sports:</p>
<p><input id="t" type="checkbox" name=“sport[]" />
    <label for="t">Tennis</label>
    <input id="b" type="checkbox" name="sport[]" />
    <label for="b">Baseball</label>
    <input id="w" type="checkbox" name="sport[]" />
    <label for="w">Wind Surfing</label>
    <input name="submit" type="submit" value=" Go " />

    <fieldset class="radios">
    <legend>Pick a color: </legend>
    <input id="r" type="radio" name="color" value="red" checked="checked" />
    <label for="r" style="color: red">Red</label>
    <input id="g" type="radio" name="color" value="green" />
    <label for="g" style="color:green">Green</label>
    <input id="b" type="radio" name="color" value="blue" />
    <label for="b" style="color: blue">Blue</label>
</fieldset>

<label for="menu">Menu:</label>
<select id="menu" name="menu" size="1">
    <option value="0">Choose a meal</option>
    <optgroup label="Soup">
        <option value="hot and sour">Hot and Sour Soup</option>
        <option value="egg drop">Egg Drop Soup</option>
        <option value="chicken noodle">Chicken Noodle Soup</option>
    </optgroup>
    <optgroup label="Salad">
        <option value="garden">Garden Salad</option>
        <option value="spinach">Spinach Salad</option>
        <option value="fruit">Fruit Salad</option>
    </optgroup>
</select>
<input type="submit" value="Order Meal">

<label for="menu">Menu: </label>
<select id="menu" name="menu" size="1">
    <option value="0">Choose meal</option>
    <optgroup label="Soup">
        <option value="begova">Begova Corba</option>
        <option value="pileca">Pileca Supa</option>
        <option value="gljive">Supa od Gljiva</option>
    </optgroup>
    <optgroup label="Salad">
        <option value="sopska">Sopska salata</option>
        <option value="srpska">Srpska salata</option>
        <option value="tuna">Tuna salata</option>
    </optgroup>
</select>
<input type="submit" name="submit" value="Choose" />
<br><br>
Quantity: <input type="number" name="quantity" min="1" max="5"><br><br>
Birthday: <input type="date" name="bday"><br><br>
Select your favorite color: <input type="color" name="favcolor"><br><br>
Range: <input type="range" name="points" min="0" max="10"><br><br>
Birthday (month and year): <input type="month" name="bdaymonth"><br><br>
Select a week: <input type="week" name="week_year"><br><br>
Select a time: <input type="time" name="usr_time"><br><br>
Birthday (date and time): <input type="datetime" name="bdaytime"><br><br>
Birthday (date and time): <input type="datetime-local" name="bdaytime"><br><br>
E-mail: <input type="email" name="email"><br><br>
Search Google: <input type="search" name="googlesearch" placeholder="Search something.."><br><br>
Telephone: <input type="tel" name="usrtel"><br><br>
Add your homepage: <input type="url" name="homepage">
<br><br><br>

<label for="email">Email:</label>
<input type="email" id="email" name="email" class="large" />
<label for="web_site">Web:</label>
<input type="url" id="web_site" name="web_site" class="large"
       placeholder=“http://www.example.com” />
<p class="instructions">Have a homepage or a blog? Put the address here.</p>
<label for=“phone">Phone:</label>
<input type=“tel" id=“phone" name=“phone" class=“large” placeholder=“xxx-xxxxxxx” pattern=“\d{3}-\d{3}-\d{4}” />
<label for=“search">Search:</label>
<input type=“search" id=“search" name=“search" size=“30" />
<input type=“submit” name="submit" value="Find it!"/>

<br><br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="fname">
    <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['fname']);
    if(empty($name)) {
        echo "Name field is empty.";
    } else {
        echo $name;
    }
}
?>
<br><br><br>
<div class="iskde">
    <form action="welcome.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Submit">
    </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>