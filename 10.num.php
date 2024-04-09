
<!-- Write a PHP script to decode large integers. 

Sample integer : 
{"number": 123456789012345678901234567890} 

  -->
<?php

// Sample JSON data with a large integer
$jsonData = '{"number": "123456789012345678901234567890"}';

// Decode JSON data
$data = json_decode($jsonData, true);

// Check if the decoding was successful
if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Error decoding JSON: " . json_last_error_msg();
} else {
    // Extract the number as a string
    $numberAsString = $data['number'];

    // Use bcmath to convert the string to a numeric string
    $numericString = bcmul($numberAsString, '1');

    // Print the result
    echo "Decoded number: $numericString";
}

?>
