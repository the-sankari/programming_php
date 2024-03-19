<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 02</title>
</head>
<body>
    <!-- 
        Check that all the fields are filled and that the passwords mathch
        If everything is ok show a personalsed wlcome message
        If somthing is wrong show a link back to the form
     -->
   <p>

  <?php
  
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    if (
        $name == ''
        OR $email == ''
        OR $password == ''
        OR $confirmPassword == ''
    ) {
        echo "Please fill all the fields.";
        echo '<a href="index.html">Back to the form</a>';
    } elseif ($password !== $confirmPassword) {
        echo "Password does not match";
        echo '<a href="index.html">Back to the form</a>';
    }else {
        echo "Welcome $name <br>";
        echo "Thank you for registering";
    }
    ?>

    

</body>
</html>