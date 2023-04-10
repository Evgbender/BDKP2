<?php

require_once 'Config/connect.php';
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/KP.css">
        <meta charset="UTF-8">
        <title>KP</title>
    </head>

    <body>

    <div class="topMenu">
        <a href="users.php" class="menuA"><div class="menuParts"><div class="innerUs">Users</div></div></a>
        <a href="championships.php" class="menuA"><div class="menuParts" style="float: right"><div class="innerChamp">Championships</div></div></a>
    </div>
    <?php if($_SESSION['rl']==1) {?>
    <div class="addPlate">
        <a href="Vendor/usAdd.php"><p class="addBut">+ Add</p></a>
        <a href="usInfPg.php"><p class="usInfBut">Me</p></a>
    </div>

    <div class="listPlot">
        <?php
        $users=mysqli_query($connect,"SELECT `player_name`, ROUND(`wins_am`*100/(`wins_am`+`loses_am`),2) AS `win_rate` FROM `players` ORDER BY ROUND(`wins_am`*100/(`wins_am`+`loses_am`),2) DESC");
        $users=mysqli_fetch_all($users);
        foreach ($users as $user){
        ?>
            <a href="Vendor/user.php?name=<?=$_SESSION['rl'] ?>" class="ucRowsA"><p class="ucRows"><span style="display: inline-block"><?=$user[0] ?></span><span style="display: inline-block; float: right"><?=$user[1] ?>%</span></p></a> <a href="Vendor/usDel.php?name=<?=$user[0] ?>"><p class="delBut">X</p><br></a>
            <?php
        }
        ?>
    </div>
    <?php } else {?>
        <div class="addPlate">
            <a href="usInfPg.php"><p class="usInfBut">Me</p></a>
        </div>

        <div class="listPlot">
            <?php
            $users=mysqli_query($connect,"SELECT `player_name`, ROUND(`wins_am`*100/(`wins_am`+`loses_am`),2) AS `win_rate` FROM `players` ORDER BY ROUND(`wins_am`*100/(`wins_am`+`loses_am`),2) DESC");
            $users=mysqli_fetch_all($users);
            foreach ($users as $user){
                ?>
                <a href="Vendor/user.php?name=<?=$user[0]?>" class="ucRowsA"><p class="ucRows"><span style="display: inline-block"><?=$user[0] ?></span><span style="display: inline-block; float: right"><?=$user[1] ?>%</span></p></a>
                <?php
            }
            ?>
        </div>

    <?php };?>
    </body>

</html>



