<?php
require_once 'Config/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/KP.css">
    <meta charset="UTF-8">
    <title>KP</title>
</head>

<body>

<div class="logPlate">
    <form action="Vendor/StReg.php" method="post" >
        <label for="logArea">Login</label>
        <br>
        <input type="text" id="logArea" name="log">
        <br><br>
        <label for="passArea">Password</label>
        <br>
        <input type="password" id="passArea" name="pass">
        <br><br>
        <label for="nameArea">Name</label>
        <br>
        <input type="text" id="nameArea" name="name">
        <br><br>
        <label for="ageArea">Age</label>
        <br>
        <input type="number" id="passArea" name="age">
        <br><br>
        <label for="emailArea">Email</label>
        <br>
        <input type="email" id="emailArea" name="email">
        <br><br>
        <input type="submit" value="Register">

    </form>

</div>


</body>

</html>
