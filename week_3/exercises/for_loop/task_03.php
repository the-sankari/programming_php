<?php

for ($i=1; $i < 5; $i++) { 
    for ($j=1; $j  <=$i ; $j++) {
    print "*";  
    if ($j < $i) {
    print " ";  
    }
    }
    print "\n";
};