<?php

function result($number1, $number2){
    
    $sum = 0; // initialize the sum variable

    for ($number1; $number1 <= $number2; $number1++) {  // runs the loop upto number2 value
        $sum += $number1;
        if ($sum == 20)break; // checks to break the loops for printing calculation
        print "$number1 + $sum = $sum\n";
    }

    print "Sum : $sum";
}

result(1, 5);   // function call
