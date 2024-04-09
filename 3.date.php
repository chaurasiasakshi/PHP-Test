<!-- Write a PHP script to convert a string to Date and DateTime  
 

Sample Date : '12-08-2004' 
Expected Output : 2004-12-08 
Note : PHP considers '/' to mean m/d/Y format and '-' to mean d-m-Y format.  -->
<?php

// Sample date string
$dateString = '12-08-2004';

// Convert to DateTime object
$date = DateTime::createFromFormat('d-m-Y', $dateString);

// Convert DateTime object to desired format
$formattedDate = $date->format('Y-m-d');

// Output the formatted date
echo $formattedDate;

?>
