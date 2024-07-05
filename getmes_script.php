
<?php

$SESSION["get"] = true;
include("config_pd.php");
$mysqli = mysqli_connect('localhost', $bd_user_login, $bd_password, $bd_name);

$sql2="select * from contestants";
$result2 = $mysqli->query($sql2);

while ($row = mysqli_fetch_assoc($result2)) {

    echo $row["nickname"];
    echo " ";
    echo $row["lname"];

}
}
?>
