<?php
$ceu = array(
    "Italy"=>"Rome",
    "Luxembourg"=>"Luxembourg",
    "Belgium"=>"Brussels",
    "Denmark"=>"Copenhagen",
    "Finland"=>"Helsinki",
    "France"=>"Paris",
    "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana",
    "Germany"=>"Berlin",
    "Greece"=>"Athens",
    "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon",
    "Spain"=>"Madrid",
    "Sweden"=>"Stockholm",
    "United Kingdom"=>"London",
    "Cyprus"=>"Nicosia",
    "Lithuania"=>"Vilnius",
    "Czech Republic"=>"Prague",
    "Estonia"=>"Tallin",
    "Hungary"=>"Budapest",
    "Latvia"=>"Riga",
    "Malta"=>"Valetta",
    "Austria"=>"Vienna",
    "Poland"=>"Warsaw"
);

asort($ceu); // Sort the array by its values (capital names)

// Display the sorted list
foreach ($ceu as $country => $capital) {
    echo "The capital of $country is $capital <br>";
    
}

$a = array("animal"=>"dog", "pet"=>"cat"); 
foreach($a as $animal => $pet){
echo  "$animal has a pet named $pet <br>";
}




?>
