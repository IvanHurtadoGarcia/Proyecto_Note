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
		  
		  $idart=$_REQUEST["id_art"];
          $titulo=$_REQUEST["titulo"];
		  $subtitulo=$_REQUEST["subtitulo"];
		  $articulo=$_REQUEST["articulo"];
		  $fecha=$_REQUEST["fecha"];
		  
		  $id=$_REQUEST["id_img"];
		  $ruta="..upload/imagenes";
          $archivo=$_FILES['imagen']['tmp_name'];
          $nombreArchivo=$_FILES['imagen']['name'];
          move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
          $ruta=$ruta."/".$nombreArchivo;

		  
$query=("insert into vida_tecno (Id_art,titulo,subtitulo,articulo,date)
		values($idart,'$titulo','$subtitulo','$articulo','$fecha')");
mysql_query($query,$dbi) or die("<center><br><br><br><h4>NO PUDO INGRESAR EL REGISTRO registrados</h4><br><br><br></center>");
 
$query=("insert into img_vida_tecno (id,image)
		values($id,'".$ruta."',)");
mysql_query($query,$dbi) or die("<center><br><br><br><h4>NO PUDO INGRESAR EL REGISTRO imagen</h4><br><br><br></center>");
 
 
 
echo "<center><br><br><br><h4>La Inscripción fue realizada satisfactoriamente, para acceder haga clic <a href=\"index.php\">Aquí</a></h4><br><br><br></center><br> ";
 
echo "<center></center>";




?>
</body>