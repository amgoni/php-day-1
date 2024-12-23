<?php

// echo - output strings, numbers, etc
echo 123, 'Hello', 10.5;

// print - works like echo but can only take in a single argument, never really used
print 123;

// print_r() - print single values and arrays like console.log
print_r([1, 2, 3]);

// var_dump() - print single values and arrays like console.log but with more info like data type and length
var_dump('Hello');

// var_export() - similar to var_dump() but returns a string representation of a variable
var_export('Hello');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Output</title>
</head>
<body>
    <h1>
        <?php
            echo 'Hello';
        ?>
    </h1>
</body>
</html>