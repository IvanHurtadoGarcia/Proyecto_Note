<?php
//valida la sesion del usuario
session_start();
//comprobamos autentificacion
   if($_SESSION["autentificado"]!="si"){
    header("Location: admin.php");
	exit();
   }   

?>