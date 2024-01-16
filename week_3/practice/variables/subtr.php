<?php

$foo = "This is a string";

print substr($foo, 5, 4);
print "\n ________  ______\n";

print substr($foo, 5);
print "\n ________  ______\n";
print substr($foo, -6, -1);
print "\n ________  ______\n";
print substr($foo, 6, -1);
print "\n________  ______\n________  ______\n________  ______\n\n";


print phpversion();
