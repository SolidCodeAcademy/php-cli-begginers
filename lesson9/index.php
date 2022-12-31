<?php

// Reading the contents of a webpage using file_get_contents
$contents = file_get_contents("https://www.example.com");
echo $contents;

// Reading the contents of a webpage using curl
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.example.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$contents = curl_exec($ch);
curl_close($ch);
echo $contents;
