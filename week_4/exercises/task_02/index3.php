<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2 version 2</title>
    <style>
      body {
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        font-family: cursive;
      }
      .form-container {
        max-width: 70%;
        width: 500px;
        max-height: 600px;
        height: 60%;
        background-color: antiquewhite;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: left;
        padding: 20px;
      }

      input[type='text'],input[type='password'], input[type='email'] {
        width: 100%;
        height: 30px;
        margin: 4px;
        margin-bottom: 14px;
        border-radius: 6px;
        border: none;
        padding-left: 10px;
      }

      button {
        width: 50%;
        height: 40px;
        font-size: 18px;
        background-color: #33bf33dd;
        border: none;
        border-radius: 6px;
        font-weight: 700;
        cursor: pointer;
      }
    </style>
</head>
<body>
    <?php
    $name = $email = $password = $confirmPassword = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $gender = $_POST["gender"];

    if (
        $name == ''
        OR $email == ''
        OR $password == ''
        OR $confirmPassword == ''
        OR $gender == ''
    ) {
        echo "Please fill all the fields.";
        echo '<a href="index.html">Back to the form</a>';
    } elseif ($password !== $confirmPassword) {
        echo "Password does not match";
        echo '<a href="index.html">Back to the form</a>';
    }elseif (!isset($_POST['gender'])) {
      echo 'Please fill all the fields';
    }else {

        if ($_POST['gender'] == 'other') {
          $gender = $_POST['fillin'];
        } else {
          $gender = $_POST['gender'];
        }
        echo "Welcome $name <br>";
        echo "Thank you for registering <br>";
        echo "Full name: $name <br>";
        echo "Email: $email <br>";
        echo "Gender: $gender <br>";
    }

    }


    ?>
         <form action="index3.php" method="post">
        Name:
        <input type="text" name="name" id="" placeholder="Enter name" /><br />
        Email:
        <input
          type="email"
          name="email"
          id=""
          placeholder="i.g: demo@example.invalid"
        /><br />
        Password:
        <input
          type="password"
          name="password"
          id=""
          placeholder="at least 8 chacter"
          min="8"
        /><br />
        Confirm Password:
        <input
          type="password"
          name="confirmPassword"
          id=""
          placeholder="repeat your password"
          min="8"
        /><br />
        Gender: <br />
        <label for="male">
          <input type="radio" name="gender" id="male" />Male </label
        ><br />
        <label for="female">
          <input type="radio" name="gender" id="female" />Female
        </label><br>

        <label for="other">
          <input type="radio" name="gender" id="other" value="<?php echo $_POST["other"]; ?>" />Other
          <input type="text" name="other">
        </label><br>

        <button type="submit">Register</button>
      </form>
</body>
</html>