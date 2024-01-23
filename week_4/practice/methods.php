// Kajol Sutra Dhar

<?php

$cars = ["Volvo", "Toyota", "BMW"];

// Printing the first element of the array
print $cars[0] . "\n";

// Modifying the first element of the array
$cars[0] = "Ford";

// Displaying the modified array using var_dump
print var_dump($cars);

// Removing the third element from the array using unset()
unset($cars[2]);

// Displaying the array after removal using var_dump
print var_dump($cars);

?>
