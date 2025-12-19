<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Project</title>
</head>
<body>
    <form action="firstPhpProject.php" method="post">
        <label>
            Username:
            <input type="text" name="username" id="username">
        </label><br>
        <label>
            Email:
            <input type="email" name="email" id="email">
        </label><br>
        <label>
            Password:
            <input type="password" name="password" id="password">
        </label><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php 

    // we get the data by using $_POST and sanitize and filter it at the same time 
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS,);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    // we use isset() for the submit button to be sure the data is sent 
    
    if(isset($_POST['submit'])){
        

        // we validate the data

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_VALIDATE_INT);

        // not we check for the data is not empty
        if(empty($username) || empty($email) || empty($password)){
            echo "missing information, please fill all the info";
        }
        else {
            echo "Username: {$username}" . "<br>";
            echo "Email: {$email}" . "<br>";
            echo "Password: {$password}" . "<br>";

        }


    }
?>