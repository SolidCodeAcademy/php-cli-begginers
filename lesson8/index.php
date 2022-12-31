<?php

// Including a file
include "functions.php";

// Calling a function from the included file
greet("Alice"); // prints "Hello, Alice!"

// Requiring a file
require "functions.php";

// Calling a function from the required file
greet("Bob"); // prints "Hello, Bob!"

// Including a file once
include_once "functions.php";

// Requiring a file once
require_once "functions.php";
