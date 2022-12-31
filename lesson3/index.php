<?php

// If statements
$age = 18;

if ($age >= 21) {
  echo "You are old enough to drink in the United States.\n";
} elseif ($age >= 18) {
  echo "You are old enough to vote in the United States.\n";
} else {
  echo "You are not old enough to vote or drink in the United States.\n";
}

// Switch statements
$day = "Monday";

switch ($day) {
  case "Monday":
    echo "It's Monday, time to go back to work.\n";
    break;
  case "Tuesday":
    echo "It's Tuesday, still a few more days until the weekend.\n";
    break;
  case "Wednesday":
    echo "It's Wednesday, the week is almost over.\n";
    break;
  case "Thursday":
    echo "It's Thursday, just one more day until the weekend.\n";
    break;
  case "Friday":
    echo "It's Friday, the weekend is here!\n";
    break;
  default:
    echo "It's the weekend, time to relax!\n";
}

// While loops
$count = 0;

while ($count < 10) {
  echo $count . "\n";
  $count++;
}

// Do-while loops
$count = 0;

do {
  echo $count . "\n";
  $count++;
} while ($count < 10);

// For loops
for ($i = 0; $i < 10; $i++) {
  echo $i . "\n";
}
