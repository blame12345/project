<?php
    $server_name = "local_host";
    $bd_user_login = "root";
    $bd_password = "";
    $bd_name = "thefinals";
    $img_sponsor = "";
    $img_loadout = "lo00.jpg";
    $nickname = "";

$mysqli = mysqli_connect('localhost', $bd_user_login, $bd_password, $bd_name);
if ($mysqli->connect_errno){
    printf("no connect: %s\n", $mysqli_connect_error);
    exit();
}

?>
