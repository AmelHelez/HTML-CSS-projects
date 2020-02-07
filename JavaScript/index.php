<?php
$color = 'red';
$name = 'John';
?>
<!doctype html>
<html>
<head>
    <title>JS</title>
    <style>
        p {
            color: <?php echo $color; ?>
        }
    </style>
</head>
<body>
<p id="p2">Hello world!</p>
<span onclick="changeElement()">Change element</span>
<script>
    let numbers = [];
    numbers[0] = 1;
    numbers[10] = 2;
    numbers['test'] = 5;
    console.log(numbers.test);
    function changeElement() {
        let element = document.getElementById('p2');
        console.log(element);
        element.innerHTML = '<b>Hello</b> <?php echo $name ?>';
        element.style.color = 'green';
    }
</script>
</body>
</html>