<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style22.css">
</head>
<body>
    <div id="form">
      <h1>Login Form</h1>
      <form name="form" action="login.php" method="post">
        <label for="">Username: </label>
        <input type="text" id="user" name="user"> </br> </br>

        <label for="">Password: </label>
        <input type="password" id="pass" name="pass"> </br> 

        <input type="submit" id="button" value="Login" name="submit">
      </form>
    </div>
</body>
</html>