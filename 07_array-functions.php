<?php 
    $fruits = ["Apple", "Banana", "Orange", "Mango", "Pineapple"];


// Array Functions
// Get length: count() - Returns the number of elements in an array
echo count($fruits); // 5

// Search array: in_array() - Searches an array for a specific value
echo in_array("Apple", $fruits); // 1

// Add to array
// Add to the end:
$fruits[] = "Grapes";
print_r($fruits);
array_push($fruits, "Strawberry");
print_r($fruits);
// Add to the beginning:
array_unshift($fruits, "Watermelon");

// Remove from array
// Remove from the end:
array_pop($fruits);
print_r($fruits);
// Remove particular element using index:
unset($fruits[3]);
print_r($fruits);
// Split array into 2 chunks
$chunks = array_chunk($fruits, 2);
print_r($chunks);

// Merge arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
print_r($arr3);
$arr4 = [...$arr1, ...$arr2, ...$fruits];
print_r($arr4);
$colors = ["Red", "Green", "Blue"];
$numbers = [1, 2, 3];
$combined = array_combine($colors, $numbers);
print_r($combined);
$keys = array_keys($combined);
print_r($keys);
$flipped = array_flip($combined);
print_r($flipped);

// Map 
$numbers = range(1,10);
$newNumbers = array_map(function($number) {
    return "Number $number";
}, $numbers);
print_r($newNumbers);

// Filter
$lessThanFive = array_filter($numbers, function($number) {
    return $number < 5;
});
print_r($lessThanFive);

// Reduce
$sumOfArray = array_reduce($numbers, function($carry, $number) {
    return $carry + $number;
});
print_r($sumOfArray);