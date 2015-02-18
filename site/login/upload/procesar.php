<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>
	<body>
<?php
          include("conectar.php");
		
		  conectarBd();
         $titulo=$_REQUEST["titulo"];
		 $subtitulo=$_REQUEST["subtitulo"];
		 $articulo=$_REQUEST["articulo"];
		 $fecha=$_REQUEST["fecha"];
		 
		  $ruta="..upload/imagenes";
          $archivo=$_FILES['imagen']['tmp_name'];
          $nombreArchivo=$_FILES['imagen']['name'];
          move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
          $ruta=$ruta."/".$nombreArchivo;




		 
$insertar=mysql_query("insert into vida_tecno (titulo,subtitulo,articulo,image,fecha) values('$tittle','$subtittle','$article','".$ruta."','$date')");



if($insertar)
{
	"<html>
		<head>
		
		
		</head>
		<body>
			
			<script>
			
				alert('articulo insertado con exito');
			
			</script>
		</body>
    
    
    
    </html>";
}else{
	
	echo "<html>
		<head>
		
		
		</head>
		<body>
			
			<script>
			
				alert('La insercion Fallo');
			
			</script>
		</body>
    
    
    
    </html>";
}

?>
</body>