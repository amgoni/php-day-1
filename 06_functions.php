<?php
    function registerUser($email) {
        echo "$email User Registered Successfully!";
    }

registerUser("ameen.m.goney@gmail.com");

function sum($num1=4, $num2=5) {
    return $num1 + $num2;
}

echo "<br> The sum of is: " . sum(5, 10);

$subtract = function($num1, $num2) {
    return $num1 - $num2;
};

echo "<br> The difference is: " . $subtract(10, 5);