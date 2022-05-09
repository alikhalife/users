<?php
require_once('../Models/Class/User.class.php');
require_once('../Models/Class/ConnexionDb.class.php');
require_once ('../Controllers/UserCreate.php');


function submitInput(){
    $connect = new ConnexionDb('localhost', 'BeCode', 'root', 'root');

    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    echo $username .$email .$password;
    $userRead = new UserRead($connect);
    echo $userRead->getAllUsers();
}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
{
    submitInput();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="Car Park" author="Ali K">
    <title>User's Login</title>

</head>
<body>

<h1>Please login</h1>

<form action="index.php" name="login" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" placeholder="Username..."><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Email..."><br><br>
    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="Password..."><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

