
<?php
// Kajol Sutra Dhar
/**
 * Write a function called checkAge
 * Which will return true if the age is equal or over 18
 * otherwise it returns false
 */

 
 function checkAge($age){
     if (is_numeric($age) && $age >= 18) {
         return TRUE;
     } 
         return FALSE;
 }


 /* Task 2
    Write a function called boolToString
    Which returns string value "True" or "False" 
    based on boolean input.
  */



  function boolToString($boo){
    return $boo ? "True \n" : "False \n";
  }

  print boolToString("True");
  print boolToString("Kajol");
  print "Age: 25 " . boolToString(checkAge(25)) . "\n";
  print "Age: -2 " . boolToString(checkAge(-2)) . "\n";
  print "Age: 12 " . boolToString(checkAge(12)) . "\n";
  print "Age: XL " . boolToString(checkAge("XL")) . "\n";

 print "Age: 25 " . checkAge(25) . "\n";
 print "Age: -2 " . checkAge(-2) . "\n";
 print "Age: 12 " . checkAge(12) . "\n";
 print "Age: XL " . checkAge("XL") . "\n";
 

 print var_dump(checkAge(25));