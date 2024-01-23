<?php
//creates an associative array named $team with months as keys and corresponding values. 
$team =[
    "January" => 123,
    "February" => 654,
    "March" => 433,
    "April" => 765,
    "May" => 484
];


print var_dump($team);


/**
 * array(5) {
  ["January"]=>
  int(123)
  ["February"]=>
  int(654)
  ["March"]=>
  int(433)
  ["April"]=>
  int(765)
  ["May"]=>
  int(484)
}
 */

//This output displays the structure and values of the $team array. Each month serves as a key, and the corresponding values are the numbers associated with each month. In this example, the values are integers, representing some arbitrary data associated with each month.
