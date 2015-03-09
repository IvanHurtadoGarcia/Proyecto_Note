<?php 
	include('admin/php_conexion.php');
	if(!empty($_GET['noticia'])){
		$noticia=$_GET['noticia'];
		$sqlx=mysql_query("SELECT * FROM noticias WHERE id=$noticia");
		if($datox=mysql_fetch_array($sqlx)){
			$ntitulo=$datox['titulo'];	$nintro=$datox['intro'];
			$ntexto=$datox['texto'];	$nfecha=$datox['fecha'];
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="admin/css/bootstrap.css" rel="stylesheet">
    <link href="admin/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="admin/css/docs.css" rel="stylesheet">
    <link href="admin/js/google-code-prettify/prettify.css" rel="stylesheet">
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="admin/js/jquery.js"></script>
    <script src="admin/js/bootstrap-transition.js"></script>
    <script src="admin/js/bootstrap-alert.js"></script>
    <script src="admin/js/bootstrap-modal.js"></script>
    <script src="admin/js/bootstrap-dropdown.js"></script>
    <script src="admin/js/bootstrap-scrollspy.js"></script>
    <script src="admin/js/bootstrap-tab.js"></script>
    <script src="admin/js/bootstrap-tooltip.js"></script>
    <script src="admin/js/bootstrap-popover.js"></script>
    <script src="admin/js/bootstrap-button.js"></script>
    <script src="admin/js/bootstrap-collapse.js"></script>
    <script src="admin/js/bootstrap-carousel.js"></script>
    <script src="admin/js/bootstrap-typeahead.js"></script>
    <script src="admin/js/bootstrap-affix.js"></script>
    <script src="admin/js/holder/holder.js"></script>
    <script src="admin/js/google-code-prettify/prettify.js"></script>
    <script src="admin/js/application.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="admin/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="admin/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="admin/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="admin/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="admin/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="admin/ico/favicon.png">

</head>
<!--<body data-spy="scroll" data-target=".bs-docs-sidebar">-->
<BODY BGCOLOR="#00000" BACKGROUND="admin/img/fondoP.png" BGPROPERTIES=FIXED>
<div align="center">
<table width="77%" border="0">
  <tr>
    <td width="48%">
        <img src="admin/img/logo.png" alt="" height="300" width="300"> 
    </td>
    <td colspan="3" align="center">
    	<h1><strong><?php echo $empresa; ?></strong></h1>
        <h4><small><?php echo $eslogan; ?></small></h4>
    
    </td>
    </tr>
  <tr>
    <td colspan="4">
    <Div align="center">
    	<strong>
        <ul class="breadcrumb">
        	<?php
				$can=mysql_query("SELECT * FROM tipos WHERE estado='s'");
				while($dato=mysql_fetch_array($can)){
					echo '<li><a href="noticias.php?codigo='.$dato['id'].'">'.$dato['nombre'].'</a> <span class="divider">/</span></li>';
				}
			?>      
        </ul>
    	</strong>
    </Div>
    </td>
    </tr>
  <tr>
  	<td colspan="4"><h2><?php echo $ntitulo; ?></h2><small><h4><?php echo $nintro; ?></h4></small></td>
  </tr>
  <tr>
  	<td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">
        <div align="center" class="well">
            <img src="admin/noticias/<?php echo $noticia.'.jpg'; ?>" width="550" height="550" class="img-polaroid">
        </div>
        <div align="right"><?php echo $nfecha; ?></div>
    </td>
    </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="4">
   		<div class="row-fluid">
    		<div class="span8">
            	<div align="justify" class="well"><?php echo $ntexto; ?></div>
            </div>
    		<div class="span4">
            	    <div class="alert alert-info" align="center">
                		<strong>Publicidad</strong>
                    </div>
            	
                <div class="well" align="center"><img src="admin/img/250_250.jpg"></div>
            </div>
    	</div>
    </td>
    </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  </table>
  
  <table width="100%" border="0">
      <tr>
        <td>
          	<br><br>
        	<div align="center">
                © Company 2013 <?php echo $empresa; ?><br>
                <?php echo $direccion.' - '.$ciudad; ?>
            </div>
            <br><br>        
        </td>
      </tr>
  </table>
 
</div>
</body>
</html>