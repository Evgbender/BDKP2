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
    <a href="Vendor/champAdd.php"><p class="addBut">+ Add</p></a>
    <a href="usInfPg.php"><p class="usInfBut">Me</p></a>
</div>

<div class="listPlot">
    <?php
    $championships=mysqli_query($connect,"SELECT *  FROM `championship` ORDER BY `prize_fond` DESC");
    $championships=mysqli_fetch_all($championships);
    foreach ($championships as $championship){
        ?>
        <a href="Vendor/champ.php?id=<?=$championship[0] ?>" class="ucRowsA"><p class="ucRows"><span style="display: inline-block"><?=$championship[1] ?></span><span style="display: inline-block; float: right"><?=$championship[2] ?>$</span></p></a> <a href="Vendor/champDel.php?name=<?=$championship[1] ?>"><p class="delBut">X</p><br></a>
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
    $championships=mysqli_query($connect,"SELECT *  FROM `championship` ORDER BY `prize_fond` DESC");
    $championships=mysqli_fetch_all($championships);
    foreach ($championships as $championship){
        ?>
        <a href="Vendor/champ.php?id=<?=$championship[0] ?>" class="ucRowsA"><p class="ucRows"><span style="display: inline-block"><?=$championship[1] ?></span><span style="display: inline-block; float: right"><?=$championship[2] ?>$</span></p></a>
        <?php
    }
    ?>
</div>
<?php }; ?>



</body>

</html>