<?php
 		session_start();
		include('php_conexion.php');
		
		if(!$_SESSION['tipo_usu']=='a'){
			header('location:error.php');
		}
		$nombre='';$tipo='u';$usuario='';$con='';
		if(!empty($_GET['id'])){	
			$id=$_GET['id'];
			$can=mysql_query("SELECT * FROM usuarios where id=$id");
			if($dato=mysql_fetch_array($can)){
				$con=$dato['con'];
				$nombre=$dato['nombre'];
				$usuario=$dato['usu'];
				$tipo=$dato['tipo'];
				$boton="Actualizar Usuario";	
			}
		}else{
			$id='';
			$boton="Guardar Usuario";
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
<blockquote>
 <a href="usuarios.php" class="btn btn-info"><i class="icon-list-alt"></i> Ir Listado de Usuario</a>
 </blockquote>
<div align="center">
<form name="form1" method="post" action="">
<table width="40%" border="0">
  <tr>
    <td colspan="3">
		<?php
		if(!empty($_POST['nombre']) and !empty($_POST['usu'])){
			$nombre=$_POST['nombre'];
			$usuario=$_POST['usu'];
			$tipo=$_POST['tipo'];
			if(!empty($_POST['con'])){
				$con=$_POST['con'];
			}
			
			if($boton=='Actualizar Usuario'){
				$xSQL="Update usuarios Set  nombre='$nombre',
											usu='$usuario',
											tipo='$tipo'
							Where id=$id";
				mysql_query($xSQL);
				echo '<div class="alert alert-success">
						  <button type="button" class="close" data-dismiss="alert">X</button>
						  <strong>Usuario!</strong> Actualizado con Exito
					</div>';
			}else{
				$can=mysql_query("SELECT * FROM usuarios where usu='$usuario'");
				if(!$dato=mysql_fetch_array($can)){
					if (!preg_match("/\\s/", $usuario)){ 
						$sql = "INSERT INTO usuarios (nombre, usu, con, tipo, estado) 
									 VALUES ('$nombre','$usuario','$con','$tipo','s')";
						mysql_query($sql);
						$nombre='';$tipo='u';$usuario='';$con='';
						echo '	<div class="alert alert-success">
								  <button type="button" class="close" data-dismiss="alert">X</button>
								  <strong>Usuario!</strong> Guardado con Exito
								</div>';
					}else{
						echo '	<div class="alert alert-error">
									<button type="button" class="close" data-dismiss="alert">X</button>
									<strong>Error!</strong> No se permiten espacios en la cuenta de usuario.
								</div>';
								$usuario='';$con='';
					}
				}else{
					echo '	<div class="alert alert-error">
									<button type="button" class="close" data-dismiss="alert">X</button>
									<strong>Error!</strong> Este usuario ya existe.
								</div>';
								$usuario='';
				}
			}
		}
        ?>
    </td>
    </tr>
  <tr>
    <td width="44%"><strong>Nombre y Apellido</strong></td>
    <td colspan="2"><input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" autocomplete="off" required></td>
  </tr>
  <tr>
    <td><strong>Nombre de Usuario</strong></td>
    <td colspan="2"><input type="text" name="usu" id="usu" value="<?php echo $usuario; ?>" <?php if(!empty($usuario)){echo 'readonly';} ?> autocomplete="off" required></td>
  </tr>
  <tr>
    <td><strong>Contraseña</strong></td>
    <td colspan="2">
    	<?php 
			if(!empty($con)){ 
				echo '<strong>'.$con.'</strong>';
			}else{
				echo '<input type="password" name="con" id="con" required>';	
			}
		?>
    	
    </td>
  </tr>
  <tr>
    <td><strong>Tipo de Usuario</strong></td>
    <td colspan="2">
    	<input type="radio" name="tipo" id="tipo" value="a"<?php if($tipo=="a"){ echo 'checked'; } ?>> Administrador<br>
        <input type="radio" name="tipo" id="tipo" value="u"<?php if($tipo=="u"){ echo 'checked'; } ?>> Usuario
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
      <button type="submit" class="btn btn-info"><i class="icon-ok"></i> <?php echo $boton; ?></button>    </td>
    <td width="56%">
      <?php if($boton=='Actualizar Usuario'){
          	echo '<button class="btn btn-info"><a href="c_usuario.php"><i class="icon-ok"></i> Ingresar Nuevo</a></button>';
        } ?>
    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</div>
</body>
</html>