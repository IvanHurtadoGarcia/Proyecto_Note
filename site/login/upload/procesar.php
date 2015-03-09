<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>
	<body>
<?php
          include("conectar.php");
		  $dbi = conectarBd();
		  
		  $idarti=$_REQUEST["id_art"];
          $tit=$_REQUEST["titulo"];
		  $subtit=$_REQUEST["subtitulo"];
		  $artic=$_REQUEST["articulo"];
		  $date=$_REQUEST["fecha"];
		  
		  $ruta="..site/login/upload/imagenes";
          $archivo=$_FILES['imagen']['tmp_name'];
          $nombreArchivo=$_FILES['imagen']['name'];
          move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
          $ruta=$ruta."/".$nombreArchivo;
          $id=$_POST['id_img'];

		  
mysql_query("insert into vida_tecno values($idarti,'$tit','$subtit','$artic','$date')");

mysql_query("insert into img_vida_tecno values($id,'$ruta')");
 
 
 
echo "<center><br><br><br><h4>La Inscripción fue realizada satisfactoriamente, para acceder haga clic <a href=\"index.php\">Aquí</a></h4><br><br><br></center><br> ";
 
echo "<center></center>";




?>
</body>