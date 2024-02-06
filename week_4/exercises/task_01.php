<!-- /**
 * Make a program which asks for a positive number from the user
 * and prnts all even positive numbers untill to the number the user gave
 */ -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 01</title>
 </head>
 <body>
    <h2>You entered <?php $inputN = $_POST["number"];
        echo $inputN;
    ?></h2>
    <div><?php 
    for ($i = 1; $i <= $inputN; $i++) { 
       if ($i % 2 == 0) {
        print "$i \n";
       }
    }
    ?></div>
 </body>
 </html>

 