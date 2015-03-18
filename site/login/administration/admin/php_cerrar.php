<?php
session_start();
//unset($_SESSION['usuario']);
//unset($_SESSION['password']);


session_destroy();
//$parametros_cookies = session_get_cookie_params();
//setcookie(session_name(),0,1,$parametros_cookies["path"]);
$_SESSION['usu'] = "";
$_SESSION['con'] = "";
header("Cache-Control: private");
header("Location: index.php");


?>