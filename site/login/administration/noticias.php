<?php
 		session_start();
		include('admin/php_conexion.php'); 
		$n=0;
		$sqll=mysql_query("SELECT * FROM titulos");
		while($dato=mysql_fetch_array($sqll)){
			$n++;
			$v_titulop[$n]=$dato['titulo'];
			$v_cuadro[$n]=$dato['cuadro'];
		}
		if(!empty($_GET['codigo'])){
			$codigo=$_GET['codigo'];
		}else{
			$codigo=0;
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
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="admin/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="admin/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="admin/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="admin/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="admin/ico/favicon.png">

</head>
<BODY BGCOLOR="#00000" BACKGROUND="admin/img/bg37.png" BGPROPERTIES=FIXED>
<div align="center">
<table width="77%" border="0">
	<tr>
    <td width="48%">
        
    </td>
    <td colspan="3" align="center">
    	<h1><strong><?php echo $empresa; ?></strong></h1>
        <h4><small><?php echo $eslogan; ?></small></h4>
    
    </td>
    </tr>
</table>
<br>
<table width="77%" border="0">
	<tr>
    <td width="48%">
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
    <div class="row-fluid">
    	<div class="span8" align="center">
        	<?php 
	$sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM noticias WHERE tipo='$codigo'  ORDER BY my_date desc LIMIT 5");
	while($datox=mysql_fetch_array($sqlx)){
					
			?>
        	<!-- inicia codigo NOTICIAS IMPORTANTES! --> 
                <div class="well">
                    <div class="media">
                        <a class="pull-left" href="">
                            <img src="admin/noticias/<?php echo $datox['id'].'.jpg'; ?>" 
                            style="width: 80px; height: 80px;" class="media-object" data-src="holder.js/64x64">
                        </a>
                        <div class="media-body">
                          <h4 class="media-heading"><?php echo $datox['titulo']; ?></h4>
                          		<?php echo $datox['intro']; ?>
                            <br>
                            <div align="right">
                            	<a href="article.php?noticia=<?php echo $datox['id']; ?>" class="btn"><i class="icon-plus"></i> Leer Mas</a>
                            </div>
                        </div>
                   </div>
               </div>
 				<!-- fin codigo -->
               <?php } 
	$sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM noticias WHERE tipo='$codigo'  ORDER BY my_date desc LIMIT 5");
	if(!$datox=mysql_fetch_array($sqlx)){
			echo '<div class="alert alert-error" align="center">
    					<strong><i class="icon-warning-sign"></i> No hay noticias de esta categoria</strong>
			     </div>';				
	}
			   ?>
        </div>
        
        </div>
    </td>
    </tr>
    </table>
     <table width="100%" border="0">
      <tr>
        <td>
          	<br><br>
        	<div align="center">
                © NoteInsideNetwork 2015 <?php echo $empresa; ?><br>
                <?php echo $direccion.' - '.$ciudad; ?>
            </div>
            <br><br>        
        </td>
      </tr>
  </table>
    </div>
</body>
</html>