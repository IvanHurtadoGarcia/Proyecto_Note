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
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM descargas ORDER BY my_date desc ");
        while($datos=mysql_fetch_array($sqlx)){
        $x++;
        $v_foto[$x]=$datos['id'];
        $v_titulo[$x]=$datos['titulo'];
        $v_intro[$x]=$datos['intro'];
        $v_fecha[$x]=$datos['fecha'];
        $v_texto[$x]=$datos['texto'];
    }
    ?>
    <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>NoteInsideNetwork-descargas</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Styles Should be After Script -->
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../styles.css" />

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
                        <a href="../index.html">
                            <img itemprop="logo" src="../../images/logo.png" alt="Logo" />
                        </a>
                    </div>

                    <div class="adv-970 pull-right visible-desktop">
                        <a href="#MyThemeAdv" target="_blank">
                            <img class="pull-right" src="../../images/ad-970.jpg" alt="970x90" />
                        </a>
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
                                   data-target="#" href="index.html"><i class="icon-home"></i></a>
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
                                    <li><a href="home-styles/descargar.html">Descargar</a></li>
                                    <li><a href="home-styles/lecturas.html">Lecturas</a></li>



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

                <!-- Breaking News --
                <section class="breaking-news-widget">
                    <div class="row-fluid">

                        <div class="title">
                            <h3>Breaking News</h3>
                        </div>
                        <div id="divBreakingNewsTicker" class="content">
                            <ul id="js-news" class="js-hidden">
                                <li><a href="../post-formats/post-image.html">Post With Image</a></li>
                                <li><a href="../post-formats/post-video.html">Post With Video</a></li>
                                <li><a href="../post-formats/post-soundcloud.html">Post With Sound Cloud</a></li>
                                <li><a href="../post-formats/post-googlemap.html">Post With Google Map</a></li>
                                <li><a href="../post-formats/post-image-lightbox.html">Post With Image and Lightbox</a></li>
                                <li><a href="../post-formats/post-review.html">Post With Animated Review System</a></li>
                            </ul>
                        </div>
                    </div>
                </section>-->
                <!-- main content -->
                <article class="article-container" itemscope itemtype="http://schema.org/Article">
                    <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope itemtype="http://schema.org/WebPage">
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        <li>
                                            <a href="#"><i class="bo-icon-home"></i>Inicio</a><i class="icon-caret-right icon-fixed-width"></i>
                                        </li>
                                        <li><a href="#" class="active">Descargas</a></li>
                                    </ul>
                                </div>

                                <h1 itemprop="headline" class="derpy">Descargas</h1>

                                <div class="post-info"></div>

                            </header>

                            <span class="clearfix"></span>

                            <div class="blog">
                                <ul class="media-list">
                                    <li class="media blog-item">
                                        <article>
                                            <div class="span12 img-container" title="">
                                                <img src="../login/administration/admin/secciones/descargas/<?php echo $v_foto[1].'.jpg'; ?>" height="345" width="604">

                                                <a href="../post-formats/post-image.html" class="more"></a>
                                            </div>

                                            <div class="row-fluid">
                                                <div class="media-body span12">
                                                    <div class="row-fluid">
                                                        <div class="span2 blog-date">
                                                            <div class="date-meta">
                                                                <div class="post-date">
                                                                    <div class="date">

                                                                        <span class="month"><?php$sdate=date("d")."/".date("m")."/".date("y");?></span>
                                                                        <span class="day">15</span>
                                                                        <span class="year">2013</span>
                                                                        <hr />
                                                                        <span class="time">01:15 PM</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="span10 blog-desc-container">
                                                            <a href="../post-formats/post-image.html" title="Post with an image">
                                                                <h4 class="media-heading"><?php echo $v_titulo['1']?> </h4>
                                                            </a>

                                                            <div class="post-meta clearfix">
                                                                <ul>
                                                                    <li><a href="#" title="Post Author"><i class="bo-icon-pencil"></i>Comentar</a></li>
                                                                    <li><a href="#" title="Comments"><i class="bo-icon-comment"></i>300</a></li>
                                                                    <li><span title="Views"><i class="bo-icon-eye-open"></i>300</span></li>
                                                                </ul>
                                                            </div>

                                                            <div class="media">
                                                                <p class="blog-desc">
                                                                    <?php echo $v_texto['1']?>
                                                                </p>
                                                                <a href="../post-formats/post-image.html" class="btn-theme">mas...</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="clearfix"></div>

                                            <footer class="row-fluid social-share-footer">
                                                <span class="share-icon icon-caret-right"></span>

                                                <div class="share-icons">
                                                    <!-- Add Social Share Buttons Here --> <!-- AddThis Button BEGIN --><div class="addthis_toolbox addthis_default_style ">
                                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a>
                                                        <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a>
                                                    </div>
                                                    <script type="text/javascript">
                                                        var addthis_config = { "data_track_addressbar": true };
                                                    </script>
                                                    <script type="text/javascript" src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5052d92e104432e3"></script><!-- AddThis Button END -->
                                                </div>

                                            </footer>

                                        </article>
                                    </li>

                                   <li class="media blog-item">
                                        <article>
                                            <div class="span12 img-container" title="">
                                                <img src="../login/administration/admin/secciones/descargas/<?php echo $v_foto[2].'.jpg'; ?>" height="345" width="604">

                                                <a href="../post-formats/post-image.html" class="more"></a>
                                            </div>

                                            <div class="row-fluid">
                                                <div class="media-body span12">
                                                    <div class="row-fluid">
                                                        <div class="span2 blog-date">
                                                            <div class="date-meta">
                                                                <div class="post-date">
                                                                    <div class="date">

                                                                        <span class="month"><?php$sdate=date("d")."/".date("m")."/".date("y");?></span>
                                                                        <span class="day">15</span>
                                                                        <span class="year">2013</span>
                                                                        <hr />
                                                                        <span class="time">01:15 PM</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="span10 blog-desc-container">
                                                            <a href="../post-formats/post-image.html" title="Post with an image">
                                                                <h4 class="media-heading"><?php echo $v_titulo['2']?> </h4>
                                                            </a>

                                                            <div class="post-meta clearfix">
                                                                <ul>
                                                                    <li><a href="#" title="Post Author"><i class="bo-icon-pencil"></i>Comentar</a></li>
                                                                    <li><a href="#" title="Comments"><i class="bo-icon-comment"></i>300</a></li>
                                                                    <li><span title="Views"><i class="bo-icon-eye-open"></i>300</span></li>
                                                                </ul>
                                                            </div>

                                                            <div class="media">
                                                                <p class="blog-desc">
                                                                    <?php echo $v_texto['2']?>
                                                                </p>
                                                                <a href="../post-formats/post-image.html" class="btn-theme">mas...</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="clearfix"></div>

                                            <footer class="row-fluid social-share-footer">
                                                <span class="share-icon icon-caret-right"></span>

                                                <div class="share-icons">
                                                    <!-- Add Social Share Buttons Here --> <!-- AddThis Button BEGIN --><div class="addthis_toolbox addthis_default_style ">
                                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a>
                                                        <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a>
                                                    </div>
                                                    <script type="text/javascript">
                                                        var addthis_config = { "data_track_addressbar": true };
                                                    </script>
                                                    <script type="text/javascript" src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5052d92e104432e3"></script><!-- AddThis Button END -->
                                                </div>

                                            </footer>

                                        </article>
                                    </li>

                                    <li class="media blog-item">
                                        <article>
                                            <div class="span12 img-container" title="">
                                                <img src="../login/administration/admin/secciones/descargas/<?php echo $v_foto[3].'.jpg'; ?>"height="345" width="604">

                                                <a href="../post-formats/post-image.html" class="more"></a>
                                            </div>

                                            <div class="row-fluid">
                                                <div class="media-body span12">
                                                    <div class="row-fluid">
                                                        <div class="span2 blog-date">
                                                            <div class="date-meta">
                                                                <div class="post-date">
                                                                    <div class="date">

                                                                        <span class="month"><?php$sdate=date("d")."/".date("m")."/".date("y");?></span>
                                                                        <span class="day">15</span>
                                                                        <span class="year">2013</span>
                                                                        <hr />
                                                                        <span class="time">01:15 PM</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="span10 blog-desc-container">
                                                            <a href="../post-formats/post-image.html" title="Post with an image">
                                                                <h4 class="media-heading"><?php echo $v_titulo['3']?> </h4>
                                                            </a>

                                                            <div class="post-meta clearfix">
                                                                <ul>
                                                                    <li><a href="#" title="Post Author"><i class="bo-icon-pencil"></i>Comentar</a></li>
                                                                    <li><a href="#" title="Comments"><i class="bo-icon-comment"></i>300</a></li>
                                                                    <li><span title="Views"><i class="bo-icon-eye-open"></i>300</span></li>
                                                                </ul>
                                                            </div>

                                                            <div class="media">
                                                                <p class="blog-desc">
                                                                    <?php echo $v_texto['3']?>
                                                                </p>
                                                                <a href="../post-formats/post-image.html" class="btn-theme">mas...</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="clearfix"></div>

                                            <footer class="row-fluid social-share-footer">
                                                <span class="share-icon icon-caret-right"></span>

                                                <div class="share-icons">
                                                    <!-- Add Social Share Buttons Here --> <!-- AddThis Button BEGIN --><div class="addthis_toolbox addthis_default_style ">
                                                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a>
                                                        <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a>
                                                    </div>
                                                    <script type="text/javascript">
                                                        var addthis_config = { "data_track_addressbar": true };
                                                    </script>
                                                    <script type="text/javascript" src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5052d92e104432e3"></script><!-- AddThis Button END -->
                                                </div>

                                            </footer>

                                        </article>
                                    </li>

                                </ul>


                                <div class="row-fluid paging-footer">

                                    <div class="pagination pagination-centered">
                                        <ul>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">6</a></li>
                                            <li><a href="#">7</a></li>
                                            <li><a href="#">8</a></li>
                                        </ul>
                                    </div>

                                    <div class="current-page"><i class="bo-icon-file"></i>pagina 1 of 8</div>
                                </div>

                            </div>


                            <div class="clearfix"></div>


                        </div>


                        <!-- Article Footer Start from author bio to comments box  --
                        <footer>

                            !-- Members Comments --
                            <span>Comments are closed</span>

                        </footer>-->

                    </div>
                </article>
            </div>


            <!-- Right sidebar -->
                       <section class="span270">
                <h2 class="hidden">Right Sidebar</h2>


                <!-- anteriores -->
                <aside class="widget w-posts">
                    <div class="widget-title">
                        <h4>Servicios anteriores</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="posts-in-widget">
                            <div class="row-fluid modern-items-list">

                                <div id="widget_270_slider1" class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <ul class="items left clearfix">
                                                <!--aqui empiesa un gitget-->
                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                           <img src="../login/administration/admin/secciones/descargas/<?php echo $v_foto[4].'.jpg'; ?>" height="301" width="240">

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i><?php echo $v_titulo['4']?></span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title"><?php echo $v_titulo['4']?></h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"><?php echo $v_fecha['4']?></span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text"><?php echo $v_texto['4']?></p>
                                                            </div>

                                                            <a href="../post-formats/post-image.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li>  <!--aqui termina 1-->
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="items left clearfix">
                                                <!--aqui empiesa un gitget-->
                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                            <img src="../login/administration/admin/secciones/descargas/<?php echo $v_foto[5].'.jpg'; ?>"height="301" width="240px">

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i><?php echo $v_titulo['5']?></span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h4 class="title"><?php echo $v_titulo['5']?></h4>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i><?php echo $v_titulo['5']?></span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text"><?php echo $v_texto['5']?></p>
                                                            </div>

                                                            <a href="../post-formats/post-image.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li> <!--aqui termina 3-->
                                            </ul>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </aside>
                <!-- anteriores -->
                <aside class="widget w-posts">
                    <div class="widget-title">
                        <h4>Servicios anteriores</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="posts-in-widget">
                            <div class="row-fluid modern-items-list">

                                <div id="widget_270_slider1" class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <ul class="items left clearfix">
                                                <!--aqui empiesa un gitget-->
                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                            <img src="../login/administration/admin/secciones/descargas/<?php echo $v_foto[6].'.jpg'; ?>"height="301" width="240px">

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i><?php echo $v_titulo['6']?></span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title"><?php echo $v_titulo['6']?></h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i><?php echo $v_titulo['6']?></span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text"><?php echo $v_texto['6']?></p>
                                                            </div>

                                                            <a href="../post-formats/post-image.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li>  <!--aqui termina 1-->
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="items left clearfix">
                                                <!--aqui empiesa un gitget-->
                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                            <img src="../login/administration/admin/secciones/descargas/<?php echo $v_foto[7].'.jpg'; ?>"height="301" width="240px">

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i><?php echo $v_titulo['7']?></span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h4 class="title"><?php echo $v_titulo['7']?></h4>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i><?php echo $v_titulo['7']?></span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text"><?php echo $v_texto['7']?></p>
                                                            </div>

                                                            <a href="../post-formats/post-image.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li> <!--aqui termina 3-->
                                            </ul>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </aside>
                <!-- anteriores -->
                <aside class="widget w-posts">
                    <div class="widget-title">
                        <h4>Servicios anteriores</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="posts-in-widget">
                            <div class="row-fluid modern-items-list">

                                <div id="widget_270_slider1" class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <ul class="items left clearfix">
                                                <!--aqui empiesa un gitget-->
                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                            <img src="../login/administration/admin/secciones/descargas/<?php echo $v_foto[8].'.jpg'; ?>"height="301" width="240px">

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i><?php echo $v_titulo['8']?></span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title"><?php echo $v_titulo['8']?></h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i><?php echo $v_titulo['8']?></span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text"><?php echo $v_texto['8']?></p>
                                                            </div>

                                                            <a href="../post-formats/post-image.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li>  <!--aqui termina 1-->
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="items left clearfix">
                                                <!--aqui empiesa un gitget-->
                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                            <img src="../login/administration/admin/secciones/descargas/<?php echo $v_foto[9].'.jpg'; ?>"height="301" width="240px">

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i><?php echo $v_titulo['9']?></span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h4 class="title"><?php echo $v_titulo['9']?></h4>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i><?php echo $v_titulo['9']?></span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text"><?php echo $v_texto['9']?></p>
                                                            </div>

                                                            <a href="../post-formats/post-image.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li> <!--aqui termina 3-->
                                            </ul>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </aside>
                <!-- anteriores -->
                <aside class="widget w-posts">
                    <div class="widget-title">
                        <h4>Servicios anteriores</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="posts-in-widget">
                            <div class="row-fluid modern-items-list">

                                <div id="widget_270_slider1" class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <ul class="items left clearfix">
                                                <!--aqui empiesa un gitget-->
                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                            <img src="../login/administration/admin/secciones/descargas/<?php echo $v_foto[10].'.jpg'; ?>"height="301" width="240px">

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i><?php echo $v_titulo['10']?></span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title"><?php echo $v_titulo['10']?></h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i><?php echo $v_titulo['10']?></span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text"><?php echo $v_texto['10']?></p>
                                                            </div>

                                                            <a href="../post-formats/post-image.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li>  <!--aqui termina 1-->
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="items left clearfix">
                                                <!--aqui empiesa un gitget-->
                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                            <img src="../login/administration/admin/secciones/descargas/<?php echo $v_foto[11].'.jpg'; ?>"height="301" width="240px">

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i><?php echo $v_titulo['11']?></span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h4 class="title"><?php echo $v_titulo['11']?></h4>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i><?php echo $v_titulo['11']?></span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text"><?php echo $v_texto['11']?></p>
                                                            </div>

                                                            <a href="../post-formats/post-image.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li> <!--aqui termina 3-->
                                            </ul>
                                        </li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </aside>


            </section>

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
                            <li><a href="../magazine/archives.html">Archives</a></li>
                            <li><a href="../magazine/about-us.html">About US</a></li>
                            <li><a href="../magazine/copyright.html">Copyright</a></li>
                            <li><a href="../magazine/privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </nav>

                    <div class="span6">
                        <p class="pull-right">&copy; Copyright 2013 Adams Magazine Theme by Serpentsoft, All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>

    </section>

    <!-- <div id="divStyleSwitcher" class="div-switcher-back-color">
         <a id="btnToggleStyleSwitcher">
             <i class="icon-wrench"></i>--
             <img src="../../images/settings.png" />
         </a>

         <div id="divThemeColor" class="row-fluid">
             <span class="span12">Theme Color</span>


             <div class="row-fluid">
                 <div id="divColorRed" class="span1 color-picker">
                     <a class="select-color-image"></a>
                 </div>

                 <div id="divColorBlue" class="span1 color-picker">
                     <a class="select-color-image"></a>
                 </div>

                 <div id="divColorOrange" class="span1 color-picker">
                     <a class="select-color-image"></a>
                 </div>

                 <div id="divColorGreen" class="span1 color-picker">
                     <a class="select-color-image"></a>
                 </div>

                 <div id="divColorBlue2" class="span1 color-picker">
                     <a class="select-color-image"></a>
                 </div>

                 <div id="divColorMoov" class="span1 color-picker">
                     <a class="select-color-image"></a>
                 </div>

                 <div id="divColorFucia" class="span1 color-picker">
                     <a class="select-color-image"></a>
                 </div>

                 <div id="divColorFucia2" class="span1 color-picker">
                     <a class="select-color-image"></a>
                 </div>
             </div>
         </div>

         <div id="divBackgroundColor" class="row-fluid">
             <div class="span6">
                 <span class="span12">Background Color</span>

                 <div class="row-fluid">
                     <div class="span12 color-picker">
                         <a class="select-color-image"></a>
                     </div>
                 </div>
             </div>

             <div class="span6">
                 <div id="divBoxed" class="row-fluid">
                     <span class="span12">Body Style</span>

                     <div class="row-fluid">
                         <div id="divFluidStyle" class="span6">
                             <a>Fluid</a>
                         </div>

                         <div id="divFixedStyle" class="span6">
                             <div class="span2 left-border"></div>

                             <div class="span8"><a>Fixed</a></div>

                             <div class="span2 right-border"></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div id="divStickyNav" class="row-fluid">
             <a>Sticky Navigation (Disabled)</a>
         </div>

         <div id="divBackgroundPattern" class="row-fluid">
             <span class="span12">Background Pattern</span>

             <div class="row-fluid">
                 <div id="divP-1" class="span1 color-picker">
                     <a class="select-pattern" style="background-image: url('../../images/bg/28/1.png')"></a>
                 </div>
                 <div id="divP-2" class="span1 color-picker">
                     <a class="select-pattern" style="background-image: url('../../images/bg/28/2.png')"></a>
                 </div>
                 <div id="divP-3" class="span1 color-picker">
                     <a class="select-pattern" style="background-image: url('../../images/bg/28/3.png')"></a>
                 </div>
                 <div id="divP-4" class="span1 color-picker">
                     <a class="select-pattern" style="background-image: url('../../images/bg/28/4.png')"></a>
                 </div>

                 <div id="divP-5" class="span1 color-picker">
                     <a class="select-pattern" style="background-image: url('../../images/bg/28/5.png')"></a>
                 </div>
                 <div id="divP-6" class="span1 color-picker">
                     <a class="select-pattern" style="background-image: url('../../images/bg/28/6.png')"></a>
                 </div>
                 <div id="divP-7" class="span1 color-picker">
                     <a class="select-pattern" style="background-image: url('../../images/bg/28/7.png')"></a>
                 </div>
                 <div id="divP-8" class="span1 color-picker">
                     <a class="select-pattern" style="background-image: url('../../images/bg/28/8.png')"></a>
                 </div>
             </div>
         </div>

         <div id="divCatColors" class="row-fluid">
             <span class="span12">Categories Colors (some colors doesn't work here)</span>

             <div class="row-fluid">
                 <div class="modern-accordion-container">
                     <div id="acc_Cat_Colors" class="accordion">
                         <div class="accordion-group">
                             <div class="accordion-heading">
                                 <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#acc_Cat_Colors" href="#collapse_HCat">
                                     Horizontal Category Colors<i class="icon-angle-down pull-right"></i>
                                 </a>
                             </div>
                             <div id="collapse_HCat" class="accordion-body collapse" style="height: 0px;">
                                 <div class="accordion-inner">
                                     <div id="divH_Cat" class="row-fluid">
                                         <div class="span12 color-picker">
                                             <a class="select-color-image"></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="accordion-group">
                             <div class="accordion-heading">
                                 <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#acc_Cat_Colors" href="#collapse_RevCat">
                                     Review Category Colors<i class="icon-angle-down pull-right"></i>
                                 </a>
                             </div>
                             <div id="collapse_RevCat" class="accordion-body collapse" style="height: 0px;">
                                 <div class="accordion-inner">
                                     <div id="divRev_Cat" class="row-fluid">
                                         <div class="span12 color-picker">
                                             <a class="select-color-image"></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="accordion-group">
                             <div class="accordion-heading">
                                 <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#acc_Cat_Colors" href="#collapse_VerCat_1">
                                     Vertical Category Colors<i class="icon-angle-down pull-right"></i>
                                 </a>
                             </div>
                             <div id="collapse_VerCat_1" class="accordion-body collapse" style="height: 0px;">
                                 <div class="accordion-inner row-fluid">
                                     <div id="divV_Cat" class="span6">
                                         <div class="span12 color-picker">
                                             <a class="select-color-image"></a>
                                         </div>
                                     </div>

                                     <div id="divV_Cat_2" class="span6">
                                         <div class="span12 color-picker">
                                             <a class="select-color-image"></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <div class="accordion-group">
                             <div class="accordion-heading">
                                 <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#acc_Cat_Colors" href="#collapse_HD_Cat">
                                     Horizontal Divided Category Colors<i class="icon-angle-down pull-right"></i>
                                 </a>
                             </div>
                             <div id="collapse_HD_Cat" class="accordion-body collapse" style="height: 0px;">
                                 <div class="accordion-inner">
                                     <div id="divHD_Cat" class="row-fluid">
                                         <div class="span12 color-picker">
                                             <a class="select-color-image"></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>

             </div>

         </div>
     </div>-->
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
