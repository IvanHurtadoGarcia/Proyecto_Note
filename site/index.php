<?php 
    include('php_conexion.php');  
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

    $x=0;
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM noticias  ORDER BY my_date desc ");
        while($datos=mysql_fetch_array($sqlx)){
        $x++;
        $v_cod[$x]=$datos['id'];
        $v_foto[$x]=$datos['id'];
        $v_titulo[$x]=$datos['titulo'];
        $v_intro[$x]=$datos['intro'];
        $v_fecha[$x]=$datos['fecha'];
    }
     
    $x2=0;
    $sqlx2=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM videojuegos ORDER BY my_date desc ");
        while($datos2=mysql_fetch_array($sqlx2)){
        $x2++;
        $v2_cod[$x2]=$datos2['id'];
        $v2_foto[$x2]=$datos2['id'];
        $v2_titulo[$x2]=$datos2['titulo'];
        $v2_intro[$x2]=$datos2['intro'];
        $v2_fecha[$x2]=$datos2['fecha'];
    }
    $x3=0;
    $sqlx3=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM reviews ORDER BY my_date desc");
        while($datos3=mysql_fetch_array($sqlx3)){
        $x3++;
        $v3_cod[$x3]=$datos3['id'];
        $v3_foto[$x3]=$datos3['id'];
        $v3_titulo[$x3]=$datos3['titulo'];
        $v3_intro[$x3]=$datos3['intro'];
        $v3_fecha[$x3]=$datos3['fecha'];
    }

    $x4=0;
    $sqlx4=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM descargas ORDER BY my_date desc ");
        while($datos4=mysql_fetch_array($sqlx4)){
        $x4++;
        $v4_foto[$x4]=$datos4['id'];
        $v4_titulo[$x4]=$datos4['titulo'];
        $v4_intro[$x4]=$datos4['intro'];
        $v4_fecha[$x4]=$datos4['fecha'];
    }

    $x5=0;
    $sqlx5=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM nacional ORDER BY my_date desc");
        while($datos5=mysql_fetch_array($sqlx5)){
        $x5++;
        $v5_foto[$x5]=$datos5['id'];
        $v5_titulo[$x5]=$datos5['titulo'];
        $v5_intro[$x5]=$datos5['intro'];
        $v5_fecha[$x5]=$datos5['fecha'];
    }

    $x6=0;
    $sqlx6=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM internacional ORDER BY my_date desc");
        while($datos6=mysql_fetch_array($sqlx6)){
        $x6++;
        $v6_foto[$x6]=$datos6['id'];
        $v6_titulo[$x6]=$datos6['titulo'];
        $v6_intro[$x6]=$datos6['intro'];
        $v6_fecha[$x6]=$datos6['fecha'];
    }

    $x7=0;
    $sqlx7=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM random ORDER BY my_date desc");
        while($datos7=mysql_fetch_array($sqlx7)){
        $x7++;
        $v7_foto[$x7]=$datos7['id'];
        $v7_titulo[$x7]=$datos7['titulo'];
        $v7_intro[$x7]=$datos7['intro'];
        $v7_fecha[$x7]=$datos7['fecha'];
    }

    $x8=0;
    $sqlx8=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM video ORDER BY my_date desc");
        while($datos8=mysql_fetch_array($sqlx8)){
        $x8++;
        $v8_foto[$x8]=$datos8['id'];
        $v8_titulo[$x8]=$datos['titulo'];
        $v8_intro[$x8]=$datos8['intro'];
        $v8_fecha[$x8]=$datos8['fecha'];
    }

    
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>NoteInsideNetwork</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Styles Should be After Script -->
    <link rel="stylesheet" href="style.css" />
    
    <link rel="shortcut icon" href="../images/favicon.png">
    <link id=" cssthemecolor" rel="stylesheet" href="#" />

    <!--[if IE 7]>
    <link id="lnkFontAwesomeIE7" href="../framework/fontawesome/css/font-awesome-ie7.min.css" rel="stylesheet" />
    <![endif]-->

    <!--[if lt IE 9]>
      <script src="../framework/fix-ie/html5.js"></script>
    <![endif]-->

    <script src="../framework/fix-ie/modernizr.v262.js"></script>

</head>

<body>

    <nav class="top-menu-2">
        <div class="row-fluid">
            <div class="navbar navbar-inverse">
                <h2 class="hidden">Nav Top Menu</h2>

                <div class="navbar-inner">
                    <div class="container-fluid">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <i class="icon-reorder"></i>
                        </button>

                        <div class="nav-collapse collapse" style="float:right">
                            <!--<a class="brand" href="#">Serpentsoft</a>-->

                            <ul class="nav">

                               
                            <ul class="nav pull-right">

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="200"><i class="bo-icon-info-sign bo-icon-white"></i>NoteInsideNetwork <i class="icon-angle-down" style="margin-right: 0"></i></a>

                                    <ul class="dropdown-menu about-company">
                                        <li>
                                            <div class="row-fluid">

                                                <div class="span8 google-map-section clearfix">
                                                    <div class="row-fluid title">
                                                        <h3><i class="bo-icon-map-marker bo-icon-white"></i>¿Donde Estamos?</h3>
                                                        <hr />
                                                    </div>

                                                    <div class="row-fluid">
                                                        <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Taba,+Qesm+Nwebaa,+South+Sinai,+Egypt&amp;aq=t&amp;sll=27.907286,34.314079&amp;sspn=0.043006,0.084543&amp;ie=UTF8&amp;hq=&amp;hnear=Taba,+Qesm+Nwebaa,+South+Sinai,+Egypt&amp;ll=29.492568,34.894903&amp;spn=0.344213,0.676346&amp;t=m&amp;z=11&amp;output=embed"></iframe>
                                                        <br />
                                                        <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Taba,+Qesm+Nwebaa,+South+Sinai,+Egypt&amp;aq=t&amp;sll=27.907286,34.314079&amp;sspn=0.043006,0.084543&amp;ie=UTF8&amp;hq=&amp;hnear=Taba,+Qesm+Nwebaa,+South+Sinai,+Egypt&amp;ll=29.492568,34.894903&amp;spn=0.344213,0.676346&amp;t=m&amp;z=11" style="color: #0000FF; text-align: left">View Larger Map</a></small>
                                                    </div>

                                                </div>

                                                <div class="span4">

                                                    <div class="row-fluid search-section">
                                                        <div class="row-fluid title">
                                                            <h3><i class="bo-icon-search bo-icon-white"></i>Busqueda</h3>
                                                            <hr />
                                                        </div>

                                                        <div class="row-fluid">
                                                            <form class="form-search clearfix search-box">
                                                                <div class="input-append input-block-level">
                                                                    <input type="text" class="span10 search-query" placeholder="¿Buscas algo?" required="required" />
                                                                    <button type="submit" class="btn"><i class="icon-search"></i></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="row-fluid login-section">
                                                       

                                                        
                                                    </div>

                                                </div>

                                            </div>

                                            <hr />

                                            <div class="row-fluid">
                                                <div class="span8">
                                                    <div class="row-fluid title">
                                                        <h3><i class="bo-icon-flag bo-icon-white"></i>Información de Contacto</h3>
                                                        <hr />
                                                    </div>

                                                    <ul class="row-fluid contact-info">

                                                        <li>
                                                            <strong>Calle:</strong>
                                                            <span>Heroico Colegio Militar #13, Col. Centro, Pedro Escobedo Querétaro.</span>
                                                        </li>

                                                        <li>
                                                            <strong>País:</strong>
                                                            <span>México</span>
                                                        </li>

                                                        <li>
                                                            <strong>Telefono:</strong>
                                                            <span>(448) 275 0237 </span>
                                                        </li>

                                                        <li>
                                                            <strong>Email:</strong>
                                                            <a href="note@insidenetwork.com">note@insidenetwork.com</a>
                                                        </li>

                                                    </ul>

                                                </div>

                                              
                                            </div>

                                            
                                        </li>
                                    </ul>
                                </li>

                                <li class="divider-vertical"></li>

                                
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header>
        <div class="navbar navbar-banner">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="logo-240 pull-left" itemscope itemtype="http://schema.org/Brand">
                        <h1 class="hidden" itemprop="name">Serpentsoft</h1>
                        <a href="index.php">
                            <img itemprop="logo" src="../images/LogoNiN.png" alt="Logo" /></a>
                    </div>

                    <div class="adv-970 pull-right visible-desktop">
                        <a href="http://themeforest.net/item/adams-magazine-responsive-magazineblog-theme/4919511" target="_blank">
                            <img class="pull-right" src="../images/ad-970.jpg" alt="970x90" /></a>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <nav class="container-fluid navbar-main enable-fixed">
        <h2 class="hidden">Site Navigation Bar</h2>


        <div class="navbar">
            <div class="navbar-inner">
                <div class="clearfix">

                    <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target="#divNav2">
                        <span class="icon-reorder"></span>
                    </button>

                    <div id="divNav2" class="nav-collapse collapse clearfix">

                        <ul class="nav">

                            <li class="dropdown active" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="ancHomePages" role="button"
                                    data-hover="dropdown" data-delay="200"
                                    data-target="#" href="index.php"><i class="icon-home"></i></a>
                            </li>

                            <li class="divider-vertical"></li>

                            <li class="dropdown" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="a6" role="button"
                                    data-hover="dropdown" data-delay="200"
                                    data-target="#" href="#" title="">Vida y Tecnol&oacute;gia<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="nota/technews.php?codigo=1" title="">Noticias Tecnol&oacute;gicas</a></li>
                                    <li><a href="nota/videojuegos.php?codigo=2" title="">Video Juegos </a></li>
                                    <li><a href="nota/reviews.php?codigo=3" title="">Reviews</a></li>
                                </ul>

                            </li>

                            <li class="divider-vertical"></li>
                           
                            <li class="dropdown" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="A1" role="button"
                                   data-hover="dropdown" data-delay="200"
                                   data-target="#" href="#">Sociedad y Cultura<i class="caret"></i></a>

                                 <ul class="dropdown-menu">
                                    <li><a href="post-formats/post-eventosdatos.php?codigo=4">Eventos</a></li>
                                    <li><a href="post-formats/post-fotografiadatos.php?codigo=6">Fotografía</a></li>
                                    <li><a href="post-formats/post-saluddatos.php?codigo=8">Salud</a></li>
                                   

                                </ul>
                            </li>
                            <li class="dropdown" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="a4" role="button"
                                   data-hover="dropdown" data-delay="200"
                                   data-target="#" href="#" title="">Polit&iacute;ca<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="../noticias/internacional.php?codigo=9">Internacional</a></li>
                                    <li><a href="../noticias/nacional.php?codigo=10">Nacional</a></li>
                                    <li><a href="../noticias/opinion.php?codigo=11">Opinion</a></li>
                                    


                                </ul>

                            </li>

                            <li class="dropdown" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="a4" role="button"
                                   data-hover="dropdown" data-delay="200"
                                   data-target="#" href="#" title="">Inter&eacute;s General<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="../site/noticias/lecturas.php?codigo=12#">Lecturas</a></li>
                                    <li><a href="../site/noticias/descargar.php?codigo=13#">Descargas</a></li>
                                    <li><a href="../site/noticias/random.php?codigo=14#">Random</a></li>
                                    


                                </ul>

                            </li>

                            <li class="divider-vertical"></li>

                        </ul>

                        <ul class="nav pull-right">
                            <li class="divider-vertical"></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <div class="container-fluid" itemscope itemtype="http://schema.org/CreativeWork">

        <!-- Main Content -->
        <div class="row-fluid">

            <!-- main content -->
            <div class="span6 main-content">

                <!-- Breaking News -->
                <section class="breaking-news-widget">
                    <div class="row-fluid">

                        <div class="title">
                            <h3>Más Actuales</h3>
                        </div>
                        <div id="divBreakingNewsTicker" class="content">
                            <ul id="js-news" class="js-hidden">
                                <li><a href="nota/tecnologias.php?<?php echo $v_titulo['1'] ?>&noticia=<?php echo $v_cod[1]; ?>"><?php echo $v_titulo['1'] ?></a></li>
                                <li><a href="nota/juegos.php?<?php echo $v2_titulo['1'] ?>&noticia=<?php echo $v2_cod[1]; ?>"><?php echo $v2_titulo['1'] ?></a></li>
                                <li><a href="nota/reviewdata.php?<?php echo $v3_titulo['1'] ?>&noticia=<?php echo $v3_cod[1]; ?>"><?php echo $v3_titulo['1'] ?></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </section>
                

                <!-- Slider -->

                <section class="pic-slider">

                    <h2 class="hidden">Slider Section</h2>

                    <div class="row-fluid modern-items-list">
                        <div id="mainSlider1" class="flexslider large">
                            <ul class="slides">
                                <li>

                                    <article class="fold-item span12">
                                        <div class="clearfix">
                                            <img src="login/administration/admin/secciones/noticiast/<?php echo $v_foto[1].'.jpg'; ?>" height="345" width="604">
                                             <div class="description visible-part">
                                                <div class="title">
                                                    <div class="post-date">
                                                        <div class="date">
                                                          <b><p style="font-size:12px;font-family:cursive" align="center"><br /><?php echo $v_fecha['1'] ?></p></b>
                                                            <hr />
                                                         
                                                        </div>
                                                    </div>

                                                    <h3><?php echo $v_titulo['1'] ?></h3>

                                                    
                                                </div>

                                                <p class="text"><?php echo $v_intro[1]; ?></p>
                                            </div>

                                            <a href="nota/tecnologias.php?<?php echo $v_titulo['1'] ?>&noticia=<?php echo $v_cod[1]; ?>"class="more" title=""></a>
                                        </div>
                                    </article>
                                </li>

                                <li>
                                    <article class="fold-item span12">
                                        <div class="clearfix">
                                          <img src="login/administration/admin/secciones/noticiast/<?php echo $v_foto[2].'.jpg'; ?>" height="345" width="604">
                                            <div class="description visible-part">
                                                <div class="title">
                                                    <div class="post-date">
                                                        <div class="date">
                                                          <b><p style="font-size:12px;font-family:cursive" align="center"><br /><?php echo $v_fecha['2'] ?></p></b>
                                                            <hr />
                                                         
                                                        </div>
                                                    </div>

                                                   <h3><?php echo $v_titulo['2'] ?></h3>
                                                </div>

                                                 <p class="text"><?php echo $v_intro[2]; ?></p>
                                            </div>

                                           <a href="nota/tecnologias.php?<?php echo $v_titulo['2'] ?>&noticia=<?php echo $v_cod[2]; ?>" class="more" title=""></a>
                                        </div>
                                    </article>
                                </li>

                                <li>
                                    <article class="fold-item span12">
                                        <div class="clearfix">
                                            <img src="login/administration/admin/secciones/noticiast/<?php echo $v_foto[3].'.jpg'; ?>" height="345" width="604">
                                            <div class="description visible-part">
                                                <div class="title">
                                                    <div class="post-date">
                                                        <div class="date">
                                                          <b><p style="font-size:12px;font-family:cursive" align="center"><br /><?php echo $v_fecha['3'] ?></p></b>
                                                            <hr />
                                                         
                                                        </div>
                                                    </div>

                                                   <h3><?php echo $v_titulo['3'] ?></h3>
                                                </div>
                                             <p class="text"><?php echo $v_intro[3]; ?></p>
                                            </div>

                                           <a href="nota/tecnologias.php?<?php echo $v_titulo['3'] ?>&noticia=<?php echo $v_cod[3]; ?>"class="more" title=""></a>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article class="fold-item span12">
                                        <div class="clearfix">
                                            <img src="login/administration/admin/secciones/noticiast/<?php echo $v_foto[4].'.jpg'; ?>" height="345" width="604">
                                            <div class="description visible-part">
                                                <div class="title">
                                                    <div class="post-date">
                                                        <div class="date">
                                                          <b><p style="font-size:12px;font-family:cursive" align="center"><br /><?php echo $v_fecha['4'] ?></p></b>
                                                            <hr />
                                                         
                                                        </div>
                                                    </div>

                                                   <h3><?php echo $v_titulo['4'] ?></h3>
                                                </div>
                                             <p class="text"><?php echo $v_intro[4]; ?></p>
                                            </div>

                                           <a href="nota/tecnologias.php?<?php echo $v_titulo['5'] ?>&noticia=<?php echo $v_cod[4]; ?>" class="more" title=""></a>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article class="fold-item span12">
                                        <div class="clearfix">
                                            <img src="login/administration/admin/secciones/noticiast/<?php echo $v_foto[5].'.jpg'; ?>" height="345" width="604">
                                            <div class="description visible-part">
                                                <div class="title">
                                                    <div class="post-date">
                                                        <div class="date">
                                                          <b><p style="font-size:12px;font-family:cursive" align="center"><br /><?php echo $v_fecha['5'] ?></p></b>
                                                            <hr />
                                                         
                                                        </div>
                                                    </div>

                                                   <h3><?php echo $v_titulo['5'] ?></h3>
                                                </div>
                                             <p class="text"><?php echo $v_intro[5]; ?></p>
                                            </div>

                                           <a href="nota/tecnologias.php?<?php echo $v_titulo['5'] ?>&noticia=<?php echo $v_cod[5]; ?>" class="more" title=""></a>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article class="fold-item span12">
                                        <div class="clearfix">
                                            <img src="login/administration/admin/secciones/noticiast/<?php echo $v_foto[6].'.jpg'; ?>" height="345" width="604">
                                            <div class="description visible-part">
                                                <div class="title">
                                                    <div class="post-date">
                                                        <div class="date">
                                                          <b><p style="font-size:12px;font-family:cursive" align="center"><br /><?php echo $v_fecha['6'] ?></p></b>
                                                            <hr />
                                                         
                                                        </div>
                                                    </div>

                                                   <h3><?php echo $v_titulo['6'] ?></h3>
                                                </div>
                                             <p class="text"><?php echo $v_intro[6]; ?></p>
                                            </div>

                                           <a href="nota/tecnologias.php?<?php echo $v_titulo['6'] ?>&noticia=<?php echo $v_cod[6]; ?>"class="more" title=""></a>
                                        </div>
                                    </article>
                                </li>

                            </ul>
                        </div>

                        <div id="mainSlider1-carousel" class="flexslider large carousel">
                            <ul class="slides">
                                <li>
                                     <img src="login/administration/admin/secciones/noticiast/<?php echo $v_foto[1].'.jpg'; ?>" height="65" width="97">
                                </li>
                                <li>
                                    <img src="login/administration/admin/secciones/noticiast/<?php echo $v_foto[2].'.jpg'; ?>" height="65" width="97">
                                </li>
                                <li>
                                    <img src="login/administration/admin/secciones/noticiast/<?php echo $v_foto[3].'.jpg'; ?>" height="65" width="97">
                                </li>
                                <li>
                                    <img src="login/administration/admin/secciones/noticiast/<?php echo $v_foto[4].'.jpg'; ?>" height="65" width="97">
                                </li>
                                <li>
                                    <img src="login/administration/admin/secciones/noticiast/<?php echo $v_foto[5].'.jpg'; ?>" height="65" width="97">
                                </li>
                                <li>
                                    <img src="login/administration/admin/secciones/noticiast/<?php echo $v_foto[6].'.jpg'; ?>" height="65" width="97">
                                </li>

                            </ul>

                        </div>
                    </div>

                </section>


                <div class="widget">
                    <div class="text-center">
                        <img src="../images/ad-468.jpg" />
                    </div>
                </div>


                <!-- Horizontal Categories -->

                <section class="cat-widget h-cat-1">
                    <div class="cat-widget-title">
                        <a href="nota/reviews.php">
                            <h3>Ultimas en Reviews</h3>
                        </a>
                    </div>

                    <div class="cat-widget-content">
                        <!-- last post -->
                        <div class="row-fluid cat-horiz">
                            <article class="last-post clearfix">

                                <!--<div class="span4">
                                    <a href="#" class="thumbnail" title="Full Post Title">
                                        <img src="" data-src="holder.js/134x83" alt="post title" /></a>
                                </div>-->
                                <div class="span5 img-container" title="">
                                    
                                    <img src="login/administration/admin/secciones/reviews/<?php echo $v3_foto[1].'.jpg'; ?>" height="150" width="243">
                                    <div class="img-meta">
                                        <div class="post-date">
                                            <div class="date">
                                             
                                            </div>
                                        </div>
                                    </div>

                                    <a href="nota/reviewdata.php?<?php echo $v3_titulo['1'] ?>&noticia=<?php echo $v3_cod[1]; ?>" class="more"></a>
                                </div>

                                <div class="span7">
                                    <div class="post-info">
                                        <div class="post-title clearfix">
                                            <a href="nota/reviewdata.php?<?php echo $v3_titulo['1'] ?>&noticia=<?php echo $v3_cod[1]; ?>" title="Leer">
                                                <h4 class="pull-left"><?php echo $v3_titulo['1'] ?></h4>
                                            </a>
                                        </div>

                                        <div class="post-meta clearfix">
                                            
                                        </div>

                                        <div class="post-desc">
                                            <p><?php echo $v3_intro['1'] ?>...</p>
                                        </div>

                                    </div>
                                </div>

                            </article>
                        </div>

                        <div class="row-fluid cat-horiz">
                            <div class="cat-horiz-divider"></div>

                            <div class="related-posts clearfix">
                                <div class="row-fluid modern-items-list">
                                    <div id="h_cat_slider1" class="flexslider">
                                        <ul class="slides">
                                            <li>
                                                <ul class="items left clearfix">
                                                    <li class="row-fluid">
                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    
                                                                    <img src="login/administration/admin/secciones/reviews/<?php echo $v3_foto[2].'.jpg'; ?>" height="190" width="294">
                                                                    <div class="description visible-part">
                                                                        <h5 class="title"><?php echo $v3_titulo['2'] ?></h5>

                                                                        <div class="info">
                                                                            
                                                                        </div>

                                                                        <p class="text"><?php echo $v3_intro['2'] ?>...</p>
                                                                    </div>

                                                                    <a href="nota/reviewdata.php?<?php echo $v3_titulo['2'] ?>&noticia=<?php echo $v3_cod[2]; ?>"class="more" title=""></a>
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    
                                                                    <img src="login/administration/admin/secciones/reviews/<?php echo $v3_foto[3].'.jpg'; ?>" height="190" width="294">
                                                                    <div class="description visible-part">
                                                                        <h5 class="title"><?php echo $v3_titulo['3'] ?></h5>

                                                                        <div class="info">
                                                                            
                                                                        </div>

                                                                        <p class="text"><?php echo $v3_intro['3'] ?>...</p>
                                                                    </div>

                                                                    <a href="nota/reviewdata.php?<?php echo $v3_titulo['3'] ?>&noticia=<?php echo $v3_cod[3]; ?>"class="more" title=""></a>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </li>

                                                    <li class="row-fluid">
                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    
                                                                    <img src="login/administration/admin/secciones/reviews/<?php echo $v3_foto[4].'.jpg'; ?>" height="190" width="294">
                                                                    <div class="description visible-part">
                                                                        <h5 class="title"><?php echo $v3_titulo['4'] ?></h5>

                                                                        <div class="info">
                                                                            
                                                                        </div>

                                                                        <p class="text"><?php echo $v3_intro['4'] ?>...</p>
                                                                    </div>

                                                                    <a href="nota/reviewdata.php?<?php echo $v3_titulo['4'] ?>&noticia=<?php echo $v3_cod[4]; ?>" class="more" title=""></a>
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    
                                                                    <img src="login/administration/admin/secciones/reviews/<?php echo $v3_foto[5].'.jpg'; ?>" height="190" width="294">
                                                                    <div class="description visible-part">
                                                                        <h5 class="title"><?php echo $v3_titulo['5'] ?></h5>

                                                                        <div class="info">
                                                                            
                                                                        </div>

                                                                        <p class="text"><?php echo $v3_intro['5'] ?>...</p>
                                                                    </div>

                                                                    <a href="nota/reviewdata.php?<?php echo $v3_titulo['5'] ?>&noticia=<?php echo $v3_cod[5]; ?>" class="more" title=""></a>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </li>

                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                </section>

                

                <!-- Vertical Categories -->
                <div class="row-fluid">
                    <div class="span6">
                        <section class="cat-widget v-cat-1">
                            <div class="cat-widget-title">
                                <a href="nota/videojuegos.php">
                                    <h3>Video Juegos</h3>
                                </a>
                            </div>

                            <div class="cat-vertical-widget-content">
                                <!-- Related Content -->
                                <div class="row-fluid cat-vertical">

                                    <div class="span12 last-post clearfix">
                                        <article class="post-info">
                                            <div>
                                                <div class="span12 img-container">
                                                    <img src="login/administration/admin/secciones/videojuegos/<?php echo $v2_foto[1].'.jpg'; ?>" height="180" width="294">
                                                   
                                                    <div class="img-meta">
                                                        <div class="post-date">
                                                            <div class="date">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="nota/juegos.php?<?php echo $v2_titulo['1'] ?>&noticia=<?php echo $v2_cod[1]; ?>" class="more"></a>
                                                </div>

                                                <a href="nota/juegos.php?<?php echo $v2_titulo['1'] ?>&noticia=<?php echo $v2_cod[1]; ?>" class="clearfix" title="Articulo Completo">
                                                    <h4><?php echo $v2_titulo['1'] ?></h4>
                                                </a>
                                            </div>

                                            

                                            <div class="post-desc">
                                                <p><?php echo $v2_intro[1]; ?></p>
                                            </div>

                                        </article>
                                    </div>

                                    <div class="cat-vert-divider"></div>

                                    <div class="span12 related-posts">

                                        <div class="row-fluid modern-items-list">

                                            <div id="v_cat_slider1" class="flexslider">
                                                <ul>
                                                    <li>
                                                        <ul class="items left clearfix">
                                                            <li>
                                                                <article class="fold-item span12">
                                                                    <div class="clearfix">
                                                                        <img src="login/administration/admin/secciones/videojuegos/<?php echo $v2_foto[2].'.jpg'; ?>" height="190" width="294">

                                                                        <div class="description visible-part">
                                                                            <h5 class="title"><?php echo $v2_titulo['2'] ?></h5>

                                                                            <div class="info">
                                                                             
                                                                            </div>

                                                                            <p class="text"><?php echo $v2_intro[2]; ?>...</p>
                                                                        </div>

                                                                        <a href="nota/juegos.php?<?php echo $v2_titulo['2'] ?>&noticia=<?php echo $v2_cod[2]; ?>"class="more" title=""></a>
                                                                    </div>
                                                                </article>
                                                            </li>

                                                            <li>
                                                                <article class="fold-item span12">
                                                                    <div class="clearfix">
                                                                        <img src="login/administration/admin/secciones/videojuegos/<?php echo $v2_foto[3].'.jpg'; ?>" height="190" width="294">

                                                                        <div class="description visible-part">
                                                                           <h5 class="title"><?php echo $v2_titulo['3'] ?></h5>
                                                                            <div class="info">
                                                                                
                                                                            </div>
                                                                            <p class="text"><?php echo $v2_intro[3]; ?>...</p>
                                                                         </div>

                                                                        <a href="nota/juegos.php?<?php echo $v2_titulo['3'] ?>&noticia=<?php echo $v2_cod[3]; ?>"class="more" title=""></a>
                                                                    </div>

                                                                </article>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="span6">
                        <section class="cat-widget v-cat-2">
                            <div class="cat-widget-title">
                                <a href="#">
                                    <h3>Ultimas a Descargas</h3>
                                </a>
                            </div>

                            <div class="cat-vertical-widget-content">
                                <!-- Related Content -->
                                <div class="row-fluid cat-vertical">

                                    <div class="span12 last-post clearfix">
                                                                <?php 
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM descargas WHERE tipo='13'  ORDER BY my_date desc LIMIT 1");
    while($datox=mysql_fetch_array($sqlx)){
                    
            ?>
                     
                                        <article class="post-info">
                                            <div>
                                                <div class="span12 img-container">
                                                    
                                                    <img src="login/administration/admin/secciones/descargas/<?php echo $datox['id'].'.jpg'; ?>" height="180" width="294">
                                                    <div class="img-meta">
                                                        <div class="post-date">
                                                            <div class="date">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="noticias/nota-des.php?noticia=<?php echo $datox['id']; ?>" class="more"></a>
                                                </div>

                                                <a href="noticias/nota-des.php?noticia=<?php echo $datox['id']; ?>" class="clearfix" title="<?php echo $datox['titulo']; ?>">
                                                    <h4><?php echo $datox['titulo']; ?></h4>
                                                </a>
                                            </div>

                                            <div class="post-meta clearfix">
                                               
                                            </div>

                                            <div class="post-desc">
                                                <p><?php echo $datox['intro']; ?> </p>
                                            </div>


                                        </article>

                           <?php } 
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM descargas WHERE tipo='13'  ORDER BY my_date desc LIMIT 1");
    if(!$datox=mysql_fetch_array($sqlx)){
            echo '<div class="alert alert-error" align="center">
                        <strong><i class="icon-warning-sign"></i> No hay noticias de esta categoria</strong>
                 </div>';               
    }
               ?>
                                    </div>

                                    <div class="cat-vert-divider"></div>

                                    <div class="span12 related-posts">
                                        <div class="row-fluid modern-items-list">

                                            <div id="v_cat_slider2" class="flexslider">
                                                <ul>
                                                    <li>
                                                        <ul class="items left clearfix">
                                                            <?php 
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM descargas WHERE tipo='13'  ORDER BY my_date asc LIMIT 2");
    while($datox=mysql_fetch_array($sqlx)){
                    
            ?>
            <li>        
                                                                <article class="fold-item span12">
                                                                    <div class="clearfix">
                                                                         <img src="login/administration/admin/secciones/descargas/<?php echo $datox['id'].'.jpg'; ?>"height="190" width="294">

                                                                        <div class="description visible-part">
                                                                            <h5 class="title"><?php echo $datox['titulo']; ?></h5>

                                                                            <div class="info">
                                                                              
                                                                            </div>

                                                                            <p class="text"><?php echo $datox['intro']; ?>...</p>
                                                                        </div>

                                                                        <a href="noticias/nota-des.php?noticia=<?php echo $datox['id']; ?>" class="more" title=""></a>
                                                                    </div>
                                                                </article>


                           <?php } 
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM descargas WHERE tipo='13'  ORDER BY my_date asc LIMIT 2");
    if(!$datox=mysql_fetch_array($sqlx)){
            echo '<div class="alert alert-error" align="center">
                        <strong><i class="icon-warning-sign"></i> No hay noticias de esta categoria</strong>
                 </div>';               
    }
               ?>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    

                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>


                <!--<!-- Category Horizontal Divided -->
               


            </div>


            <!-- Right sidebar -->
            <section class="span270">
                <h2 class="hidden">Right Sidebar</h2>

                <!-- New In Pictures -->
                <aside class="widget w-pictures">
                    <div class="widget-title">
                        <h4>Ultimas en Polit&iacute;ca</h4>
                    </div>

                    <div class="widget-content clearfix thumbnails">
                         <ul class="posts-in-images clearfix">
                            <?php 
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM internacional WHERE tipo='9'  ORDER BY my_date asc LIMIT 9");
    while($datox=mysql_fetch_array($sqlx)){
                    
            ?>
                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="" title="<?php echo $datox['titulo']; ?>">
                                <a href="aqui_va_tu_pagina.php?noticia=<?php echo $datox['id']; ?>">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="../login/administration/admin/secciones/internacional/<?php echo $datox['id'].'.jpg'; ?>" height="75" width="80">
                                        
                                    </div>
                                </a>
                            </li>

                           <?php } 
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM internacional WHERE tipo='9'  ORDER BY my_date asc LIMIT 9");
    if(!$datox=mysql_fetch_array($sqlx)){
            echo '<div class="alert alert-error" align="center">
                        <strong><i class="icon-warning-sign"></i> No hay noticias de esta categoria</strong>
                 </div>';               
    }
               ?>
                        </ul>
                    </div>
                </aside>

               
               

                <!-- Weather -->
                <aside class="widget w-weather">
                    <div class="widget-title">
                        <h4>El clima</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="widget-weather">
                          <!-- www.TuTiempo.net - Ancho:274px - Alto:91px -->
<div id="TT_RCNEEEkkkllc4QsK7frjjzjjjWnKMpS2bYEYkZCIa1zo3IG5G"><a href="http://www.tutiempo.net">El tiempo 15 días</a></div>
<script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_RCNEEEkkkllc4QsK7frjjzjjjWnKMpS2bYEYkZCIa1zo3IG5G"></script>
                        </div>
                    </div>
                </aside>

        

            


                <!-- 160 (160x600 Adv.) -->
                


            </section>


            <!-- Left sidebar -->
            <section class="span300">
                <h2 class="hidden">Left Sidebar</h2>

                <!-- Posts Of The Day -->
                


                <!-- Social Counter -->
                <aside class="widget w-social-counter">
                    <div class="widget-title">
                        <h4>Nuestras Redes Sociales</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="social-counter-metro">
                            <ul class="clearfix">

                                <li class="fb-wrp">
                                    <div class="btn-count">

                                        <div class="social-counter-metro mask">
                                            <span>Like</span>
                                            <a href="#" class="more"></a>
                                        </div>

                                        <div class="facebook">
                                            <i class="facebook-sicon-48-white"></i>
                                            <span>Like us!</span>
                                            <span class="fans">Fans</span>
                                        </div>


                                    </div>
                                </li>

                                <li class="tr-wrp">
                                    <div class="btn-count">
                                        <div class="social-counter-metro mask">
                                            <span>Follow</span>
                                            <a href="#" class="more"></a>
                                        </div>

                                        <div class="twitter">

                                            <i class="twitter-sicon-48-white"></i>
                                            <span>Follow us!</span>
                                            <span class="fans">(ouo)</span>

                                        </div>
                                    </div>
                                </li>

                                <li class="yt-wrp">
                                    <div class="btn-count">
                                        <div class="social-counter-metro mask">
                                            <span>Subscribe</span>
                                            <a href="#" class="more"></a>
                                        </div>

                                        <div class="youtube">
                                            <i class="youtube-sicon-48-white"></i>
                                            <span>\(0u0)/</span>
                                            <span class="fans">Subscribe</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="gp-wrp">
                                    <div class="btn-count">
                                        <div class="social-counter-metro mask">
                                            <span>Follow</span>
                                            <a href="#" class="more"></a>
                                        </div>

                                        <div class="googleplus">
                                            <i class="googleplus-sicon-48-white"></i>
                                            <span>Plus!</span>
                                            <span class="fans">:v</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>

                  <!-- Random Posts (Classic) -->
                <aside class="widget w-posts">
                    <div class="widget-title">
                        <h4>Random</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="posts-in-widget">
                            <?php 
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM random WHERE tipo='14'  ORDER BY my_date desc LIMIT 9");
    while($datox=mysql_fetch_array($sqlx)){
                    
            ?>
                            <ul class="media-list">
                                <li class="media">
                                    <article>
                                        <a href="noticias/nota-ram.php?noticia=<?php echo $datox['id']; ?>" class="span3" title="">
                                            <div class="media-object thumb-effect">
                                                <div class="mask"></div>
                                                <img src="login/administration/admin/secciones/random/<?php echo $datox['id'].'.jpg'; ?>" height="65" width="65">
                                                
                                            </div>
                                        </a>

                                        <div class="media-body span9">
                                            <a href="noticias/nota-ram.php?noticia=<?php echo $datox['id']; ?>" title="">
                                                <h5 class="media-heading"><?php echo $datox['titulo']; ?></h5>
                                            </a>

                                            <div class="media">
                                                <span title=""><i class="bo-icon-time"></i><?php echo $datox['fecha']; ?></span>
                                            </div>
                                        </div>
                                    </article>
                                </li>
    <?php } 
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM random WHERE tipo='14'  ORDER BY my_date desc LIMIT 9");
    if(!$datox=mysql_fetch_array($sqlx)){
            echo '<div class="alert alert-error" align="center">
                        <strong><i class="icon-warning-sign"></i> No hay noticias de esta categoria</strong>
                 </div>';               
    }
               ?>
                                
                            </ul>
                        </div>
                    </div>

                </aside>


                <!-- Video Widget -->
                <aside class="widget w-video">
                    <div class="widget-title">
                        <h4>Video del D&iacute;a</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <?php echo $v8_intro['1'] ?>
                    </div>

                </aside>


                

            </section>
        </div>

        <!-- Footer Advertise -->
        <div class="row-fluid visible-desktop">
            <div class="span12 footer-adv">
                <a href="http://themeforest.net/item/adams-magazine-responsive-magazineblog-theme/4919511" target="_blank">
                    <img src="../images/ad-728.jpg" alt="Adv 728" />
                </a>
            </div>
        </div>

    </div>

    

    <section class="modern-footer">
        <h2 class="hidden">Sub-Footer Section</h2>

        <div class="container-fluid">
            <div class="row-fluid">

                

            </div>
        </div>

        <!-- Copy Right Reserved Section & Social Icons -->
        <div class="footer-border-serpentsoft"></div>

        <footer class="f-copyright">
            <div class="container-fluid">
                <div class="row-fluid">

                    <nav class="span6 ">
                        <h4 class="hidden">Copyright links</h4>
                        <ul class="copyright-links">
                            <li><a href="#">Archives</a></li>
                           
                            <li><a href="#">Copyright</a></li>
                            
                        </ul>
                    </nav>

                    <div class="span6">
                        <p class="pull-right">&copy; Copyright 2015 NoteInsideNetwork, All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>

    </section>

    

    <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->

    <script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript" src="../framework/jquery.easing.1.3.js"></script>

    <script src="../framework/bootstrap/js/bootstrap.min.js"></script>
    <script src="../framework/bootstrap/js/bootstrap-hover-dropdown.js"></script>
    <script src="../framework/bootstrap/js/bootstrap-tooltip.js"></script>

    <script type="text/javascript" src="../framework/sliders/flex/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="../framework/sliders/flex/js/shCore.js"></script>
    <script type="text/javascript" src="../framework/sliders/flex/js/shBrushXml.js"></script>
    <script type="text/javascript" src="../framework/sliders/flex/js/shBrushJScript.js"></script>


    <script type="text/javascript" src="../framework/style-switcher/js/colorpicker.js"></script>
    <script src="../framework/bootstrap/js/holder.js"></script>

    <script type="text/javascript" src="../framework/ticker/breaking-news-ticker/jquery.ticker.js"></script>
    <!-- Online  -->
    <script type="text/javascript" src="../framework/ticker/twitter/jquery.tweet.js"></script>

    <!-- Call Functions from One Place -->
    <script type="text/javascript" src="../framework/jsCalling.js"></script>

    <script type="text/javascript" src="../framework/jsSlider.js"></script>

    <script type="text/javascript" src="../framework/jsStyleSwitcher.js"></script>


    <!-- Histats.com  START (hidden counter)-->
    <script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
    <a href="http://www.histats.com/" target="_blank" title="page hit counter">
        <script type="text/javascript">
            try {
                Histats.start(1, 2280553, 4, 0, 0, 0, "");
                Histats.track_hits();
            } catch (err) { };
        </script>
    </a>
    <noscript><a href="http://www.histats.com/" target="_blank"><img src="http://sstatic1.histats.com/03d56.gif?2280553&amp;101" alt="page hit counter" border="0" /></a></noscript>
    <!-- Histats.com  END  -->

</body>
</html>
