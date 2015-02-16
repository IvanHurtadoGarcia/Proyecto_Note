<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "note_network"; 
 
$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
mysql_select_db($bd_base, $con); 
 
//variables POST
  $tit=$_POST['titulo'];
  $subtit=$_POST['subtitulo'];
  $arti=$_POST['articulo'];
  $img=$_POST['imagen'];
  $date=$_POST['fecha'];
 
//registra los datos del empleados
  $sql="INSERT INTO vida_tecno (titulo, subtitulo, articulo, imagen, date) VALUES ('$tit', '$subtit', '$arti','$img','$date')";
mysql_query($sql,$con) or die('Error. '.mysql_error());
 
include('consulta.php');
?>