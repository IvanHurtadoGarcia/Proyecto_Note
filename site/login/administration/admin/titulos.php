<?php
 		session_start();
		include('php_conexion.php'); 
		if(!$_SESSION['tipo_usu']=='a'){
			header('location:error.php');
		}
		if(!empty($_POST['titulo'])){
			$t=$_POST['titulo'];
			$c=$_POST['cuadro'];
			$i=$_POST['codigo'];
			$xSQL="Update titulos Set titulo='$t', cuadro='$c' Where id=$i";
			mysql_query($xSQL);
		}

		if(!empty($_POST['intro'])){
			$intr=$_POST['intro'];
			$xSQL="Update empresa Set intro='$intr' Where id=1";
			mysql_query($xSQL);
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
<img src="img/Principal.png" usemap="#Map">
<map name="Map">
  <area shape="rect" coords="10,2,1047,86" href="#titulo1" data-toggle="modal">
  <area shape="rect" coords="9,240,693,286" href="#titulo2" data-toggle="modal">
  <area shape="rect" coords="715,241,1046,285" href="#titulo3" data-toggle="modal">
  <area shape="rect" coords="10,100,1045,222" href="#intro" data-toggle="modal">
</map> 
 <!-- introducion de la web -->
<div id="intro" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Introducion de la WEB</h3>
	</div>
	<div class="modal-body">
		<form name="form4" method="post" action="">
          <label for="textarea"><strong>Introducion</strong></label>
          <textarea name="intro" id="intro"><?php echo $intro; ?></textarea><br>
          <input type="submit" name="button" class="btn" id="button" value="Actualizar Introducion">
        </form>
	</div>
	<div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
	</div>
</div>
<!-- cuadros de titulos -->  	
<div id="titulo1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Editar Titulos</h3>
		</div>
		<div class="modal-body">
			<p><strong>Editar Titulo o Encabezado 1</strong></p>
            <div align="center">
			<?php 
                ///TITULO N1
                $sqll=mysql_query("SELECT * FROM titulos WHERE id=1");
                if($dato=mysql_fetch_array($sqll)){
                    $titulo=$dato['titulo']; $cuadro=$dato['cuadro'];
                }
            ?>
            <form name="form1" method="post" action="">
            <table width="70%" border="0">
              <tr>
                <td width="40%"><strong>Nombre del Titulo:</strong></td>
                <td width="60%">
                	<input type="text" name="titulo" id="titulo" value="<?php echo $titulo; ?>" required>
                    <input name="codigo" type="hidden" value="1">
                </td>
              </tr>
              <tr>
                <td colspan="2"><div align="center"><strong>Tipo de Recuadro:</strong></div></td>
              </tr>
              <tr>
                <td>
                <div align="right">
                <input type="radio" name="cuadro" id="cuadro" value="alert alert-block" <?php if($cuadro=='alert alert-block'){ echo 'checked'; } ?> >
                </div>
                </td>
                
                <td><div class="alert alert-block"><strong>EJEMPLO</strong></div></td>
              </tr>
              <tr>
                <td>
                <div align="right">
                <input type="radio" name="cuadro" id="cuadro" value="alert alert-error" <?php if($cuadro=='alert alert-error'){ echo 'checked'; } ?>>
                </div>
                </td>
                <td><div class="alert alert-error"><strong>EJEMPLO</strong></div></td>
              </tr>
              <tr>
                <td>
                <div align="right">
                <input type="radio" name="cuadro" id="cuadro" value="alert alert-success" <?php if($cuadro=='alert alert-success'){ echo 'checked'; } ?>>	
                </div>
                </td>
                <td><div class="alert alert-success"><strong>EJEMPLO</strong></div></td>
              </tr>
              <tr>
                <td>
                <div align="right">
                <input type="radio" name="cuadro" id="cuadro" value="alert alert-info" <?php if($cuadro=='alert alert-info'){ echo 'checked'; } ?>></td>
                </div>
                <td><div class="alert alert-info"><strong>EJEMPLO</strong></div></td>
              </tr>
              <tr>
                <td colspan="2"><div align="center"><input type="submit" name="button" class="btn" id="button" value="Guardar Cambios"></div></td>
                </tr>
            </table>
            </form>
            </div>
		</div>
   </div>
 
 <!-- titulos numero dos -->
<div id="titulo2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Editar Titulos</h3>
		</div>
		<div class="modal-body">
			<p><strong>Editar Titulo o Encabezado 2</strong></p>
            <div align="center">
			<?php 
                ///TITULO N1
                $sqll=mysql_query("SELECT * FROM titulos WHERE id=2");
                if($dato=mysql_fetch_array($sqll)){
                    $titulo=$dato['titulo']; $cuadro=$dato['cuadro'];
                }
            ?>
            <form name="form1" method="post" action="">
            <table width="70%" border="0">
              <tr>
                <td width="40%"><strong>Nombre del Titulo:</strong></td>
                <td width="60%">
                	<input type="text" name="titulo" id="titulo" value="<?php echo $titulo; ?>" required>
                    <input name="codigo" type="hidden" value="2">
                </td>
              </tr>
              <tr>
                <td colspan="2"><div align="center"><strong>Tipo de Recuadro:</strong></div></td>
              </tr>
              <tr>
                <td>
                <div align="right">
                <input type="radio" name="cuadro" id="cuadro" value="alert alert-block" <?php if($cuadro=='alert alert-block'){ echo 'checked'; } ?> >
                </div>
                </td>
                
                <td><div class="alert alert-block"><strong>EJEMPLO</strong></div></td>
              </tr>
              <tr>
                <td>
                <div align="right">
                <input type="radio" name="cuadro" id="cuadro" value="alert alert-error" <?php if($cuadro=='alert alert-error'){ echo 'checked'; } ?>>
                </div>
                </td>
                <td><div class="alert alert-error"><strong>EJEMPLO</strong></div></td>
              </tr>
              <tr>
                <td>
                <div align="right">
                <input type="radio" name="cuadro" id="cuadro" value="alert alert-success" <?php if($cuadro=='alert alert-success'){ echo 'checked'; } ?>>	
                </div>
                </td>
                <td><div class="alert alert-success"><strong>EJEMPLO</strong></div></td>
              </tr>
              <tr>
                <td>
                <div align="right">
                <input type="radio" name="cuadro" id="cuadro" value="alert alert-info" <?php if($cuadro=='alert alert-info'){ echo 'checked'; } ?>></td>
                </div>
                <td><div class="alert alert-info"><strong>EJEMPLO</strong></div></td>
              </tr>
              <tr>
                <td colspan="2"><div align="center"><input type="submit" name="button" class="btn" id="button" value="Guardar Cambios"></div></td>
                </tr>
            </table>
            </form>
            </div>
		</div>
   </div>
   
   <!-- editar titulo numero 3 -->
   
<div id="titulo3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">Editar Titulos</h3>
		</div>
		<div class="modal-body">
			<p><strong>Editar Titulo o Encabezado 3</strong></p>
            <div align="center">
			<?php 
                ///TITULO N1
                $sqll=mysql_query("SELECT * FROM titulos WHERE id=3");
                if($dato=mysql_fetch_array($sqll)){
                    $titulo=$dato['titulo']; $cuadro=$dato['cuadro'];
                }
            ?>
            <form name="form1" method="post" action="">
            <table width="70%" border="0">
              <tr>
                <td width="40%"><strong>Nombre del Titulo:</strong></td>
                <td width="60%">
                	<input type="text" name="titulo" id="titulo" value="<?php echo $titulo; ?>" required>
                    <input name="codigo" type="hidden" value="3">
                </td>
              </tr>
              <tr>
                <td colspan="2"><div align="center"><strong>Tipo de Recuadro:</strong></div></td>
              </tr>
              <tr>
                <td>
                <div align="right">
                <input type="radio" name="cuadro" id="cuadro" value="alert alert-block" <?php if($cuadro=='alert alert-block'){ echo 'checked'; } ?> >
                </div>
                </td>
                
                <td><div class="alert alert-block"><strong>EJEMPLO</strong></div></td>
              </tr>
              <tr>
                <td>
                <div align="right">
                <input type="radio" name="cuadro" id="cuadro" value="alert alert-error" <?php if($cuadro=='alert alert-error'){ echo 'checked'; } ?>>
                </div>
                </td>
                <td><div class="alert alert-error"><strong>EJEMPLO</strong></div></td>
              </tr>
              <tr>
                <td>
                <div align="right">
                <input type="radio" name="cuadro" id="cuadro" value="alert alert-success" <?php if($cuadro=='alert alert-success'){ echo 'checked'; } ?>>	
                </div>
                </td>
                <td><div class="alert alert-success"><strong>EJEMPLO</strong></div></td>
              </tr>
              <tr>
                <td>
                <div align="right">
                <input type="radio" name="cuadro" id="cuadro" value="alert alert-info" <?php if($cuadro=='alert alert-info'){ echo 'checked'; } ?>></td>
                </div>
                <td><div class="alert alert-info"><strong>EJEMPLO</strong></div></td>
              </tr>
              <tr>
                <td colspan="2"><div align="center"><input type="submit" name="button" class="btn" id="button" value="Guardar Cambios"></div></td>
                </tr>
            </table>
            </form>
            </div>
		</div>
   </div>

</body>
</html>