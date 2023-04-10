<?php
require_once 'Config/connect.php';
session_start();
$log = $_SESSION['log'];
$userInfo = mysqli_query($connect,"
SELECT `us_inf`.`us_name`,`rl`.`rl_name`,`us_inf`.`us_age`,`us_inf`.`us_email` 
FROM `us_ath`
INNER JOIN `us_inf`
ON `us_ath`.`us_id`=`us_inf`.`us_id`
INNER JOIN `rl`
ON `us_ath`.`us_rl` = `rl`.`rl_id`
WHERE `us_ath`.`us_log`='$log'");
$userInfo = mysqli_fetch_all($userInfo);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/KP.css">
    <meta charset="UTF-8">
    <title>KP</title>
</head>
<body>
<div class="topMenu">
    <a href="../users.php" class="menuA"><div class="menuParts"><div class="innerUs">Users</div></div></a>
    <a href="../championships.php" class="menuA"><div class="menuParts" style="float: right"><div class="innerChamp">Championships</div></div></a>
</div>

<div class="PlNameId">
    <p class="PlNameP"><?=$userInfo[0][0] ?></p>
</div>
<p style="display: inline-block">Role: <?=$userInfo[0][1] ?></p>
<br>
<p style="display: inline-block">Age: <?=$userInfo[0][2] ?></p>
<br>
<p style="display: inline-block">Email: <?=$userInfo[0][3] ?> </p>
<br>


</body>



</html>