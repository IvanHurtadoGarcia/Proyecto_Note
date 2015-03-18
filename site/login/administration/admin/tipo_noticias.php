<?php
 		session_start();
		include('php_conexion.php'); 
		if(!$_SESSION['tipo_usu']=='a'){
			header('location:error.php');
		}else{
			if(!empty($_GET['estado'])){
				$codig=$_GET['estado'];
				$cans=mysql_query("SELECT * FROM tipos WHERE estado='s' and id=$codig");
				if($d=mysql_fetch_array($cans)){
					$estado='n';
				}else{
					$estado='s';
				}
				$sql="UPDATE tipos SET estado='$estado' WHERE id=$codig";
				mysql_query($sql);
				header('location:tipo_noticias.php');
			}
		}
		
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
    <title>Categorias</title>
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
<table width="80%" border="0" class="table">
  <tr class="info">
    <td><center>
    <strong>Administrar Tipo de Noticias</strong>
    </center></td>
  </tr>
  <td>
  <?php
  ///////////////////////////////////////////////////////////////////////////////////////////
	if(!empty($_POST['s_nombre'])){
		$ss_codigo=$_POST['s_codigo'];	$ss_nombre=$_POST['s_nombre'];

		$can=mysql_query("SELECT * FROM tipos WHERE id=$ss_codigo");
		if($dato=mysql_fetch_array($can)){
		//actualizar seccion
			$xSQL="Update tipos Set nombre='$ss_nombre' Where id=$ss_codigo";
			mysql_query($xSQL);
			echo '	<div class="alert alert-success">
						  <button type="button" class="close" data-dismiss="alert">X</button>
						  <strong>Tipo de Noticia!</strong> Actualizado con Exito
					</div>';
		}else{
		//guardar seccion
			$sql="INSERT INTO tipos (nombre, estado) VALUES ('$ss_nombre','s')";
				mysql_query($sql);
			echo '	<div class="alert alert-success">
						  <button type="button" class="close" data-dismiss="alert">X</button>
						  <strong>Tipo de Noticia!</strong> Guardado con Exito
					</div>';
		}
	}
	?>

<table width="80%" border="0">
  <tr>
    <td width="48%">
    <div style="width: 90%; height: 250px; overflow-y: scroll;">
    <table width="80%" border="0" class="table">
      <tr>
        <td width="8%"><strong><center></center></strong></td>
        <td width="54%"><strong>Nombre</strong></td>
        <td width="38%"><center><strong>Estado</strong></center></td>
      </tr>
      <?php 
		$can=mysql_query("SELECT * FROM tipos");
		while($dato=mysql_fetch_array($can)){
			$nombre=$dato['nombre'];
			$id=$dato['id'];
			if($dato['estado']=="n"){
				$estado='<span class="label label-important">Inactivo</span>';
			}else{
				$estado='<span class="label label-success">Activo</span>';
			}
	  ?>
      <tr>
        <td>&nbsp;</td>
        <td><a href="tipo_noticias.php?codigo=<?php echo $id; ?>"><?php echo $nombre; ?></a></td>
        <td><center><a href="tipo_noticias.php?estado=<?php echo $id; ?>"><?php echo $estado; ?></a></center></td>
      </tr>
      <?php } ?>
    </table>
    </div>
    </center>
    </td>
    <td width="4%">&nbsp;</td>
    <td width="48%">
   
    <?php 
		if(empty($_GET['codigo'])){
			$can=mysql_query("SELECT MAX(id) as numero FROM tipos");
			if($dato=mysql_fetch_array($can)){
				$s_codigo=$dato['numero']+1;
				$s_nombre="";
				$boton="Guardar Tipo de Noticia";
			}
		}else{
			$s_codigo=$_GET['codigo'];
			$can=mysql_query("SELECT * FROM tipos WHERE id=$s_codigo");
			if($dato=mysql_fetch_array($can)){
				$s_nombre=$dato['nombre'];
			}
			$boton="Actualizar Tipo de Noticia";
		}
		?>
    <div class="control-group info">
    <form name="form1" method="post" action="">
        <input type="hidden" name="s_codigo" id="s_codigo" value="<?php echo $s_codigo; ?>" >
        <label for="textfield2">Nombre</label>
        <input type="text" name="s_nombre" id="s_nombre" value="<?php echo $s_nombre; ?>" required autocomplete="off"><br><br>
        <button tabindex="submit" class="btn btn-primary"><?php echo $boton; ?></button>
         <?php if($boton=='Actualizar Tipo de Noticia'){ ?> <a href="tipo_noticias.php" class="btn">Cancelar</a><?php } ?>
    </form>
    </div>
    </td>
  </tr>
</table>
</td>
  </tr>
</table>
</div>
</body>
</html>