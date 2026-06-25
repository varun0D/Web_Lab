<!DOCTYPE html>
<html>
<head>
    <title>Login Authentication</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post">
    Username:
    <input type="text" name="username" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $file = fopen("users.txt", "r");
    $valid = false;

    while (($line = fgets($file)) != false) {

        $data = explode(",", trim($line));

        if ($username == $data[0] && $password == $data[1]) {
            $valid = true;
            break;
        }
    }

    fclose($file);

    if ($valid)
        echo "<h3>Login Successful!</h3>";
    else
        echo "<h3>Invalid Username or Password!</h3>";
}
?>

</body>
</html>  


//inside users.txt
admin,admin123
varun,varun123
student,student123
