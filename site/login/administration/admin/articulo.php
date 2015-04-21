<?php
 		session_start();
		include('php_conexion.php'); 
		if(!$_SESSION['tipo_usu']=='a' or !$_SESSION['tipo_usu']=='u'){
			header('location:error.php');
		}
			
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blanco</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet">
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/bootstrap-affix.js"></script>
    <script src="js/holder/holder.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>
    <script src="js/application.js"></script>
   

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
<div align="center">
    <table width="50%" border="0">
      <tr>
        <td colspan="2"><strong><center>Crear Nuevas Noticias o Articulos</center></strong></td>
        </tr>
        <tr>
        <td colspan="2">
        <?php 
			if(!empty($_POST['titulo']) and empty($_POST['id'])){
				$titulo=$_POST['titulo'];	$intr=$_POST['intro'];
				$nota=$_POST['nota'];		$tipo=$_POST['tipo'];
				$fecha= date("Y-m-d H:i:s");
				
                if($tipo=="1"){

				$can=mysql_query("SELECT MAX(id) as numero FROM noticias");
				if($dato=mysql_fetch_array($can)){
					$id=$dato['numero']+1;
				}else{
					$id=1;
				}
				
				$sql="INSERT INTO noticias (titulo, intro, texto, tipo, fecha) VALUES 
					('$titulo','$intr','$nota','$tipo','$fecha')";
				mysql_query($sql);
				
				//subir la imagen del articulo
				$nameimagen = $_FILES['imagen']['name'];
				$tmpimagen = $_FILES['imagen']['tmp_name'];
				$extimagen = pathinfo($nameimagen);
				$urlnueva = "secciones/noticiast/".$id.".jpg";			
				if(is_uploaded_file($tmpimagen)){
					copy($tmpimagen,$urlnueva);	
				}
				////////////////////MENSAJE DE CONFIRMACION QUE TODO OK/////////////////
				echo '<div class="alert alert-success"><strong>Noticia Registrada con Exito!</strong></div>';

                   }else if($tipo=="2"){

                    $can=mysql_query("SELECT MAX(id) as numero FROM videojuegos");
                if($dato=mysql_fetch_array($can)){
                    $id=$dato['numero']+1;
                }else{
                    $id=1;
                }
                
                $sql="INSERT INTO videojuegos (titulo, intro, texto, tipo, fecha) VALUES 
                    ('$titulo','$intr','$nota','$tipo','$fecha')";
                mysql_query($sql);
                
                //subir la imagen del articulo
                $nameimagen = $_FILES['imagen']['name'];
                $tmpimagen = $_FILES['imagen']['tmp_name'];
                $extimagen = pathinfo($nameimagen);
                $urlnueva = "secciones/videojuegos/".$id.".jpg";         
                if(is_uploaded_file($tmpimagen)){
                    copy($tmpimagen,$urlnueva); 
                }
                ////////////////////MENSAJE DE CONFIRMACION QUE TODO OK/////////////////
                echo '<div class="alert alert-success"><strong>Noticia Registrada con Exito!</strong></div>';

                   }else if($tipo=="3"){

                    $can=mysql_query("SELECT MAX(id) as numero FROM reviews");
                if($dato=mysql_fetch_array($can)){
                    $id=$dato['numero']+1;
                }else{
                    $id=1;
                }
                
                $sql="INSERT INTO reviews (titulo, intro, texto, tipo, fecha) VALUES 
                    ('$titulo','$intr','$nota','$tipo','$fecha')";
                mysql_query($sql);
                
                //subir la imagen del articulo
                $nameimagen = $_FILES['imagen']['name'];
                $tmpimagen = $_FILES['imagen']['tmp_name'];
                $extimagen = pathinfo($nameimagen);
                $urlnueva = "secciones/reviews/".$id.".jpg";         
                if(is_uploaded_file($tmpimagen)){
                    copy($tmpimagen,$urlnueva); 
                }
                ////////////////////MENSAJE DE CONFIRMACION QUE TODO OK/////////////////
                echo '<div class="alert alert-success"><strong>Noticia Registrada con Exito!</strong></div>';

                   }else if($tipo=="4"){

                    $can=mysql_query("SELECT MAX(id) as numero FROM eventos");
                if($dato=mysql_fetch_array($can)){
                    $id=$dato['numero']+1;
                }else{
                    $id=1;
                }
                
                $sql="INSERT INTO eventos (titulo, intro, texto, tipo, fecha) VALUES 
                    ('$titulo','$intr','$nota','$tipo','$fecha')";
                mysql_query($sql);
                
                //subir la imagen del articulo
                $nameimagen = $_FILES['imagen']['name'];
                $tmpimagen = $_FILES['imagen']['tmp_name'];
                $extimagen = pathinfo($nameimagen);
                $urlnueva = "secciones/eventos/".$id.".jpg";         
                if(is_uploaded_file($tmpimagen)){
                    copy($tmpimagen,$urlnueva); 
                }
                ////////////////////MENSAJE DE CONFIRMACION QUE TODO OK/////////////////
                echo '<div class="alert alert-success"><strong>Noticia Registrada con Exito!</strong></div>';

                   }else if($tipo=="5"){

                    $can=mysql_query("SELECT MAX(id) as numero FROM recomentacionesm");
                if($dato=mysql_fetch_array($can)){
                    $id=$dato['numero']+1;
                }else{
                    $id=1;
                }
                
                $sql="INSERT INTO recomendacionesm (titulo, intro, texto, tipo, fecha) VALUES 
                    ('$titulo','$intr','$nota','$tipo','$fecha')";
                mysql_query($sql);
                
                //subir la imagen del articulo
                $nameimagen = $_FILES['imagen']['name'];
                $tmpimagen = $_FILES['imagen']['tmp_name'];
                $extimagen = pathinfo($nameimagen);
                $urlnueva = "secciones/recomendacionesm/".$id.".jpg";         
                if(is_uploaded_file($tmpimagen)){
                    copy($tmpimagen,$urlnueva); 
                }
                ////////////////////MENSAJE DE CONFIRMACION QUE TODO OK/////////////////
                echo '<div class="alert alert-success"><strong>Noticia Registrada con Exito!</strong></div>';

                   }else if($tipo=="6"){

                    $can=mysql_query("SELECT MAX(id) as numero FROM fotografia");
                if($dato=mysql_fetch_array($can)){
                    $id=$dato['numero']+1;
                }else{
                    $id=1;
                }
                
                $sql="INSERT INTO fotografia(titulo, intro, texto, tipo, fecha) VALUES 
                    ('$titulo','$intr','$nota','$tipo','$fecha')";
                mysql_query($sql);
                
                //subir la imagen del articulo
                $nameimagen = $_FILES['imagen']['name'];
                $tmpimagen = $_FILES['imagen']['tmp_name'];
                $extimagen = pathinfo($nameimagen);
                $urlnueva = "secciones/fotografia/".$id.".jpg";         
                if(is_uploaded_file($tmpimagen)){
                    copy($tmpimagen,$urlnueva); 
                }
                ////////////////////MENSAJE DE CONFIRMACION QUE TODO OK/////////////////
                echo '<div class="alert alert-success"><strong>Noticia Registrada con Exito!</strong></div>';

                   }else if($tipo=="7"){

                    $can=mysql_query("SELECT MAX(id) as numero FROM video");
                if($dato=mysql_fetch_array($can)){
                    $id=$dato['numero']+1;
                }else{
                    $id=1;
                }
                
                $sql="INSERT INTO video (titulo, intro, texto, tipo, fecha) VALUES 
                    ('$titulo','$intr','$nota','$tipo','$fecha')";
                mysql_query($sql);
                
                //subir la imagen del articulo
                $nameimagen = $_FILES['imagen']['name'];
                $tmpimagen = $_FILES['imagen']['tmp_name'];
                $extimagen = pathinfo($nameimagen);
                $urlnueva = "secciones/video/".$id.".jpg";         
                if(is_uploaded_file($tmpimagen)){
                    copy($tmpimagen,$urlnueva); 
                }
                ////////////////////MENSAJE DE CONFIRMACION QUE TODO OK/////////////////
                echo '<div class="alert alert-success"><strong>Noticia Registrada con Exito!</strong></div>';

                   }else if($tipo=="8"){

                    $can=mysql_query("SELECT MAX(id) as numero FROM salud");
                if($dato=mysql_fetch_array($can)){
                    $id=$dato['numero']+1;
                }else{
                    $id=1;
                }
                
                $sql="INSERT INTO salud (titulo, intro, texto, tipo, fecha) VALUES 
                    ('$titulo','$intr','$nota','$tipo','$fecha')";
                mysql_query($sql);
                
                //subir la imagen del articulo
                $nameimagen = $_FILES['imagen']['name'];
                $tmpimagen = $_FILES['imagen']['tmp_name'];
                $extimagen = pathinfo($nameimagen);
                $urlnueva = "secciones/salud/".$id.".jpg";         
                if(is_uploaded_file($tmpimagen)){
                    copy($tmpimagen,$urlnueva); 
                }
                ////////////////////MENSAJE DE CONFIRMACION QUE TODO OK/////////////////
                echo '<div class="alert alert-success"><strong>Noticia Registrada con Exito!</strong></div>';

                   }else if($tipo=="9"){

                    $can=mysql_query("SELECT MAX(id) as numero FROM internacional");
                if($dato=mysql_fetch_array($can)){
                    $id=$dato['numero']+1;
                }else{
                    $id=1;
                }
                
                $sql="INSERT INTO internacional (titulo, intro, texto, tipo, fecha) VALUES 
                    ('$titulo','$intr','$nota','$tipo','$fecha')";
                mysql_query($sql);
                
                //subir la imagen del articulo
                $nameimagen = $_FILES['imagen']['name'];
                $tmpimagen = $_FILES['imagen']['tmp_name'];
                $extimagen = pathinfo($nameimagen);
                $urlnueva = "secciones/internacional/".$id.".jpg";         
                if(is_uploaded_file($tmpimagen)){
                    copy($tmpimagen,$urlnueva); 
                }
                ////////////////////MENSAJE DE CONFIRMACION QUE TODO OK/////////////////
                echo '<div class="alert alert-success"><strong>Noticia Registrada con Exito!</strong></div>';

                   }else if($tipo=="10"){

                    $can=mysql_query("SELECT MAX(id) as numero FROM nacional");
                if($dato=mysql_fetch_array($can)){
                    $id=$dato['numero']+1;
                }else{
                    $id=1;
                }
                
                $sql="INSERT INTO nacional (titulo, intro, texto, tipo, fecha) VALUES 
                    ('$titulo','$intr','$nota','$tipo','$fecha')";
                mysql_query($sql);
                
                //subir la imagen del articulo
                $nameimagen = $_FILES['imagen']['name'];
                $tmpimagen = $_FILES['imagen']['tmp_name'];
                $extimagen = pathinfo($nameimagen);
                $urlnueva = "secciones/nacional/".$id.".jpg";         
                if(is_uploaded_file($tmpimagen)){
                    copy($tmpimagen,$urlnueva); 
                }
                ////////////////////MENSAJE DE CONFIRMACION QUE TODO OK/////////////////
                echo '<div class="alert alert-success"><strong>Noticia Registrada con Exito!</strong></div>';

                   }else if($tipo=="11"){

                    $can=mysql_query("SELECT MAX(id) as numero FROM opinion");
                if($dato=mysql_fetch_array($can)){
                    $id=$dato['numero']+1;
                }else{
                    $id=1;
                }
                
                $sql="INSERT INTO opinion (titulo, intro, texto, tipo, fecha) VALUES 
                    ('$titulo','$intr','$nota','$tipo','$fecha')";
                mysql_query($sql);
                
                //subir la imagen del articulo
                $nameimagen = $_FILES['imagen']['name'];
                $tmpimagen = $_FILES['imagen']['tmp_name'];
                $extimagen = pathinfo($nameimagen);
                $urlnueva = "secciones/opinion/".$id.".jpg";         
                if(is_uploaded_file($tmpimagen)){
                    copy($tmpimagen,$urlnueva); 
                }
                ////////////////////MENSAJE DE CONFIRMACION QUE TODO OK/////////////////
                echo '<div class="alert alert-success"><strong>Noticia Registrada con Exito!</strong></div>';

                   }else if($tipo=="12"){

                    $can=mysql_query("SELECT MAX(id) as numero FROM lecturas");
                if($dato=mysql_fetch_array($can)){
                    $id=$dato['numero']+1;
                }else{
                    $id=1;
                }
                
                $sql="INSERT INTO lecturas (titulo, intro, texto, tipo, fecha) VALUES 
                    ('$titulo','$intr','$nota','$tipo','$fecha')";
                mysql_query($sql);
                
                //subir la imagen del articulo
                $nameimagen = $_FILES['imagen']['name'];
                $tmpimagen = $_FILES['imagen']['tmp_name'];
                $extimagen = pathinfo($nameimagen);
                $urlnueva = "secciones/lecturas/".$id.".jpg";         
                if(is_uploaded_file($tmpimagen)){
                    copy($tmpimagen,$urlnueva); 
                }
                ////////////////////MENSAJE DE CONFIRMACION QUE TODO OK/////////////////
                echo '<div class="alert alert-success"><strong>Noticia Registrada con Exito!</strong></div>';

                   }else if($tipo=="13"){

                    $can=mysql_query("SELECT MAX(id) as numero FROM descargas");
                if($dato=mysql_fetch_array($can)){
                    $id=$dato['numero']+1;
                }else{
                    $id=1;
                }
                
                $sql="INSERT INTO descargas (titulo, intro, texto, tipo, fecha) VALUES 
                    ('$titulo','$intr','$nota','$tipo','$fecha')";
                mysql_query($sql);
                
                //subir la imagen del articulo
                $nameimagen = $_FILES['imagen']['name'];
                $tmpimagen = $_FILES['imagen']['tmp_name'];
                $extimagen = pathinfo($nameimagen);
                $urlnueva = "secciones/descargas/".$id.".jpg";         
                if(is_uploaded_file($tmpimagen)){
                    copy($tmpimagen,$urlnueva); 
                }
                ////////////////////MENSAJE DE CONFIRMACION QUE TODO OK/////////////////
                echo '<div class="alert alert-success"><strong>Noticia Registrada con Exito!</strong></div>';

                   }else if($tipo=="14"){

                    $can=mysql_query("SELECT MAX(id) as numero FROM random");
                if($dato=mysql_fetch_array($can)){
                    $id=$dato['numero']+1;
                }else{
                    $id=1;
                }
                
                $sql="INSERT INTO random (titulo, intro, texto, tipo, fecha) VALUES 
                    ('$titulo','$intr','$nota','$tipo','$fecha')";
                mysql_query($sql);
                
                //subir la imagen del articulo
                $nameimagen = $_FILES['imagen']['name'];
                $tmpimagen = $_FILES['imagen']['tmp_name'];
                $extimagen = pathinfo($nameimagen);
                $urlnueva = "secciones/random/".$id.".jpg";         
                if(is_uploaded_file($tmpimagen)){
                    copy($tmpimagen,$urlnueva); 
                }
                ////////////////////MENSAJE DE CONFIRMACION QUE TODO OK/////////////////
                echo '<div class="alert alert-success"><strong>Noticia Registrada con Exito!</strong></div>';

                   }else{
                    echo '<div class="alert alert-success"><strong>Error al Subir el Articulo!, Verifique los campos</strong></div>';
                   }

			}
			



			if(!empty($_GET['id'])){
			$id=$_GET['id'];
			$sqll=mysql_query("SELECT * FROM noticias where id=$id");
			if($dato=mysql_fetch_array($sqll)){
				$titulo=$dato['titulo'];
				$intro=$dato['intro'];
				$texto=$dato['texto'];
				$tipo=$dato['tipo'];
			}
		}else{
			$id='';	
			$titulo='';				$intro='';				$texto='';				$tipo='';
		}
		?>
        </td>
        </tr>
        <tr>
        <td colspan="2">
        <form action="" method="post" enctype="multipart/form-data" name="form1">
        	<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
        	<table class="table table-hover" border="0">
        	    <tr>
        <td width="31%"><strong>Titulo de Noticia</strong></td>
        <td width="69%"><input type="text" name="titulo" id="titulo" required autocomplete="off" autofocus value="<?php echo $dato['titulo']; ?>"></td>
      </tr>
      <tr>
        <td><strong>Introducion de la Noticia</strong></td>
        <td><textarea name="intro" id="intro" required><?php echo $dato['intro']; ?></textarea></td>
      </tr>
      <tr>
        <td><strong>Nota</strong></td>
        <td><textarea name="nota" id="nota" required><?php echo $dato['texto']; ?></textarea></td>
      </tr>
      <tr>
        <td><strong>Tipo</strong></td>
        <td>
          	<select name="tipo" id="tipo">
            	<?php 
					$can=mysql_query("SELECT * FROM tipos WHERE estado='s'");
					while($dato=mysql_fetch_array($can)){
				?>
            			<option value="<?php echo $dato['id']; ?>" <?php if($tipo==$dato['id']){ echo 'selected'; } ?>><?php echo $dato['nombre']; ?></option>
                <?php } ?>
        	</select>
        </td>
      </tr>
      <tr>
        <td><strong>Imagen de Presentacion</strong></td>
        <td><input type="file" class="btn" name="imagen" id="imagen"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" class="btn btn-info" name="button" id="button" value="Guardar Noticia"></td>
      </tr>
   	      	</table>
          </form>
          </td>
        </tr>
      
    </table>
  
</div>
</body>
</html>