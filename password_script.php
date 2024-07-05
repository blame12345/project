<?php
session_start();

include("config_pd.php");
$mysqli = mysqli_connect('localhost', $bd_user_login, $bd_password, $bd_name);
if ($mysqli->connect_errno){
    printf("no connect: %s\n", $mysqli_connect_error);
    exit();
}

$id = $_SESSION["log"];
$oldpass = $_POST['oldpassword'];
$pass = $_POST['newpassword'];
if ($oldpass != $_SESSION['pas']){
  echo "<script>alert('the old password does not match')</script>";
  echo <<< HTML
  <head>
      <title>Redirecting...</title>
  </head>
  <body>
      You are being automatically redirected to a new location.<br />
      If your browser does not redirect you in few seconds, or you do
      not wish to wait, <a href="you.php">click here</a>.
  </body>
  HTML;
  exit();
}

if ($oldpass == $pass){
  echo "<script>alert('The new password must not match the old one')</script>";
  echo <<< HTML
  <head>
      <title>Redirecting...</title>
  </head>
  <body>
      You are being automatically redirected to a new location.<br />
      If your browser does not redirect you in few seconds, or you do
      not wish to wait, <a href="you.php">click here</a>.
  </body>
  HTML;
  exit();
}
$sql = "update contestants set password = '$pass' where login = '$id' and password = '$oldpass'";
$_SESSION['pas'] = $pass;
$result = $mysqli->query($sql);

$pred = $_SERVER['HTTP_REFERER'];
header("Location: $pred");

?>
