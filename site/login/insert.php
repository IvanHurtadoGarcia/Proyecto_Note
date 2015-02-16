<?php
		

		
		
		 $titulo=$_REQUEST["titulo"];
		 $subtitulo=$_REQUEST["subtitulo"];
		 $articulo=$_REQUEST["articulo"];
		 
		 $ruta="../login/img";
         $archivo=$_FILES['imagen']['tmp_name'];
         $nombreArchivo=$_FILES['imagen']['name'];
         move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
         $ruta=$ruta."/".$nombreArchivo;
         
		 
		 $fecha=$_REQUEST["fecha"];
		 
		 include("access.php");
		 conexBD();
		 
		mysql_query("insert into vida_tecno (titulo,subtitulo,articulo,fecha)
		values('$titulo','$subtitulo','$articulo','$fecha')");
		$insertar=mysql_query("INSERT INTO vida_tecno VALUES('".$ruta."')");
		
		echo "Se Insert&oacute; el registro";
		
        	
		
		
		
	
		
			
        ?>