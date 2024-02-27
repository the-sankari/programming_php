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
    <style>
      span {
        color: red;
      }
    </style>
 </head>
 <body>
    <h2>You entered <?php $inputN = ( $_POST["number"]);
       ?><span><?php  echo $inputN;?></span>
    </h2>
    <p>
        <!-- Even positive number are:  -->
    <?php 

    if (!is_numeric($inputN) ) {
        echo "please enter a valid integer number between 1 and 100";
    } elseif($inputN < 0 ){
        echo "$inputN is not a positive integer number between 1 and 100";
    }
    else {
    $inputNum = intval($inputN);
        for ($i = 1; $i <= $inputNum; $i++) { 
            if ($i % 2 == 0  ) {
                print "$i <br>";
            }elseif ($i > 100) {
                break;
            }
            }
            var_dump($inputNum);
    }


    ?>
    </p>
 </body>
 </html>

 