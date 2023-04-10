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

    <link>

        <div class="logPlate">
            <form action="Vendor/usAut.php" method="post" >
                <label for="logArea">Login</label>
                <br>
                <input type="text" id="logArea" name="log">
                <br><br>
                <label for="passArea">Password</label>
                <br>
                <input type="password" id="passArea" name="pass">
                <br><br>
                <input type="submit" value="Log In">
                <br><br>
                <a style="color: white" href="regPg.php">Register now</a>

            </form>

        </div>


    </body>

</html>
