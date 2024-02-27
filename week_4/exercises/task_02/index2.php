<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2 version 2</title>
</head>
<body>
    <?php
    $name = $email = $password = $confirmPassword = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    }


    ?>
     <form action="index.php" method="post">
        Name:
        <input type="text" name="name" id="" placeholder="Enter name" value="<?php echo $name;?>" /><br />
        Email:
        <input
          type="email"
          name="email"
          id=""
          placeholder="i.g: demo@example.invalid"
          value="<?php echo $email;?>"
        /><br />
        Password:
        <input
          type="password"
          name="password"
          id=""
          placeholder="at least 8 chacter"
          min="8"
          value="<?php echo $password;?>"
        /><br />
        Confirm Password:
        <input
          type="password"
          name="confirmPassword"
          id=""
          placeholder="repeat your password"
          min="8"
          value="<?php echo $confirmPassword;?>"
        /><br />
        <button type="submit">Register</button>
      </form>
</body>
</html>