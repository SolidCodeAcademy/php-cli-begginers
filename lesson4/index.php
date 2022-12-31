<?php

// Defining a function
function greet($name) {
    echo "Hello, $name!\n";
}

// Calling a function
greet("Alice"); // prints "Hello, Alice!"
greet("Bob"); // prints "Hello, Bob!"

// Default arguments
function greet2($name, $greeting = "Hello") {
    echo "$greeting, $name!\n";
}

greet2("Alice"); // prints "Hello, Alice!"
greet2("Bob", "Hi"); // prints "Hi, Bob!"

// Return values
function add($a, $b) {
    return $a + $b;
}

$sum = add(1, 2); // $sum is now 3
echo "The sum is $sum.\n";

// Variable number of arguments
function add_all($first, ...$rest) {
    $sum = $first;
    foreach ($rest as $number) {
        $sum += $number;
    }
    return $sum;
}

echo add_all(1, 2, 3, 4, 5); // prints 15
