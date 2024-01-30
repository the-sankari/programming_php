<?php
//Kajol Sutra Dhar

$sales2023 = [
    'January' => 123,
    'February' => 786,
    'March' => 659
];

$sales2024 = [
    'January' => 53,
    'February' => 0, // having some value
    'March' => null  // no value
];


print $sales2023['January'] ."\n";

$sales = [ 2023 => $sales2023, 
2024 => $sales2024];

var_dump($sales);

print $sales[2023]["January"] . "\n";

$sales[2024]["January"] = $sales[2024]["January"] + 42;

print $sales[2024]["January"] . "\n";
