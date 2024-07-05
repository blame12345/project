<?php
session_start();
$_SESSION["is_auth"] = true;
include("config_pd.php");
$mysqli = mysqli_connect('localhost', $bd_user_login, $bd_password, $bd_name);
if ($mysqli->connect_errno){
    printf("no connect: %s\n", $mysqli_connect_error);
    exit();
}
$img_sponsor = "";
$img_loadout = "lo00.jpg";
$nickname = "";
$login = $_GET['login'];
$pass = $_GET['password'];

$a = "select login, password from contestants where login = '$login' and password = '$pass'";
$res = $mysqli->query($a);

$count = mysqli_num_rows($res);

if( $count > 0 ) {
  $_SESSION['log'] = $_GET['login'];
  $_SESSION['pas'] = $_GET['password'];
  $_SESSION["is_auth"] = true;
  $pred = $_SERVER['HTTP_REFERER'];
  header("Location: $pred");
}
else {

  $_SESSION["is_auth"] = false;
  $pred = $_SERVER['HTTP_REFERER'];
  header("Location: $pred");
}

?>
