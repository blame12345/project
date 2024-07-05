<?php
session_start();
session_destroy();
$pred = $_SERVER['HTTP_REFERER'];
header("Location: $pred");
?>
