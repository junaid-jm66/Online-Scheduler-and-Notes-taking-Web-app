<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: tasks.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">   
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Signika+Negative&family=Staatliches&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="icon.png">
<link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <form class="box" action="tasks.html" method="post">
        <h1>Login</h1>
        <input type="text" name="username" value="" placeholder="Username">
        <input type="password" name="password" value="" placeholder="Password">
        <input type="submit" name="" value="Login">
    </form>
</body>
</html>