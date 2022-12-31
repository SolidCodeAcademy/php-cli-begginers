<?php

// Declaring an array
$numbers = [1, 2, 3, 4, 5];

// Accessing elements
echo $numbers[0] . "\n"; // prints 1
echo $numbers[1] . "\n"; // prints 2

// Modifying elements
$numbers[0] = 10;
echo $numbers[0] . "\n"; // prints 10

// Adding elements
$numbers[] = 6;
print_r($numbers); // prints [10, 2, 3, 4, 5, 6]

// Removing elements
unset($numbers[0]);
print_r($numbers); // prints [2, 3, 4, 5, 6]

// Multidimensional arrays
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo $matrix[1][1] . "\n"; // prints 5

// Array functions
$sorted_numbers = sort($numbers);
print_r($sorted_numbers); // prints [2, 3, 4, 5, 6]

$reversed_numbers = array_reverse($numbers);
print_r($reversed_numbers); // prints [6, 5, 4, 3, 2]

$count = count($numbers);
echo $count . "\n"; // prints 5

$max = max($numbers);
echo $max . "\n"; // prints 6

$min = min($numbers);
echo $min . "\n"; // prints 2
