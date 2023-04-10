<?php
require_once '../Config/connect.php';
session_start();
$login=trim($_POST['log']);
$pass=trim($_POST['pass']);
$pass=md5($pass);
$temp = mysqli_fetch_all(mysqli_query($connect, "SELECT `us_pass` FROM `us_ath` WHERE `us_log`='$login'"))[0][0];
if($temp == $pass){
    $_SESSION['rl']=mysqli_fetch_all(mysqli_query($connect, "SELECT `us_rl` FROM `us_ath` WHERE `us_log`='$login'"))[0][0];
    $_SESSION['log']=$login;
    header("Location: ../users.php");
}
else{
    header("Location: ".$_SERVER['HTTP_REFERER']);
};
