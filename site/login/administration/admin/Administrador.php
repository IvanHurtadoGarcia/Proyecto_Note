<?php
		session_start();
		include('php_conexion.php'); 
		if(!$_SESSION['tipo_usu']=='a' or !$_SESSION['tipo_usu']=='u'){
			header('location:error.php');
		}
		if($_SESSION['tipo_usu']=='a'){
			$titulo='Administrador/a';
		}else{
			$titulo='Usuario';
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $titulo; ?></title>
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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
	background-color: #FFF;
	background-image: url(img/bg37.png);
}
</style>
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">
<div align="center">
<table width="80%" border="0">
  <tr>
    <td>
    <div id="navbar-example" class="navbar navbar-static">
      <div class="navbar-inner">
        <div class="container" style="width: auto;">
          <a class="brand" href="presentacion.php" target="admin">Inicio</a>
          <ul class="nav" role="navigation">
            <li class="dropdown">
              <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Usuario <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="usuarios.php" target="admin">Buscar Usuarios</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="c_usuario.php" target="admin">Crear Usuarios</a></li>
                <!--<li role="presentation" class="divider"></li>-->  
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Editar Contenido<b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
              	<li role="presentation"><a role="menuitem" tabindex="-1" href="datos_empresa.php" target="admin">Datos Empresa</a></li>
              	<li role="presentation"><a role="menuitem" tabindex="-1" href="titulos.php" target="admin">Editar Titulos</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="articulo.php" target="admin">Crear Articulo</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="l_articulo.php" target="admin">Consultar Articulos</a></li>
           		<li role="presentation"><a role="menuitem" tabindex="-1" href="tipo_noticias.php" target="admin">Tipo de Noticias</a></li>
           <!--      <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="" target="admin">Buscar Proveedor</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="" target="admin">Crear Proveedor</a></li>
                <li role="presentation" class="divider"></li> -->
              </ul>
            </li>
            </li>
          </ul>
          <ul class="nav pull-right">
            <li id="fat-menu" class="dropdown">
              <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Hola! <?php echo $_SESSION['username']; ?> <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="cambiar_clave.php" target="admin"><i class="icon-refresh"></i> Cambiar Contraseña</a></li>
               <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Actualizar Informacion</a></li> -->
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="php_cerrar.php"><i class="icon-off"></i> Salir</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </td>
  </tr>
  <tr>
    <td><iframe src="presentacion.php" frameborder="0" scrolling="auto" name="admin" width="100%" height="500"></iframe></td>
  </tr>
  <tr>
    <td>
    <pre><center><strong><a href="https://www.facebook.com/noteinside" target="_blank" style="color:#000">NoteInsideNetwork 2015 - M&eacute;xico</a></strong></center></pre>
    </td>
  </tr>
</table>
</body>
</html>