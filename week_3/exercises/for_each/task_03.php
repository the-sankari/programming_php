<?php
$fruits = array("Apple", "Banana", "Poisonous Berry", "Strawberry", "Grapes");


print "Today we will eat...\n";
foreach ($fruits as $fruit) {
    if (str_contains( strtolower($fruit), "poisonous" )) {
        print "Hold on a minute! $fruit is dangerous!";
        break;
    }
    
    print $fruit . "\n";
}

