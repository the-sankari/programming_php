<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2 version 2</title>
    
</head>
<body>
    <?php
    $name = $email = $password = $confirmPassword = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);
        $confirmPassword = test_input($_POST["confirmPassword"]);
        $gender = test_input($_POST["gender"]);

        if (empty($name) || empty($email) || empty($password) || empty($confirmPassword) || empty($gender)) {
            echo "Please fill all the fields.<br>";
        } elseif ($password !== $confirmPassword) {
            echo "Password does not match.<br>";
        } elseif ($gender === 'Other' && empty($_POST['other'])) {
            echo "Please specify your gender.<br>";
        } else {
            // All fields are filled, proceed with registration
            if ($gender === 'Other') {
                $gender = test_input($_POST['other']);
            }

            echo "Welcome $name <br>";
            echo "Thank you for registering <br>";
            echo "Full name: $name <br>";
            echo "Email: $email <br>";
            echo "Gender: $gender <br>";
            // Additional processing or database insertion can be done here
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name:
        <input type="text" name="name" placeholder="Enter name" value="<?php echo $name; ?>" /><br />
        Email:
        <input type="email" name="email" placeholder="e.g: demo@example.com" value="<?php echo $email; ?>" /><br />
        Password:
        <input type="password" name="password" placeholder="at least 8 characters" /><br />
        Confirm Password:
        <input type="password" name="confirmPassword" placeholder="repeat your password" /><br />
        Gender: <br />
        <label for="male">
            <input type="radio" name="gender" id="male" value="Male" <?php if ($gender === 'Male') echo 'checked'; ?> />Male
        </label><br />
        <label for="female">
            <input type="radio" name="gender" id="female" value="Female" <?php if ($gender === 'Female') echo 'checked'; ?> />Female
        </label><br />
        <label for="other">
            <input type="radio" name="gender" id="other" value="Other" <?php if ($gender === 'Other') echo 'checked'; ?> />Other
            <input type="text" name="other" placeholder="Please specify" value="<?php if ($gender === 'Other') echo $other; ?>" />
        </label><br />
        <button type="submit">Register</button>
    </form>
</body>
</html>
