<?php

// Defining a class
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function greet() {
        echo "Hi, my name is {$this->name} and I am {$this->age} years old.\n";
    }
}

// Creating an object
$alice = new Person("Alice", 25);

// Accessing object properties
echo $alice->name . "\n"; // prints "Alice"
echo $alice->age . "\n"; // prints 25

// Modifying object properties
$alice->age = 26;
echo $alice->age . "\n"; // prints 26

// Calling object methods
$alice->greet(); // prints "Hi, my name is Alice and I am 26 years old."

// Inheritance
class Student extends Person {
    public $school;

    public function __construct($name, $age, $school) {
        parent::__construct($name, $age);
        $this->school = $school;
    }

    public function greet() {
        parent::greet();
        echo "I am a student at {$this->school}.\n";
    }
}

$bob = new Student("Bob", 18, "Harvard University");
$bob->greet(); // prints "Hi, my name is Bob and I am 18 years old. I am a student at Harvard University."
