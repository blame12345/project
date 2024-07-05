<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
  <title>The Finals</title>
</head>
<body>
<?php
    include 'header.php';
    include 'contestants_page.php';
    include 'footer.php';
?>
<div class="spac">
  <div>
<button onclick="youf()" class="acc"> YOU </button>
<?php
include("config_pd.php");
$mysqli = mysqli_connect('localhost', $bd_user_login, $bd_password, $bd_name);
if (isset($_SESSION["is_auth"]) and $_SESSION["is_auth"]){
  $d = $_SESSION['log'];
  $sql = "select avatar from contestants where login = '$d'";
  $sq = mysqli_fetch_assoc($mysqli-> query($sql));
  if ($sq['avatar'] == ''){
    $f = 'other/namatama.webp';
  }
  else{
      $f = $sq['avatar'];
  }
}
else if (!isset($_SESSION["is_auth"]) or !$_SESSION["is_auth"]){
  $f = 'other/namatama.webp';}
  echo <<< HTML
    <img title="avatar" style="position: absolute; top: 20px; left: 110px; border-radius: 50%; border: 1px solid black; vertical-align: middle; width: 128px; height: 128px; border-radius: 50%;" src="$f"> </img>
  HTML;
?>
</div>
  <div>
      <?php
      if (isset($_SESSION["is_auth"]) and $_SESSION["is_auth"]){
      echo <<<HTML
      <form id="ses_form" action="sesdes_script.php" method="post">
      <button  class="acc1"> LOG OUT </button>
      </form>
      HTML;}
      else if (!isset($_SESSION["is_auth"]) or !$_SESSION["is_auth"]){
        echo <<<HTML
        <button onclick="location.href='contestants.php#nav'" class="acc1"> LOG IN </button>
        HTML;}
        ?>
  </div>
</div>

</body>
<script src="script.js"></script>
</html>
