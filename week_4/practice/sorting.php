// Kajol Sutra Dhar

<?php
// Original array of customer ages
$customerAges = [4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];

// Create a copy of the original array for sorting
$customerSorted = $customerAges;

// Sort the copied array in ascending order
sort($customerSorted);

// Display the sorted array using var_dump
print var_dump($customerSorted);

// Print the youngest age
print "Youngest is $customerSorted[0] years old \n";
 
$last = count($customerSorted) - 1;

// Print the oldest age
print "Oldest is $customerSorted[$last] years old ";
?>



