<?php
require_once '../Config/connect.php';

$login=$_POST['log'];
$pass=$_POST['pass'];
$pass=md5($pass);
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];

/*echo($login);
echo($pass);
echo($name);
echo($age);
echo($email);*/

mysqli_query($connect, "INSERT INTO `us_ath` (`us_id`, `us_log`, `us_pass`, `us_rl`) VALUES (NULL, '$login', '$pass', 3)");
$id= mysqli_query($connect, "SELECT `us_id` FROM `us_ath` WHERE `us_log` = '$login'");
$id=mysqli_fetch_all($id);
$id=$id[0][0];
/*echo($id[0][0]);*/

mysqli_query($connect, "INSERT INTO `us_inf` (`inf_id`, `us_id`, `us_name`, `us_age`, `us_email`) VALUES (NULL, '$id', '$name', '$age', '$email')");
header("Location: ../index.php");
/*header("Location: ".$_SERVER['HTTP_REFERER']);*/
