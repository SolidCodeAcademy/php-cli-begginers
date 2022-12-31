<?php

// Line comment

/*
Simple multiline comment
 */

/**
 * PHP Doc Multiline comment
 */

// Declaring variables
$name = "John";
$age = 30;
$tall = 1.8;
$is_married = true;

echo $name; // Outputs John -- string
echo $age; // Outputs 30 -- auto casting to string
echo $tall; // Outputs 1.8 -- auto casting to string
echo $is_married; // we shouldn't. It gets auto casting but not a good practise at all.

var_dump($is_married); // better for debugging and testing.

// Declaring constants
define("PI", 3.14, true);
define("MAX_VALUE", 100, true);

echo PI; // output: 3.14
echo MAX_VALUE; // output: 100

// Accessing global variables -- Very very very bad practise, but you should know it tho
$x = 10;
$y = 20;

function sum() {
    global $x, $y;
    return $x + $y;
}

echo sum(); // Outputs 30

// Assigning reference variables
$a = 5;
$b = $a;

$b = 10;
echo $a; // Outputs 5 -- Variables are passed by value

$a = 5;
$b = &$a;

$b = 10;
echo $a; // Outputs 10 -- Variables are passed by reference (&)

// Concatenating variables
$first_name = "John";
$last_name = "Doe";

echo $first_name . " " . $last_name; // Outputs "John Doe"

// Operations on variables
$x = 10;
$y = 5;

echo $x + $y; // Outputs 15
echo $x - $y; // Outputs 5
echo $x * $y; // Outputs 50
echo $x / $y; // Outputs 2
echo $x % $y; // Outputs 0
echo $x ** $y; // Output 100000

$x++;
$y--;

echo $x; // Outputs 11
echo $y; // Outputs 4