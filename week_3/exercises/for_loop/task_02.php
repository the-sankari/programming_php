<?php


$number1 = 1;
$number2 = 5;
$sum = 0;

for ($number1; $number1 <= $number2; $number1++) { 
    $sum += $number1;
    if ($sum >= 15)break;
    // print "Number 1: + Number1: = Sum\n";
    print "$sum + $number2 = $sum\n";
}

print "Sum: $sum";
