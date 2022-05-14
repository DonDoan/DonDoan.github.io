<?php
session_start();
// unset($_SESSION["id"]);
unset($_SESSION["login_user"]);
header('Location: http://localhost/badon_test20220420/index.php');
?>