<?php
session_start();

include("config_pd.php");
$mysqli = mysqli_connect('localhost', $bd_user_login, $bd_password, $bd_name);
if ($mysqli->connect_errno){
    printf("no connect: %s\n", $mysqli_connect_error);
    exit();
}

$id = $_SESSION["log"];
$loadout = $_COOKIE['y'];

$sql= "update contestants set loadout = '$loadout' where login = '$id'";
$result = $mysqli->query($sql);

$pred = $_SERVER['HTTP_REFERER'];
header("Location: $pred");

?>
