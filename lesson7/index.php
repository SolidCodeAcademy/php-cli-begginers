<?php

// Reading a file
$contents = file_get_contents("file.txt");
echo $contents . "\n";

// Writing to a file
$success = file_put_contents("file.txt", "Hello, world!");
if ($success) {
    echo "Successfully wrote to file.\n";
} else {
    echo "Failed to write to file.\n";
}

// Appending to a file
$success = file_put_contents("file.txt", "\nGoodbye, world!", FILE_APPEND);
if ($success) {
    echo "Successfully appended to file.\n";
} else {
    echo "Failed to append to file.\n";
}

// Reading a file line by line
$file = fopen("file.txt", "r");
while (($line = fgets($file)) !== false) {
    echo $line;
}
fclose($file);

// Writing to a file line by line
$file = fopen("file.txt", "w");
fwrite($file, "Hello, world!\n");
fwrite($file, "Goodbye, world!\n");
fclose($file);

// Checking if a file exists
if (file_exists("file.txt")) {
    echo "File exists.\n";
} else {
    echo "File does not exist.\n";
}

// Deleting a file
unlink("file.txt");
