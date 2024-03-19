<?php
/**
 * Making a program that takes two different number and arithmatic symbol
 * Returns result with the respective symbol
 */


function calculate($number1, $number2, $greet){
    switch ($greet) {
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
        case '*':
            $result = $number1 * $number2;
            break;
        case '/':
            $result = $number1 / $number2;
            break;
    
        default:
            print "Muri kha";
            break;
    }
    print $result;
}

print(calculate(1, 5, "+"));









/**
 * n ? s = sum
 * 1 + 0 = 1
 * 2 + 1 = 3
 * 3 + 3 = 6
 * 4 + 6 = 10
 * 5 + 10 = 15
 */


 /**
  * 1 + 0 = 1
  * 2 + 1 = 3
  * 3 + 3 = 6
  * 4 + 6 = 10
  * 5 + 10 = 15
  */