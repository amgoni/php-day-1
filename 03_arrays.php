<?php 

// Simple Array
$numbers = [1, 2, 3, 4, 5];
echo $numbers[0];
echo $numbers[1];

$fruits = array('Apple', 'Orange', 'Banana');
echo $fruits[1];
print_r($fruits);
var_dump($fruits);

// Associative Array
$person = [
    'name' => 'John',
    'age' => 25,
    'hasKids' => true
];
echo $person['name'];
echo $person['age'];

$colors = array(
    'red' => 'apple',
    'yellow' => 'banana',
    'green' => 'pear'
);
echo $colors['red'];

// Multi-Dimensional Array
$fruits = array(
    'apple' => array('red', 'green'),
    'banana' => array('yellow', 'green'),
    'pear' => array('green', 'yellow')
);

echo $fruits['apple'][0];

$people = [
    ['name' => 'John', 'age' => 25],
    ['name' => 'Sara', 'age' => 30]
];
echo $people[1]['name'];
var_dump(json_encode($people));