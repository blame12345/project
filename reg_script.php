<?php
session_start();
include("config_pd.php");
$mysqli = mysqli_connect('localhost', $bd_user_login, $bd_password, $bd_name);
if ($mysqli->connect_errno){
    printf("no connect: %s\n", $mysqli_connect_error);
    exit();
}
if (!empty($_POST['login1']) and !empty($_POST['password1']) and !empty($_POST['name'])){
  $login = $_POST['login1'];
  $pass = $_POST['password1'];
  $nick = $_POST['name'];

  $sql1 = "select login from contestants";
  $res = $mysqli->query($sql1);

  while ($row = mysqli_fetch_assoc($res)){
    if ($login == $row['login']){
      echo "<script>alert('the login already taken')</script>";
      echo <<< HTML
      <head>
          <title>Redirecting...</title>
      </head>
      <body>
          You are being automatically redirected to a new location.<br />
          If your browser does not redirect you in few seconds, or you do
          not wish to wait, <a href="contestants.php">click here</a>.
      </body>
      HTML;
      exit();
    }
  }

  $sql="insert into contestants (login, password, nickname) values ('$login','$pass', '$nick')";
  $sql1 = "select login, password from contestants where login = '$login' and password = '$pass' ";
  $result = $mysqli->query($sql);
  $result1 = $mysqli->query($sql1);
  $a = mysqli_fetch_assoc($result1);
  $_SESSION['log'] = $a['login'];
  $_SESSION['pas'] = $a['password'];
  $_SESSION['is_auth'] = true;
  $pred = $_SERVER['HTTP_REFERER'];
  header("Location: $pred");
}
else{
    echo "<script>alert('Fill in all the fields')</script>";
    echo <<< HTML
    <head>
        <title>Redirecting...</title>
    </head>
    <body>
        You are being automatically redirected to a new location.<br />
        If your browser does not redirect you in few seconds, or you do
        not wish to wait, <a href="contestants.php">click here</a>.
    </body>
    HTML;
}
?>
