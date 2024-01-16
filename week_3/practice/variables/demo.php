<?php
$foo = "This is a string";
$bar = " and an another string";
$logLine = "2024-01-15, 14:00,Helsinki, -15";
// print strlen($foo . $bar);
// print strpos($bar, 'another');

print strtoupper($foo);
print "\n";
print strtolower($foo);
print "\n ________ Replace ______\n";

print str_replace('This', 'That', $foo);
print "\n ________ Return ______\n";

print $foo . $bar;
print "\n ________ trim ______\n";

print 'HH' . trim($bar);
print "\n ________ Explode ______\n";

print var_dump(explode('is ', $foo));

print "\n ________ Explode 2 ______\n";

print var_dump(explode(',', $logLine));

print "\n ________  ______\n";

