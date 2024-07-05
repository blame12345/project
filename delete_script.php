<?php
session_start();

include("config_pd.php");
$mysqli = mysqli_connect('localhost', $bd_user_login, $bd_password, $bd_name);
if ($mysqli->connect_errno){
    printf("no connect: %s\n", $mysqli_connect_error);
    exit();
}

$a = $_SESSION['log'];
$b = $_SESSION['pas'];
$sql="delete from contestants where login = '$a' and password = '$b'";
$result = $mysqli->query($sql);

session_destroy();
$pred = $_SERVER['HTTP_REFERER'];
header("Location: $pred");
?>
