<?php 
    include('../php_conexion.php'); 
    $n=0;
    $sqll=mysql_query("SELECT * FROM titulos");
    while($dato=mysql_fetch_array($sqll)){
        $n++;
        $v_titulop[$n]=$dato['titulo'];
        $v_cuadro[$n]=$dato['cuadro'];
    }
    $x=0;
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM videojuegos  ORDER BY my_date desc ");
        while($datos=mysql_fetch_array($sqlx)){
        $x++;
        $v_foto[$x]=$datos['id'];
        $v_titulo[$x]=$datos['titulo'];
        $v_intro[$x]=$datos['intro'];
        $v_fecha[$x]=$datos['fecha'];
    }
     
    $x2=0;
    $sqlx2=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM noticias ORDER BY my_date desc ");
        while($datos2=mysql_fetch_array($sqlx2)){
        $x2++;
        $v2_foto[$x2]=$datos2['id'];
        $v2_titulo[$x2]=$datos2['titulo'];
        $v2_intro[$x2]=$datos2['intro'];
        $v2_fecha[$x2]=$datos2['fecha'];
    }
    $x3=0;
    $sqlx3=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM reviews ORDER BY my_date desc");
        while($datos3=mysql_fetch_array($sqlx3)){
        $x3++;
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
    <link rel="stylesheet" href="../style.css" />
    <link rel="shortcut icon" href="../images/favicon.png">
    <link id="cssThemeColor" rel="stylesheet" href="#" />

    <!--[if IE 7]>
    <link id="lnkFontAwesomeIE7" href="../../framework/fontawesome/css/font-awesome-ie7.min.css" rel="stylesheet" />
    <![endif]-->

    <!--[if lt IE 9]>
      <script src="../../framework/fix-ie/html5.js"></script>
    <![endif]-->

    <script src="../../framework/fix-ie/modernizr.v262.js"></script>

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
                                                            <div class="row-fluid title">
                                                                <h3><i class="bo-icon-user bo-icon-white"></i>Login</h3>
                                                                <hr />
                                                            </div>

                                                            <div class="row-fluid">
                                                                <form method="get" class="login-form">
                                                                    <div class="input-prepend input-block-level">
                                                                        <span class="add-on"><i class="icon-envelope"></i></span>
                                                                        <input id="Email1" class="span10" type="email" placeholder="Email" required="required" />
                                                                    </div>

                                                                    <div class="input-prepend input-block-level">
                                                                        <span class="add-on"><i class="icon-key"></i></span>
                                                                        <input id="Password1" class="span10" type="password" placeholder="Password" required="required" />
                                                                    </div>

                                                                    <label class="checkbox">
                                                                        <input type="checkbox" />
                                                                        Remember me
                                                                    </label>

                                                                    <button type="submit" class="btn-theme">Sign in</button>
                                                                </form>
                                                            </div>
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
                        <a href="../index.php">
                            <img itemprop="logo" src="../../images/LogoNiN.png" alt="Logo" /></a>
                    </div>

                    <div class="adv-970 pull-right visible-desktop">
                        <a href="#MyThemeAdv" target="_blank">
                            <img class="pull-right" src="../../images/ad-970.jpg" alt="970x90" /></a>
                    </div>
                </div>
            </div>
        </div>

    </header>

     <nav class="container-fluid navbar-main enable-fixed">
        <h2 class="hidden">Site Navigation </h2>


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
                                    <li><a href="home-styles/technews.html" title="">Noticias Tecnol&oacute;gicas</a></li>
                                    <li><a href="home-styles/left-sb.html" title="">Video Juegos </a></li>
                                    <li><a href="home-styles/middle-content.html" title="">Reviews</a></li>
                                </ul>

                            </li>

                            <li class="divider-vertical"></li>
                            
                            <li class="dropdown" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="A1" role="button"
                                   data-hover="dropdown" data-delay="200"
                                   data-target="#" href="#">Sociedad y Cultura<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="home-styles/blog.html">Eventos</a></li>
                                    <li><a href="home-styles/blog.html">Recomendaciones Musicales</a></li>
                                    <li><a href="home-styles/blog.html">Fotografía</a></li>
                                    <li><a href="home-styles/blog.html">Video</a></li>
                                    <li><a href="home-styles/blog.html">Salud</a></li>
                                   

                                </ul>
                            </li>
                            <li class="dropdown" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="a4" role="button"
                                   data-hover="dropdown" data-delay="200"
                                   data-target="#" href="#" title="">Polit&iacute;ca<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="home-styles/blog.html">Internacional</a></li>
                                    <li><a href="home-styles/blog.html">Nacional</a></li>
                                    <li><a href="home-styles/blog.html">Opinion</a></li>
                                    


                                </ul>

                            </li>

                            <li class="dropdown" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="a4" role="button"
                                   data-hover="dropdown" data-delay="200"
                                   data-target="#" href="#" title="">Inter&eacute;s General<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="home-styles/lecturas.html">Lecturas</a></li>
                                    <li><a href="home-styles/descargar.html">Descargas</a></li>
                                    <li><a href="home-styles/random.html">Random</a></li>
                                    


                                </ul>

                            </li>

                            <li class="divider-vertical"></li>

                          

                            <li class="divider-vertical"></li>

                            <li class="dropdown" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="a5" role="button"
                                    data-hover="dropdown" data-delay="200"
                                    data-target="#" href="#" title="">Nosotros<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="page-templates/authors.html" title="">Autores</a></li>
                                    <li><a href="home-styles/blog.html">¿Qué somos?</a></li>
                                    <li><a href="home-styles/blog.html">Preguntas Frecuentes</a></li>
                                </ul>
                            </li>

                            <li class="divider-vertical"></li>

                           

                            <li class="divider-vertical"></li>

                           

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
               
                

                <!-- main content -->
                <article class="article-container" itemscope itemtype="http://schema.org/Article">
                    <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope itemtype="http://schema.org/WebPage">
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        <li>
                                            <a href="../index.php"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="technews.php" class="active">Noticias de Tecnol&oacute;gia</a></li>
                                    </ul>
                                </div>

                                <h1 itemprop="headline">Noticias de Tecnol&oacute;gia</h1>

                                <div class="post-info"></div>

                            </header>

                            <span class="clearfix"></span>

                            <div class="blog">
                                <ul class="media-list">
                                    <li class="media blog-item">
                                        <article>
                                            <div class="span12 img-container" title="">
                                                <img src="../login/administration/admin/secciones/noticiast/<?php echo $v_foto[1].'.jpg'; ?>" height="345" width="604">

                                                <a href="tecnologias.php?titulo=<?php echo $v_titulo['1'] ?>&id=6" class="more"></a>
                                            </div>

                                            <div class="row-fluid">
                                            <div class="media-body span12">
                                                <div class="row-fluid">
                                                    <div class="span2 blog-date">
                                                        <div class="date-meta">
                                                            <div class="post-date">
                                                                <div class="date">
                                                                  <b><p>Post:</p><p style="font-size:12px;font-family:cursive" align="center"><br /><?php echo $v_fecha['1'] ?></p></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    

                                                    <div class="span10 blog-desc-container">
                                                            <a href="tecnologias.php?titulo=<?php echo $v_titulo['1'] ?>&id=6" title="">
                                                            <h4 class="media-heading"><?php echo $v_titulo['1'] ?></h4>
                                                        </a>

                                                        <div class="post-meta clearfix">
                                                            
                                                        </div>

                                                        <div class="media">
                                                            <p class="blog-desc">
                                                                <?php echo $v_intro['1'] ?>...
                                                            </p>
                                                            <a href="tecnologias.php?titulo=<?php echo $v_titulo['1'] ?>&id=6" class="btn-theme">Continuuar Leyendo...</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            </div>

                                            <div class="clearfix"></div>

                                            <footer class="row-fluid social-share-footer">
                                                <span class="share-icon icon-caret-right"></span>

                                                <div class="share-icons">
                                                    <!-- Add Social Share Buttons Here --> <!-- AddThis Button BEGIN --><div class="addthis_toolbox addthis_default_style "> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div><script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script><script type="text/javascript" src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5052d92e104432e3"></script><!-- AddThis Button END -->
                                                </div>

                                            </footer>

                                        </article>
                                    </li>

                                    <li class="media blog-item">
                                        <article>
                                            <div class="span12 img-container" title="">
                                                <img src="../login/administration/admin/secciones/noticiast/<?php echo $v_foto[2].'.jpg'; ?>" height="345" width="604">

                                                <a href="tecnologias.php?titulo=<?php echo $v_titulo['2'] ?>&id=5" class="more"></a>
                                            </div>

                                            <div class="row-fluid">
                                            <div class="media-body span12">
                                                <div class="row-fluid">
                                                    <div class="span2 blog-date">
                                                        <div class="date-meta">
                                                            <div class="post-date">
                                                                <div class="date">
                                                                  <b><p>Post:</p><p style="font-size:12px;font-family:cursive" align="center"><br /><?php echo $v_fecha['2'] ?></p></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    

                                                    <div class="span10 blog-desc-container">
                                                            <a href="tecnologias.php?titulo=<?php echo $v_titulo['2'] ?>&id=5" title="">
                                                            <h4 class="media-heading"><?php echo $v_titulo['2'] ?></h4>
                                                        </a>

                                                        <div class="post-meta clearfix">
                                                            
                                                        </div>

                                                        <div class="media">
                                                            <p class="blog-desc">
                                                                <?php echo $v_intro['2'] ?>...
                                                            </p>
                                                            <a href="tecnologias.php?titulo=<?php echo $v_titulo['2'] ?>&id=5" class="btn-theme">Continuuar Leyendo...</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            </div>

                                            <div class="clearfix"></div>

                                            <footer class="row-fluid social-share-footer">
                                                <span class="share-icon icon-caret-right"></span>

                                                <div class="share-icons">
                                                    <!-- Add Social Share Buttons Here --> <!-- AddThis Button BEGIN --><div class="addthis_toolbox addthis_default_style "> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div><script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script><script type="text/javascript" src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5052d92e104432e3"></script><!-- AddThis Button END -->
                                                </div>

                                            </footer>

                                        </article>
                                    </li>

                                    <li class="media blog-item">
                                        <article>
                                            <div class="span12 img-container" title="">
                                                <img src="../login/administration/admin/secciones/noticiast/<?php echo $v_foto[3].'.jpg'; ?>" height="345" width="604">

                                                <a href="tecnologias.php?titulo=<?php echo $v_titulo['3'] ?>&id=4" class="more"></a>
                                            </div>

                                            <div class="row-fluid">
                                            <div class="media-body span12">
                                                <div class="row-fluid">
                                                    <div class="span2 blog-date">
                                                        <div class="date-meta">
                                                            <div class="post-date">
                                                                <div class="date">
                                                                  <b><p>Post:</p><p style="font-size:12px;font-family:cursive" align="center"><br /><?php echo $v_fecha['3'] ?></p></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    

                                                    <div class="span10 blog-desc-container">
                                                            <a href="tecnologias.php?titulo=<?php echo $v_titulo['3'] ?>&id=4" title="">
                                                            <h4 class="media-heading"><?php echo $v_titulo['3'] ?></h4>
                                                        </a>

                                                        <div class="post-meta clearfix">
                                                            
                                                        </div>

                                                        <div class="media">
                                                            <p class="blog-desc">
                                                                <?php echo $v_intro['3'] ?>...
                                                            </p>
                                                            <a href="tecnologias.php?titulo=<?php echo $v_titulo['3'] ?>&id=4" class="btn-theme">Continuuar Leyendo...</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            </div>

                                            <div class="clearfix"></div>

                                            <footer class="row-fluid social-share-footer">
                                                <span class="share-icon icon-caret-right"></span>

                                                <div class="share-icons">
                                                    <!-- Add Social Share Buttons Here --> <!-- AddThis Button BEGIN --><div class="addthis_toolbox addthis_default_style "> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div><script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script><script type="text/javascript" src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5052d92e104432e3"></script><!-- AddThis Button END -->
                                                </div>

                                            </footer>

                                        </article>
                                    </li>

                                    <li class="media blog-item">
                                        <article>
                                            <div class="span12 img-container" title="">
                                                <img src="../login/administration/admin/secciones/noticiast/<?php echo $v_foto[4].'.jpg'; ?>" height="345" width="604">

                                                <a href="tecnologias.php?titulo=<?php echo $v_titulo['4'] ?>&id=3" class="more"></a>
                                            </div>

                                            <div class="row-fluid">
                                            <div class="media-body span12">
                                                <div class="row-fluid">
                                                    <div class="span2 blog-date">
                                                        <div class="date-meta">
                                                            <div class="post-date">
                                                                <div class="date">
                                                                  <b><p>Post:</p><p style="font-size:12px;font-family:cursive" align="center"><br /><?php echo $v_fecha['4'] ?></p></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    

                                                    <div class="span10 blog-desc-container">
                                                            <a href="tecnologias.php?titulo=<?php echo $v_titulo['4'] ?>&id=3" title="">
                                                            <h4 class="media-heading"><?php echo $v_titulo['4'] ?></h4>
                                                        </a>

                                                        <div class="post-meta clearfix">
                                                            
                                                        </div>

                                                        <div class="media">
                                                            <p class="blog-desc">
                                                                <?php echo $v_intro['4'] ?>...
                                                            </p>
                                                            <a href="tecnologias.php?titulo=<?php echo $v_titulo['4'] ?>&id=3" class="btn-theme">Continuuar Leyendo...</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            </div>

                                            <div class="clearfix"></div>

                                            <footer class="row-fluid social-share-footer">
                                                <span class="share-icon icon-caret-right"></span>

                                                <div class="share-icons">
                                                    <!-- Add Social Share Buttons Here --> <!-- AddThis Button BEGIN --><div class="addthis_toolbox addthis_default_style "> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div><script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script><script type="text/javascript" src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5052d92e104432e3"></script><!-- AddThis Button END -->
                                                </div>

                                            </footer>

                                        </article>
                                    </li>

                                    <li class="media blog-item">
                                        <article>
                                            <div class="span12 img-container" title="">
                                                <img src="../login/administration/admin/secciones/noticiast/<?php echo $v_foto[5].'.jpg'; ?>" height="345" width="604">

                                                <a href="tecnologias.php?titulo=<?php echo $v_titulo['5'] ?>&id=2" class="more"></a>
                                            </div>

                                            <div class="row-fluid">
                                            <div class="media-body span12">
                                                <div class="row-fluid">
                                                    <div class="span2 blog-date">
                                                        <div class="date-meta">
                                                            <div class="post-date">
                                                                <div class="date">
                                                                  <b><p>Post:</p><p style="font-size:12px;font-family:cursive" align="center"><br /><?php echo $v_fecha['5'] ?></p></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    

                                                    <div class="span10 blog-desc-container">
                                                            <a href="tecnologias.php?titulo=<?php echo $v_titulo['5'] ?>&id=2" title="">
                                                            <h4 class="media-heading"><?php echo $v_titulo['5'] ?></h4>
                                                        </a>

                                                        <div class="post-meta clearfix">
                                                            
                                                        </div>

                                                        <div class="media">
                                                            <p class="blog-desc">
                                                                <?php echo $v_intro['5'] ?>...
                                                            </p>
                                                            <a href="tecnologias.php?titulo=<?php echo $v_titulo['5'] ?>&id=2" class="btn-theme">Continuuar Leyendo...</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            </div>

                                            <div class="clearfix"></div>

                                            <footer class="row-fluid social-share-footer">
                                                <span class="share-icon icon-caret-right"></span>

                                                <div class="share-icons">
                                                    <!-- Add Social Share Buttons Here --> <!-- AddThis Button BEGIN --><div class="addthis_toolbox addthis_default_style "> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div><script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script><script type="text/javascript" src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5052d92e104432e3"></script><!-- AddThis Button END -->
                                                </div>

                                            </footer>

                                        </article>
                                    </li>
                                </ul>


                                
                            </div>


                            <div class="clearfix"></div>

                            
                        </div>



                    </div>
                </article>
            </div>


           <!-- Right sidebar -->
            <section class="span270">
                <h2 class="hidden">Right Sidebar</h2>

               

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
                <aside class="widget w-adv">
                    <div class="widget-title">
                        
                    </div>

                    <div class="widget-content clearfix">
                        <img src="../img/anuncia.gif" />
                    </div>
                </aside>


            </section>

            <!-- Left sidebar -->
            <section class="span300">
                <h2 class="hidden">Left Sidebar</h2>

                <!-- Posts Of The Day -->
               

              

        </div>

        <!-- Footer Advertise -->
        <div class="row-fluid visible-desktop">
            <div class="span12 footer-adv">
                <a href="#MyThemeAdv" target="_blank">
                    <img src="../../images/ad-728.jpg" alt="Adv 728" />
                </a>
            </div>
        </div>

    </div>

    <!-- Twitter Ticker -->
    

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

    <script type="text/javascript" src="../../framework/jquery.easing.1.3.js"></script>

    <script src="../../framework/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../framework/bootstrap/js/bootstrap-hover-dropdown.js"></script>
    <script src="../../framework/bootstrap/js/bootstrap-tooltip.js"></script>

    <script type="text/javascript" src="../../framework/sliders/flex/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="../../framework/sliders/flex/js/shCore.js"></script>
    <script type="text/javascript" src="../../framework/sliders/flex/js/shBrushXml.js"></script>
    <script type="text/javascript" src="../../framework/sliders/flex/js/shBrushJScript.js"></script>


    <script type="text/javascript" src="../../framework/style-switcher/js/colorpicker.js"></script>
    <script src="../../framework/bootstrap/js/holder.js"></script>

    <script type="text/javascript" src="../../framework/ticker/breaking-news-ticker/jquery.ticker.js"></script>
    <!-- Online  -->
    <script type="text/javascript" src="../../framework/ticker/twitter/jquery.tweet.js"></script>

    <!-- Call Functions from One Place -->
    <script type="text/javascript" src="../../framework/jsCalling.js"></script>

    <script type="text/javascript" src="../../framework/jsSlider.js"></script>

    <script type="text/javascript" src="../../framework/jsStyleSwitcher.js"></script>

    <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
    <!-- Download Google Chrome Frame in order to run theme on internet explorer versions -->

    <!--[if IE]>
    <script type="text/javascript" 
     src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>

    <style>
     .chromeFrameInstallDefaultStyle {
       width: 100%; /* default is 800px */
       border: 2px solid red;
     }
    </style>

    <div id="prompt">
        alert("Your Internet Explorer Needs Google Chrome Frame to work properly");
    </div>
 
    <script>
        // The conditional ensures that this code will only execute in IE,
        // Therefore we can use the IE-specific attachEvent without worry
        window.attachEvent("onload", function () {
            CFInstall.check({
                mode: "inline", // the default
                node: "prompt"
            });
        });
    </script>
    <![endif]-->

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
    <noscript><a href="http://www.histats.com/" target="_blank"><img src="../http://sstatic1.histats.com/03d56.gif?2280553&amp;101" alt="page hit counter" border="0" /></a></noscript>
    <!-- Histats.com  END  -->

</body>
</html>
