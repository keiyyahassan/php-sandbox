<?php
$output = null;
$string = 'Hello World';

// Length
$output = strlen($string);

// Word count
$output = str_word_count($string);

// String position
$output = strpos($string, 'World');

// Get specific char by index
$output = $string[4];

// Sub string
$output = substr($string, 6, 5);

// string replace
$output = str_replace('World', 'Universe', $string);

// Lower case
$output = strtolower($string);

// Upper case
$output = strtoupper($string);
$output = ucwords($string); //Every first word to uppercase

$output = trim("  Hello World    ")


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <p class="text-xl"><?= $output ?></p>
        </div>
    </div>
</body>

</html>