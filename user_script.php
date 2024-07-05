<?php
session_start();

include("config_pd.php");
$mysqli = mysqli_connect('localhost', $bd_user_login, $bd_password, $bd_name);

$login = $_SESSION['log'];
$pass = $_SESSION['pas'];

$sql="select * from contestants where login = '$login' and password = '$pass'";

$result = $mysqli->query($sql);
$a = mysqli_fetch_assoc($result);
$img_sponsor = $a['sponsor'];
$img_loadout = $a['loadout'];
$nickname =  $a['nickname'];

echo $img_loadout;
?>
