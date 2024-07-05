<?php
session_start();
include("config_pd.php");

$uploaddir = __DIR__."/avatars/";
$uploadfile = $uploaddir . basename($_FILES['img']['name']);

if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}
echo 'Некоторая отладочная информация:';
print_r($_FILES);

if (!move_uploaded_file($_FILES['img']['name'], $uploadfile)){

$mysqli = mysqli_connect('localhost', $bd_user_login, $bd_password, $bd_name);

$img_src = "avatars/".basename($_FILES['img']['name']);
$d = $_SESSION['log'];
$sql = "update contestants set avatar = '$img_src' where login = '$d'";
$mysqli-> query($sql);

}
$pred = $_SERVER['HTTP_REFERER'];
header("Location: $pred");
?>
