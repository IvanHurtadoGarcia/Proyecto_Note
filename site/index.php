<?php 
    include('php_conexion.php'); 
    $n=0;
    $sqll=mysql_query("SELECT * FROM titulos");
    while($dato=mysql_fetch_array($sqll)){
        $n++;
        $v_titulop[$n]=$dato['titulo'];
        $v_cuadro[$n]=$dato['cuadro'];
    }
    $x=0;
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM noticias  ORDER BY my_date desc LIMIT 6");
        while($datos=mysql_fetch_array($sqlx)){
        $x++;
        $v_foto[$x]=$datos['id'];
        $v_titulo[$x]=$datos['titulo'];
        $v_intro[$x]=$datos['intro'];
        $v_fecha[$x]=$datos['fecha'];
    }
     
    $x2=0;
    $sqlx2=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM noticias,tipos where tipo=2  ORDER BY my_date desc LIMIT 6");
        while($datos2=mysql_fetch_array($sqlx2)){
        $x2++;
        $v2_foto[$x2]=$datos2['id'];
        $v2_titulo[$x2]=$datos2['titulo'];
        $v2_intro[$x2]=$datos2['intro'];
        $v2_fecha[$x2]=$datos2['fecha'];
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
                        <a href="index.html">
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
                <section class="breaking-news-widget">
                    <div class="row-fluid">

                        <div class="title">
                            <h3>Más Actuales</h3>
                        </div>
                        <div id="divBreakingNewsTicker" class="content">
                            <ul id="js-news" class="js-hidden">
                                <li><a href="post-formats/post-image.html"><?php echo $v_titulo['1'] ?></a></li>
                                <li><a href="post-formats/post-video.html"><?php echo $v_titulo['2'] ?></a></li>
                                <li><a href="post-formats/post-soundcloud.html"><?php echo $v_titulo['3'] ?></a></li>
                                <li><a href="post-formats/post-googlemap.html"><?php echo $v_titulo['4'] ?></a></li>
                                <li><a href="post-formats/post-image-lightbox.html"><?php echo $v_titulo['5'] ?></a></li>
                                <li><a href="post-formats/post-review.html"><?php echo $v_titulo['6'] ?></a></li>
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
                                            <img src="login/administration/admin/noticias/<?php echo $v_foto[1].'.jpg'; ?>" height="345" width="604">
                                             <div class="description visible-part">
                                                <div class="title">
                                                    <div class="post-date">
                                                        <div class="date">
                                                          <b><p style="font-size:13px">Posteado:<br /><?php echo $v_fecha['1'] ?></p></b>
                                                            <hr />
                                                         
                                                        </div>
                                                    </div>

                                                    <h3><?php echo $v_titulo['1'] ?></h3>

                                                    
                                                </div>

                                                <p class="text"><?php echo $v_intro[1]; ?></p>
                                            </div>

                                            <a href="post-formats/post-image.html" class="more" title=""></a>
                                        </div>
                                    </article>
                                </li>

                                <li>
                                    <article class="fold-item span12">
                                        <div class="clearfix">
                                          <img src="login/administration/admin/noticias/<?php echo $v_foto[2].'.jpg'; ?>" height="345" width="604">
                                            <div class="description visible-part">
                                                <div class="title">
                                                    <div class="post-date">
                                                        <div class="date">
                                                          <b><p style="font-size:13px">Posteado:<br /><?php echo $v_fecha['2'] ?></p></b>
                                                            <hr />
                                                         
                                                        </div>
                                                    </div>

                                                   <h3><?php echo $v_titulo['2'] ?></h3>
                                                </div>

                                                 <p class="text"><?php echo $v_intro[2]; ?></p>
                                            </div>

                                            <a href="post-formats/post-soundcloud.html" class="more" title=""></a>
                                        </div>
                                    </article>
                                </li>

                                <li>
                                    <article class="fold-item span12">
                                        <div class="clearfix">
                                            <img src="login/administration/admin/noticias/<?php echo $v_foto[3].'.jpg'; ?>" height="345" width="604">
                                            <div class="description visible-part">
                                                <div class="title">
                                                    <div class="post-date">
                                                        <div class="date">
                                                          <b><p style="font-size:13px">Posteado:<br /><?php echo $v_fecha['3'] ?></p></b>
                                                            <hr />
                                                         
                                                        </div>
                                                    </div>

                                                   <h3><?php echo $v_titulo['3'] ?></h3>
                                                </div>
                                             <p class="text"><?php echo $v_intro[3]; ?></p>
                                            </div>

                                            <a href="post-formats/post-video.html" class="more" title=""></a>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article class="fold-item span12">
                                        <div class="clearfix">
                                            <img src="login/administration/admin/noticias/<?php echo $v_foto[4].'.jpg'; ?>" height="345" width="604">
                                            <div class="description visible-part">
                                                <div class="title">
                                                    <div class="post-date">
                                                        <div class="date">
                                                          <b><p style="font-size:13px">Posteado:<br /><?php echo $v_fecha['4'] ?></p></b>
                                                            <hr />
                                                         
                                                        </div>
                                                    </div>

                                                   <h3><?php echo $v_titulo['4'] ?></h3>
                                                </div>
                                             <p class="text"><?php echo $v_intro[4]; ?></p>
                                            </div>

                                            <a href="post-formats/post-video.html" class="more" title=""></a>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article class="fold-item span12">
                                        <div class="clearfix">
                                            <img src="login/administration/admin/noticias/<?php echo $v_foto[5].'.jpg'; ?>" height="345" width="604">
                                            <div class="description visible-part">
                                                <div class="title">
                                                    <div class="post-date">
                                                        <div class="date">
                                                          <b><p style="font-size:13px">Posteado:<br /><?php echo $v_fecha['5'] ?></p></b>
                                                            <hr />
                                                         
                                                        </div>
                                                    </div>

                                                   <h3><?php echo $v_titulo['5'] ?></h3>
                                                </div>
                                             <p class="text"><?php echo $v_intro[5]; ?></p>
                                            </div>

                                            <a href="post-formats/post-video.html" class="more" title=""></a>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article class="fold-item span12">
                                        <div class="clearfix">
                                            <img src="login/administration/admin/noticias/<?php echo $v_foto[6].'.jpg'; ?>" height="345" width="604">
                                            <div class="description visible-part">
                                                <div class="title">
                                                    <div class="post-date">
                                                        <div class="date">
                                                          <b><p style="font-size:13px">Posteado:<br /><?php echo $v_fecha['6'] ?></p></b>
                                                            <hr />
                                                         
                                                        </div>
                                                    </div>

                                                   <h3><?php echo $v_titulo['6'] ?></h3>
                                                </div>
                                             <p class="text"><?php echo $v_intro[6]; ?></p>
                                            </div>

                                            <a href="post-formats/post-video.html" class="more" title=""></a>
                                        </div>
                                    </article>
                                </li>

                            </ul>
                        </div>

                        <div id="mainSlider1-carousel" class="flexslider large carousel">
                            <ul class="slides">
                                <li>
                                     <img src="login/administration/admin/noticias/<?php echo $v_foto[1].'.jpg'; ?>" height="65" width="97">
                                </li>
                                <li>
                                    <img src="login/administration/admin/noticias/<?php echo $v_foto[2].'.jpg'; ?>" height="65" width="97">
                                </li>
                                <li>
                                    <img src="login/administration/admin/noticias/<?php echo $v_foto[3].'.jpg'; ?>" height="65" width="97">
                                </li>
                                <li>
                                    <img src="login/administration/admin/noticias/<?php echo $v_foto[4].'.jpg'; ?>" height="65" width="97">
                                </li>
                                <li>
                                    <img src="login/administration/admin/noticias/<?php echo $v_foto[5].'.jpg'; ?>" height="65" width="97">
                                </li>
                                <li>
                                    <img src="login/administration/admin/noticias/<?php echo $v_foto[6].'.jpg'; ?>" height="65" width="97">
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
                        <a href="#">
                            <h3>Ultimas en Social</h3>
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
                                    <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/2.jpg&amp;w=243&amp;h=150" />

                                    <div class="img-meta">
                                        <div class="post-date">
                                            <div class="date">
                                                <span class="month">Jan</span>
                                                <span class="day">15</span>
                                                <span class="month">2013</span>
                                                <hr>
                                                <span class="time">01:15 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="#" class="more"></a>
                                </div>

                                <div class="span7">
                                    <div class="post-info">
                                        <div class="post-title clearfix">
                                            <a href="#" title="Full Post Title">
                                                <h4 class="pull-left">Horizontal Category with two Metro columns</h4>
                                            </a>
                                        </div>

                                        <div class="post-meta clearfix">
                                            <ul class="clearfix">
                                                <li><a href="#" title="Post Author"><i class="bo-icon-pencil"></i>Serpentsoft</a></li>

                                                <li><a href="#" title="Comments"><i class="bo-icon-comment"></i>15</a></li>
                                                <li><span title="Views"><i class="bo-icon-eye-open"></i>250</span></li>
                                            </ul>
                                        </div>

                                        <div class="post-desc">
                                            <p>Proin gravida nibh vel velit. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi ...</p>
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
                                                                    <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/3.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Post With Featured Image</h5>

                                                                        <div class="info">
                                                                            <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                            <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                            <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                        </div>

                                                                        <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                    </div>

                                                                    <a href="post-formats/post-image.html" class="more" title=""></a>
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/4.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Post With Google Map</h5>

                                                                        <div class="info">
                                                                            <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                            <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                            <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                        </div>

                                                                        <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                    </div>

                                                                    <a href="post-formats/post-googlemap.html" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>
                                                    </li>

                                                    <li class="row-fluid">
                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/5.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Post With Featured Video</h5>

                                                                        <div class="info">
                                                                            <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                            <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                            <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                        </div>

                                                                        <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                    </div>

                                                                    <a href="post-formats/post-video.html" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/6.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Post With Sound Cloud</h5>

                                                                        <div class="info">
                                                                            <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                            <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                            <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                        </div>

                                                                        <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                    </div>

                                                                    <a href="post-formats/post-soundcloud.html" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li>
                                                <ul class="items left clearfix">
                                                    <li class="row-fluid">
                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/12.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Post With Google Map</h5>

                                                                        <div class="info">
                                                                            <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                            <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                            <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                        </div>

                                                                        <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                    </div>

                                                                    <a href="post-formats/post-googlemap.html" class="more" title=""></a>
                                                                </div>
                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/13.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Post With Video</h5>

                                                                        <div class="info">
                                                                            <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                            <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                            <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                        </div>

                                                                        <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                    </div>

                                                                    <a href="post-formats/post-video.html" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>
                                                    </li>

                                                    <li class="row-fluid">
                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/9.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Post With Featured Image</h5>

                                                                        <div class="info">
                                                                            <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                            <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                            <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                        </div>

                                                                        <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                    </div>

                                                                    <a href="post-formats/post-image.html" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/8.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Post With Sound Cloud</h5>

                                                                        <div class="info">
                                                                            <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                            <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                            <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                        </div>

                                                                        <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                    </div>

                                                                    <a href="post-formats/post-soundcloud.html" class="more" title=""></a>
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

                <!-- Reviews -->
                <section class="cat-widget review-cat-1">
                    <div class="cat-widget-title">
                        <a href="#">
                            <h3>Ultimas Reviews</h3>
                        </a>
                    </div>

                    <div class="cat-widget-content">
                        <div class="row-fluid cat-review modern-items-list">
                            <div id="review_cat_slider1" class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <ul class="items left clearfix">
                                            <li>
                                                <article class="review clearfix">

                                                    <div class="span5 img-container" title="">
                                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/12.jpg&amp;w=243&amp;h=150" />

                                                        <div class="img-meta">
                                                            <div class="post-result">
                                                                <div class="percent">
                                                                    <span>100%</span>
                                                                    <span class="grade">Excellent</span>
                                                                </div>

                                                                <div class="stars">
                                                                    <div class="rating">
                                                                        <span class="stars-24" title="100% Excellent">
                                                                            <span class="fill" style="width: 100%"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a href="#" class="more"></a>
                                                    </div>

                                                    <div class="span7 content">
                                                        <div class="post-info">
                                                            <div class="post-title clearfix">
                                                                <a href="#" title="Full Post Title">
                                                                    <h4>Samsung Galaxy S4</h4>
                                                                </a>
                                                            </div>

                                                            <div class="post-desc">
                                                                <ul class="criteria clearfix">
                                                                    <li>
                                                                        <div class="title">
                                                                            Build Quality And Design
                                                                        </div>
                                                                        <div class="grade">
                                                                            98%
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="title">
                                                                            Display
                                                                        </div>
                                                                        <div class="grade">
                                                                            70%
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="title">
                                                                            Speakers
                                                                        </div>
                                                                        <div class="grade">
                                                                            80%
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="title">
                                                                            Hardware
                                                                        </div>
                                                                        <div class="grade">
                                                                            70%
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="title">
                                                                            Battery
                                                                        </div>
                                                                        <div class="grade">
                                                                            80%
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </article>
                                            </li>

                                            <li>
                                                <article class="review clearfix">

                                                    <div class="span5 img-container" title="">
                                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/6.jpg&amp;w=243&amp;h=150" />

                                                        <div class="img-meta">
                                                            <div class="post-result">
                                                                <div class="percent">
                                                                    <span>70%</span>
                                                                    <span class="grade">Very Good</span>
                                                                </div>

                                                                <div class="stars">
                                                                    <div class="rating">
                                                                        <span class="stars-24" title="70% Very Good">
                                                                            <span class="fill" style="width: 70%"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a href="#" class="more"></a>
                                                    </div>

                                                    <div class="span7 content">
                                                        <div class="post-info">
                                                            <div class="post-title clearfix">
                                                                <a href="#" title="Full Post Title">
                                                                    <h4>Sony Xperia Z</h4>
                                                                </a>
                                                            </div>

                                                            <div class="post-desc">
                                                                <ul class="criteria clearfix">
                                                                    <li>
                                                                        <div class="title">
                                                                            Display
                                                                        </div>
                                                                        <div class="grade">
                                                                            90%
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="title">
                                                                            Speakers
                                                                        </div>
                                                                        <div class="grade">
                                                                            50%
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="title">
                                                                            Battery
                                                                        </div>
                                                                        <div class="grade">
                                                                            80%
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </article>
                                            </li>
                                        </ul>
                                    </li>


                                    <li>
                                        <ul class="items left clearfix">
                                            <li>
                                                <article class="review clearfix">

                                                    <div class="span5 img-container" title="">
                                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/1.jpg&amp;w=243&amp;h=150" />

                                                        <div class="img-meta">
                                                            <div class="post-result">
                                                                <div class="percent">
                                                                    <span>40%</span>
                                                                    <span class="grade">Not Bad</span>
                                                                </div>

                                                                <div class="stars">
                                                                    <div class="rating">
                                                                        <span class="stars-24" title="40% Not Bad">
                                                                            <span class="fill" style="width: 40%"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a href="#" class="more"></a>
                                                    </div>

                                                    <div class="span7 content">
                                                        <div class="post-info">
                                                            <div class="post-title clearfix">
                                                                <a href="#" title="Full Post Title">
                                                                    <h4>NOKIA Lumia 900</h4>
                                                                </a>
                                                            </div>

                                                            <div class="post-desc">
                                                                <ul class="criteria clearfix">
                                                                    <li>
                                                                        <div class="title">
                                                                            Build Quality And Design
                                                                        </div>
                                                                        <div class="grade">
                                                                            40%
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="title">
                                                                            Display
                                                                        </div>
                                                                        <div class="grade">
                                                                            20%
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="title">
                                                                            Speakers
                                                                        </div>
                                                                        <div class="grade">
                                                                            30%
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="title">
                                                                            Hardware
                                                                        </div>
                                                                        <div class="grade">
                                                                            70%
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="title">
                                                                            Battery
                                                                        </div>
                                                                        <div class="grade">
                                                                            80%
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </article>
                                            </li>

                                            <li>
                                                <article class="review clearfix">

                                                    <div class="span5 img-container" title="">
                                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/2.jpg&amp;w=243&amp;h=150" />

                                                        <div class="img-meta">
                                                            <div class="post-result">
                                                                <div class="percent">
                                                                    <span>60%</span>
                                                                    <span class="grade">Good</span>
                                                                </div>

                                                                <div class="stars">
                                                                    <div class="rating">
                                                                        <span class="stars-24" title="70% Very Good">
                                                                            <span class="fill" style="width: 60%"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a href="#" class="more"></a>
                                                    </div>

                                                    <div class="span7 content">
                                                        <div class="post-info">
                                                            <div class="post-title clearfix">
                                                                <a href="#" title="Full Post Title">
                                                                    <h4>Sony 900F</h4>
                                                                </a>
                                                            </div>

                                                            <div class="post-desc">
                                                                <ul class="criteria clearfix">
                                                                    <li>
                                                                        <div class="title">
                                                                            Display
                                                                        </div>
                                                                        <div class="grade">
                                                                            90%
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="title">
                                                                            Speakers
                                                                        </div>
                                                                        <div class="grade">
                                                                            50%
                                                                        </div>
                                                                    </li>

                                                                    <li>
                                                                        <div class="title">
                                                                            Battery
                                                                        </div>
                                                                        <div class="grade">
                                                                            80%
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </article>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </section>

                <!-- Vertical Categories -->
                <div class="row-fluid">
                    <div class="span6">
                        <section class="cat-widget v-cat-1">
                            <div class="cat-widget-title">
                                <a href="#">
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
                                                    <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/8.jpg&amp;w=294&amp;h=180" />

                                                    <div class="img-meta">
                                                        <div class="post-date">
                                                            <div class="date">
                                                                <span class="month">Jan</span>
                                                                <span class="day">15</span>
                                                                <span class="month">2013</span>
                                                                <hr>
                                                                <span class="time">01:15 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="more"></a>
                                                </div>

                                                <a href="#" class="clearfix" title="Full Post Title">
                                                    <h4><?php echo $v2_titulo['1'] ?></h4>
                                                </a>
                                            </div>

                                            <div class="post-meta clearfix">
                                                <ul class="clearfix">
                                                    <li><a href="#" title="Post Author"><i class="bo-icon-pencil"></i>Serpentsoft</a></li>

                                                    <li><a href="#" title="Comments"><i class="bo-icon-comment"></i>15</a></li>
                                                    <li><span title="Views"><i class="bo-icon-eye-open"></i>250</span></li>
                                                </ul>
                                            </div>

                                            <div class="post-desc">
                                                <p>Proin gravida nibh vel velit. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
                                            </div>

                                        </article>
                                    </div>

                                    <div class="cat-vert-divider"></div>

                                    <div class="span12 related-posts">

                                        <div class="row-fluid modern-items-list">

                                            <div id="v_cat_slider1" class="flexslider">
                                                <ul class="slides">
                                                    <li>
                                                        <ul class="items left clearfix">
                                                            <li>
                                                                <article class="fold-item span12">
                                                                    <div class="clearfix">
                                                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/12.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                        <div class="description visible-part">
                                                                            <h5 class="title">Post With Featured Image</h5>

                                                                            <div class="info">
                                                                                <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                                <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                                <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                            </div>

                                                                            <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                        </div>

                                                                        <a href="post-formats/post-image.html" class="more" title=""></a>
                                                                    </div>
                                                                </article>
                                                            </li>

                                                            <li>
                                                                <article class="fold-item span12">
                                                                    <div class="clearfix">
                                                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/13.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                        <div class="description visible-part">
                                                                            <h5 class="title">Post With Sound Cloud</h5>

                                                                            <div class="info">
                                                                                <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                                <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                                <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                            </div>

                                                                            <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                        </div>

                                                                        <a href="post-formats/post-soundcloud.html" class="more" title=""></a>
                                                                    </div>

                                                                </article>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul class="items left clearfix">
                                                            <li>
                                                                <article class="fold-item span12">
                                                                    <div class="clearfix">
                                                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/9.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                        <div class="description visible-part">
                                                                            <h5 class="title">Post With Video</h5>

                                                                            <div class="info">
                                                                                <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                                <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                                <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                            </div>

                                                                            <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                        </div>

                                                                        <a href="post-formats/post-video.html" class="more" title=""></a>
                                                                    </div>
                                                                </article>
                                                            </li>

                                                            <li>
                                                                <article class="fold-item span12">
                                                                    <div class="clearfix">
                                                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/5.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                        <div class="description visible-part">
                                                                            <h5 class="title">Post With Google Map</h5>

                                                                            <div class="info">
                                                                                <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                                <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                                <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                            </div>

                                                                            <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                        </div>

                                                                        <a href="post-formats/post-googlemap.html" class="more" title=""></a>
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
                                        <article class="post-info">
                                            <div>
                                                <div class="span12 img-container">
                                                    <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/6.jpg&amp;w=294&amp;h=180" />

                                                    <div class="img-meta">
                                                        <div class="post-date">
                                                            <div class="date">
                                                                <span class="month">Jan</span>
                                                                <span class="day">15</span>
                                                                <span class="month">2013</span>
                                                                <hr>
                                                                <span class="time">01:15 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="#" class="more"></a>
                                                </div>

                                                <a href="#" class="clearfix" title="Full Post Title">
                                                    <h4>UK's coldest spring since 1963 claims 5,000 lives</h4>
                                                </a>
                                            </div>

                                            <div class="post-meta clearfix">
                                                <ul class="clearfix">
                                                    <li><a href="#" title="Post Author"><i class="bo-icon-pencil"></i>Serpentsoft</a></li>

                                                    <li><a href="#" title="Comments"><i class="bo-icon-comment"></i>15</a></li>
                                                    <li><span title="Views"><i class="bo-icon-eye-open"></i>250</span></li>
                                                </ul>
                                            </div>

                                            <div class="post-desc">
                                                <p>Proin gravida nibh vel velit. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
                                            </div>


                                        </article>
                                    </div>

                                    <div class="cat-vert-divider"></div>

                                    <div class="span12 related-posts">
                                        <div class="row-fluid modern-items-list">

                                            <div id="v_cat_slider2" class="flexslider">
                                                <ul class="slides">
                                                    <li>
                                                        <ul class="items left clearfix">
                                                            <li>
                                                                <article class="fold-item span12">
                                                                    <div class="clearfix">
                                                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/3.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                        <div class="description visible-part">
                                                                            <h5 class="title">Post With Featured Image</h5>

                                                                            <div class="info">
                                                                                <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                                <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                                <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                            </div>

                                                                            <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                        </div>

                                                                        <a href="post-formats/post-image.html" class="more" title=""></a>
                                                                    </div>
                                                                </article>
                                                            </li>

                                                            <li>
                                                                <article class="fold-item span12">
                                                                    <div class="clearfix">
                                                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/11.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                        <div class="description visible-part">
                                                                            <h5 class="title">Post With Sound Cloud</h5>

                                                                            <div class="info">
                                                                                <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                                <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                                <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                            </div>

                                                                            <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                        </div>

                                                                        <a href="post-formats/post-soundcloud.html" class="more" title=""></a>
                                                                    </div>

                                                                </article>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul class="items left clearfix">
                                                            <li>
                                                                <article class="fold-item span12">
                                                                    <div class="clearfix">
                                                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/1.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                        <div class="description visible-part">
                                                                            <h5 class="title">Post With Featured Image</h5>

                                                                            <div class="info">
                                                                                <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                                <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                                <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                            </div>

                                                                            <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                        </div>

                                                                        <a href="post-formats/post-image.html" class="more" title=""></a>
                                                                    </div>
                                                                </article>
                                                            </li>

                                                            <li>
                                                                <article class="fold-item span12">
                                                                    <div class="clearfix">
                                                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/2.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                        <div class="description visible-part">
                                                                            <h5 class="title">Post With Sound Cloud</h5>

                                                                            <div class="info">
                                                                                <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                                <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                                <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                            </div>

                                                                            <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                        </div>

                                                                        <a href="post-formats/post-soundcloud.html" class="more" title=""></a>
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
                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Image" title="">
                                <a href="post-formats/post-image.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/3.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>

                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Video" title="">
                                <a href="post-formats/post-video.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/4.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>

                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Sound Cloud" title="">
                                <a href="post-formats/post-soundcloud.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/5.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>

                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Image and Lightbox" title="">
                                <a href="post-formats/post-image-lightbox.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/6.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>

                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Review" title="">
                                <a href="post-formats/post-review.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/7.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>

                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Google Map" title="">
                                <a href="post-formats/post-googlemap.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/8.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>


                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Image and Lightbox" title="">
                                <a href="post-formats/post-image-lightbox.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/9.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>

                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Review" title="">
                                <a href="post-formats/post-review.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/10.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>

                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Google Map" title="">
                                <a href="post-formats/post-googlemap.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/11.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>

                 <!--Recent News 
                <aside class="widget w-posts">
                    <div class="widget-title">
                        <h4>Recent News</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="posts-in-widget">
                            <div class="row-fluid modern-items-list">

                                <div id="widget_270_slider1" class="flexslider">
                                    <ul class="slides">
                                        <li>
                                            <ul class="items left clearfix">
                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/9.jpg&amp;w=271&amp;h=200" class="post-img" />

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Featured Image</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-formats/post-image.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/10.jpg&amp;w=271&amp;h=200" class="post-img" />

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Sound Cloud</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-formats/post-soundcloud.html" class="more" title=""></a>
                                                        </div>

                                                    </article>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="items left clearfix">
                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/11.jpg&amp;w=271&amp;h=200" class="post-img" />

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Featured Image</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-formats/post-image.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/12.jpg&amp;w=271&amp;h=200" class="post-img" />

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Sound Cloud</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-formats/post-soundcloud.html" class="more" title=""></a>
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
                </aside>-->

                <!-- Feedburner -->
                <aside class="widget w-rss-feed">
                    <div class="widget-title">
                        <h4>Suscribete v&iacute;a RSS Feed</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="feedburner-subscribe">
                            <form>
                                <div class="input-append input-block-level">
                                    <input type="email" class="span12 search-query" placeholder="Ingresa tu email" required="required">
                                    <button type="submit" class="btn-theme">Suscribir</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </aside>

                <!-- Weather -->
                <aside class="widget w-weather">
                    <div class="widget-title">
                        <h4>El clima</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="widget-weather">
                            <div class="span4 state">
                                <span class="thundershowers-but-weather"></span>

                                <span class="degree">26&deg;</span>
                            </div>

                            <div class="span8 info">
                                <span class="country">Cairo</span>

                                <span class="state-title">State: Thundershowers</span>
                                <span class="humidity">Humidity: 120</span>
                                <span class="wind">Wind: 50 km/h</span>

                                <span class="max-min">32&deg; / 16&deg;</span>
                            </div>

                        </div>
                    </div>
                </aside>

                 <!--Poll Cloud 
                <aside class="widget w-poll">
                    <div class="widget-title">
                        <h4>Poll</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <form method="get">
                            <div class="poll-ques">
                                <div class="title">
                                    <h5>How will history remember George W. Bush?</h5>
                                </div>

                                <div class="answers">
                                    <label class="radio">
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" />
                                        Failure
                                    </label>

                                    <label class="radio">
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
                                        Success
                                    </label>

                                </div>

                                <button type="submit" class="btn-theme vote">Vote!</button>

                                <div class="result hidden">
                                    <span>Failure (75%)</span>

                                    <span>Success (25%)</span>

                                    <span class="total">Total Voters: 2,522</span>

                                </div>
                            </div>
                        </form>
                    </div>
                </aside>-->


                <!-- Sponsors (4x125 Adv.) -->
                <aside class="widget w-sponsors">
                    <div class="widget-title">
                        <h4>Sponsors</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <ul class="widget-sponsor clearfix">
                            <li><a href="http://themeforest.net/item/adams-magazine-responsive-magazineblog-theme/4919511" target="_blank">
                                <img src="../images/ad-125-1.jpg" /></a></li>
                            <li><a href="http://themeforest.net/item/adams-magazine-responsive-magazineblog-theme/4919511" target="_blank">
                                <img src="../images/ad-125-2.jpg" /></a></li>
                            <li><a href="http://themeforest.net/item/adams-magazine-responsive-magazineblog-theme/4919511" target="_blank">
                                <img src="../images/ad-125-3.jpg" /></a></li>
                            <li><a href="http://themeforest.net/item/adams-magazine-responsive-magazineblog-theme/4919511" target="_blank">
                                <img src="../images/ad-125-4.jpg" /></a></li>
                        </ul>
                    </div>
                </aside>

                <!-- Tags Cloud -->
                <aside class="widget w-tags">
                    <div class="widget-title">
                        <h4>Tags Cloud</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="tags-cloud">
                            <a href="#" class="btn-theme">UK News</a>
                            <a href="#" class="btn-theme">Technology</a>
                            <a href="#" class="btn-theme">Computer</a>
                            <a href="#" class="btn-theme">Headphone</a>
                            <a href="#" class="btn-theme">President</a>
                            <a href="#" class="btn-theme">Vice President</a>
                            <a href="#" class="btn-theme">Microsoft</a>
                            <a href="#" class="btn-theme">Apple</a>
                        </div>
                    </div>
                </aside>


                <!-- 160 (160x600 Adv.) -->
                <aside class="widget w-adv">
                    <div class="widget-title">
                        <h4>Imagen Random</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <img src="#" data-src="holder.js/250x250" />
                    </div>
                </aside>

                <!-- Facebook Like Box -->
                <!--<aside class="widget w-facebook">
                    <div class="widget-title">
                        <h4>Like Us</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width=270&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=true&amp;header=false&amp;appId=494953077210684" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:270px; height:258px;" allowTransparency="true"></iframe>
                    </div>
                </aside>-->

            </section>


            <!-- Left sidebar -->
            <section class="span300">
                <h2 class="hidden">Left Sidebar</h2>

                <!-- Posts Of The Day -->
                <aside class="widget w-posts">
                    <div class="widget-title">
                        <h4>M&aacute;s Vistas</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="posts-in-widget">
                            <div class="row-fluid modern-items-list">

                                <div id="widget_300_slider3" class="flexslider">

                                    <ul class="slides">
                                        <li>
                                            <ul class="items left clearfix">
                                                <li>
                                                    <article class="fold-item">
                                                        <div class="clearfix">
                                                            <img class="post-img" src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/8.jpg&amp;w=301&amp;h=200" />

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Featured Image</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-formats/post-image.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li>
                                            </ul>
                                        </li>


                                        <li>
                                            <ul class="items left clearfix">
                                                <li>
                                                    <article class="fold-item">
                                                        <div class="clearfix">
                                                            <img class="post-img" src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/12.jpg&amp;w=301&amp;h=200" />

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Self Hosted Audio</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-formats/post-self-audio.html" class="more" title=""></a>
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
                </aside>


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
                                            <span>29,000,000</span>
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
                                            <span>29,000,000</span>
                                            <span class="fans">Followers</span>

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
                                            <span>29,000,000</span>
                                            <span class="fans">Subscribers</span>
                                        </div>
                                    </div>
                                </li>

                                <!--<li class="vm-wrp">
                                    <div class="btn-count">
                                        <div class="social-counter-metro mask">
                                            <span>Subscribe</span>
                                            <a href="#" class="more"></a>
                                        </div>

                                        <div class="vimeo">
                                            <i class="vimeo-sicon-48-white"></i>
                                            <span>29,000,000</span>
                                            <span class="fans">Subscribers</span>
                                        </div>
                                    </div>
                                </li>-->

                                <!--<li class="rs-wrp">
                                    <div class="btn-count">
                                        <div class="social-counter-metro mask">
                                            <span>Subscribe</span>
                                            <a href="#" class="more"></a>
                                        </div>

                                        <div class="rss">
                                            <i class="rss-sicon-48-white"></i>
                                            <span>Subscribe</span>
                                            <span class="fans">To RSS Feed</span>
                                        </div>
                                    </div>
                                </li>-->



                                <li class="gp-wrp">
                                    <div class="btn-count">
                                        <div class="social-counter-metro mask">
                                            <span>Follow</span>
                                            <a href="#" class="more"></a>
                                        </div>

                                        <div class="googleplus">
                                            <i class="googleplus-sicon-48-white"></i>
                                            <span>29,000,000</span>
                                            <span class="fans">Followers</span>
                                        </div>
                                    </div>
                                </li>

                                <!--<li class="drb-wrp">
                                    <div class="btn-count">
                                        <div class="social-counter-metro mask">
                                            <span>Follow</span>
                                            <a href="#" class="more"></a>
                                        </div>

                                        <div class="dribbble">
                                            <i class="dribbble-sicon-48-white"></i>
                                            <span>29,000,000</span>
                                            <span class="fans">Followers</span>
                                        </div>
                                    </div>
                                </li>-->


                            </ul>
                        </div>
                    </div>
                </aside>

                <!-- 300x250 Adv -->
                <!--<aside class="widget w-adv">
                    <div class="widget-title">
                        <h4>300x250 Advertisement</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <a href="http://themeforest.net/item/adams-magazine-responsive-magazineblog-theme/4919511" target="_blank">
                            <img src="../images/ad-300x250.jpg" />
                        </a>
                    </div>

                </aside>-->

                <!-- News Widget -->
                <aside class="widget w-posts">
                    <div class="widget-title">
                        <h4>Popular News</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="posts-in-widget">
                            <div class="row-fluid modern-items-list">

                                <div id="widget_300_slider1" class="flexslider">

                                    <ul class="slides">
                                        <li>
                                            <ul class="items left clearfix">
                                                <li>
                                                    <article class="fold-item">
                                                        <div class="clearfix">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/6.jpg&amp;w=301&amp;h=200" class="post-img" />

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Featured Image</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-formats/post-image.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li>
                                                    <article class="fold-item">
                                                        <div class="clearfix">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/5.jpg&amp;w=301&amp;h=200" class="post-img" />

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Sound Cloud</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-formats/post-soundcloud.html" class="more" title=""></a>
                                                        </div>

                                                    </article>
                                                </li>
                                            </ul>
                                        </li>


                                        <li>
                                            <ul class="items left clearfix">
                                                <li>
                                                    <article class="fold-item">
                                                        <div class="clearfix">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/2.jpg&amp;w=301&amp;h=200" class="post-img" />

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Featured Image and Lightbox</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-formats/post-image-lightbox.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li>
                                                    <article class="fold-item">
                                                        <div class="clearfix">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/1.jpg&amp;w=301&amp;h=200" class="post-img" />

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>
                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Self Hosted Audio</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-formats/post-self-audio.html" class="more" title=""></a>
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
                </aside>


                <!-- Tabs -->
                <section class="widget w-tabs">
                    <h3 class="hidden">Tabs Widget</h3>

                    <div class="widget-content clearfix">
                        <ul class="tabs-header clearfix">
                            <li class="btn-theme active"><a data-target="#popular" data-toggle="tab">Popular</a></li>
                            <li class="btn-theme"><a data-target="#recent" data-toggle="tab">Recent</a></li>
                            <li class="btn-theme"><a data-target="#comments" data-toggle="tab">Comments</a></li>
                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane active" id="popular">
                                <aside class="row-fluid">
                                    <h4 class="hidden">Popular News Tab</h4>

                                    <div class="posts-in-widget">
                                        <div class="tabs-special-style">
                                            <ul class="media-list">
                                                <li class="media">
                                                    <article>
                                                        <a href="post-formats/post-image.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/2.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-formats/post-image.html" title="Post With Featured Image">

                                                                <h5 class="media-heading">Post With Featured Image</h5>
                                                            </a>

                                                            <div class="media">
                                                                <span title="Published Time"><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li class="media">
                                                    <article>
                                                        <a href="post-formats/post-video.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/10.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-formats/post-video.html" title="Post With Video">
                                                                <h5 class="media-heading">Post With Video</h5>
                                                            </a>

                                                            <div class="media">
                                                                <span title="Published Time"><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li class="media">
                                                    <article>
                                                        <a href="post-formats/post-review.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/12.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-formats/post-review.html" title="Post With Review">
                                                                <h5 class="media-heading">Post With Review</h5>
                                                            </a>

                                                            <div class="media">

                                                                <div class="rating">
                                                                    <span class="stars-12" title="70% Very Good">
                                                                        <span class="fill" style="width: 70%"></span>
                                                                    </span>
                                                                </div>

                                                                <span title="Published Time"><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li class="media">
                                                    <article>
                                                        <a href="post-formats/post-self-video.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/13.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-formats/post-self-video.html" title="Post With Self Hosted Video">
                                                                <h5 class="media-heading">Post With Self Hosted Video</h5>
                                                            </a>

                                                            <div class="media">
                                                                <span title="Published Time"><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>

                            <div class="tab-pane" id="recent">
                                <aside class="row-fluid">
                                    <h4 class="hidden">Recent News Tab</h4>

                                    <div class="posts-in-widget">
                                        <div class="tabs-special-style">
                                            <ul class="media-list">
                                                <li class="media">
                                                    <article>
                                                        <a href="post-formats/post-image-lightbox.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/11.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-formats/post-image-lightbox.html" title="Post With Image + Lightbox">
                                                                <h5 class="media-heading">Post With Image + Lightbox</h5>
                                                            </a>

                                                            <div class="media">
                                                                <span title="Published Time"><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li class="media">
                                                    <article>
                                                        <a href="post-formats/post-self-audio.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/10.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-formats/post-self-audio.html" title="Post With Self Hosted Audio">
                                                                <h5 class="media-heading">Post With Self Hosted Audio</h5>
                                                            </a>

                                                            <div class="media">
                                                                <span title="Published Time"><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li class="media">
                                                    <article>
                                                        <a href="post-formats/post-soundcloud.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/1.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-formats/post-soundcloud.html" title="Post With Sound-Cloud">
                                                                <h5 class="media-heading">Post With Sound-Cloud</h5>
                                                            </a>

                                                            <div class="media">
                                                                <span title="Published Time"><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li class="media">
                                                    <article>
                                                        <a href="post-formats/post-googlemap.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/2.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-formats/post-googlemap.html" title="Post With Google Map">
                                                                <h5 class="media-heading">Post With Google Map</h5>
                                                            </a>

                                                            <div class="media">
                                                                <span title="Published Time"><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>

                            <div class="tab-pane" id="comments">
                                <aside class="row-fluid">
                                    <h4 class="hidden">Comments</h4>

                                    <div class="posts-in-widget">
                                        <div class="tabs-special-style comments">
                                            <ul class="media-list">
                                                <li class="media">
                                                    <article>
                                                        <div class="span3 media-object">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/a1.jpg&amp;w=65&amp;h=65" />
                                                        </div>

                                                        <div class="media-body span9">
                                                            <h5 class="media-heading">Adam</h5>

                                                            <div class="media">
                                                                <span><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>

                                                                <p class="summary">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>

                                                                <div class="leave-comment">
                                                                    <a href="#">Leave Comment</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li class="media">
                                                    <article>
                                                        <div class="span3 media-object">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/a2.jpg&amp;w=65&amp;h=65" />
                                                        </div>

                                                        <div class="media-body span9">
                                                            <h5 class="media-heading">Adam</h5>

                                                            <div class="media">
                                                                <span><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>

                                                                <p class="summary">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>

                                                                <div class="leave-comment">
                                                                    <a href="#">Leave Comment</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li class="media">
                                                    <article>
                                                        <div class="span3 media-object">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/a3.jpg&amp;w=65&amp;h=65" />
                                                        </div>

                                                        <div class="media-body span9">
                                                            <h5 class="media-heading">Adam</h5>

                                                            <div class="media">
                                                                <span><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>

                                                                <p class="summary">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>

                                                                <div class="leave-comment">
                                                                    <a href="#">Leave Comment</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li class="media">
                                                    <article>
                                                        <div class="span3 media-object">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/a4.jpg&amp;w=65&amp;h=65" />
                                                        </div>

                                                        <div class="media-body span9">
                                                            <h5 class="media-heading">Adam</h5>

                                                            <div class="media">
                                                                <span><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>

                                                                <p class="summary">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor</p>

                                                                <div class="leave-comment">
                                                                    <a href="#">Leave Comment</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Random Posts (Classic) -->
                <aside class="widget w-posts">
                    <div class="widget-title">
                        <h4>Random Posts (Classic View)</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="posts-in-widget">
                            <ul class="media-list">
                                <li class="media">
                                    <article>
                                        <a href="post-formats/post-image-lightbox.html" class="span3" title="">
                                            <div class="media-object thumb-effect">
                                                <div class="mask"></div>
                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/1.jpg&amp;w=65&amp;h=65" />
                                            </div>
                                        </a>

                                        <div class="media-body span9">
                                            <a href="post-formats/post-image-lightbox.html" title="Post With Image + Lightbox">
                                                <h5 class="media-heading">Post With Image + Lightbox</h5>
                                            </a>

                                            <div class="media">
                                                <span title="Published Time"><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>
                                            </div>
                                        </div>
                                    </article>
                                </li>

                                <li class="media">
                                    <article>
                                        <a href="post-formats/post-self-audio.html" class="span3" title="">
                                            <div class="media-object thumb-effect">
                                                <div class="mask"></div>
                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/2.jpg&amp;w=65&amp;h=65" />
                                            </div>
                                        </a>

                                        <div class="media-body span9">
                                            <a href="post-formats/post-self-audio.html" title="Post With Self Hosted Audio">
                                                <h5 class="media-heading">Post With Self Hosted Audio</h5>
                                            </a>

                                            <div class="media">
                                                <span title="Published Time"><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>
                                            </div>
                                        </div>
                                    </article>
                                </li>

                                <li class="media">
                                    <article>
                                        <a href="post-formats/post-soundcloud.html" class="span3" title="">
                                            <div class="media-object thumb-effect">
                                                <div class="mask"></div>
                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/3.jpg&amp;w=65&amp;h=65" />
                                            </div>
                                        </a>

                                        <div class="media-body span9">
                                            <a href="post-formats/post-soundcloud.html" title="Post With Sound-Cloud">
                                                <h5 class="media-heading">Post With Sound-Cloud</h5>
                                            </a>

                                            <div class="media">
                                                <span title="Published Time"><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>
                                            </div>
                                        </div>
                                    </article>
                                </li>

                                <li class="media">
                                    <article>
                                        <a href="post-formats/post-googlemap.html" class="span3" title="">
                                            <div class="media-object thumb-effect">
                                                <div class="mask"></div>
                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/5.jpg&amp;w=65&amp;h=65" />
                                            </div>
                                        </a>

                                        <div class="media-body span9">
                                            <a href="post-formats/post-googlemap.html" title="Post With Google Map">
                                                <h5 class="media-heading">Post With Google Map</h5>
                                            </a>

                                            <div class="media">
                                                <span title="Published Time"><i class="bo-icon-time"></i>26 Feb 2013, 05:15 AM</span>
                                            </div>
                                        </div>
                                    </article>
                                </li>
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
                        <iframe itemprop="contentURL" class="youtube-player" type="text/html"
                            width="100%" height="200" src="http://www.youtube.com/embed/P5_Msrdg3Hk?wmode=transparent&amp;wmode=opaque"
                            allowfullscreen frameborder="0"></iframe>
                    </div>

                </aside>


                <!-- Sound Cloud Widget -->
                <!--<aside class="widget w-audio">
                    <div class="widget-title">
                        <h4>SoundCloud Track</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <iframe itemprop="contentURL" width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F72646464"></iframe>
                    </div>

                </aside>-->

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

    <!-- Twitter Ticker -->
    <section class="twitter-ticker-widget w-tweet">
        <div class="container-fluid">
            <div class="row-fluid widget-inner">
                <div class="span2 title visible-desktop">
                    <h4>Latest Tweets</h4>
                </div>

                <div id="divLatestTweets" class="span8">
                </div>

                <div class="span2 follow">
                    <a href="https://twitter.com/envato" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @envato</a>
                    <script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = "../../../platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); } }(document, "script", "twitter-wjs");</script>
                </div>
            </div>
        </div>
    </section>

    <section class="modern-footer">
        <h2 class="hidden">Sub-Footer Section</h2>

        <div class="container-fluid">
            <div class="row-fluid">

                <!--<aside class="span3">
                    <div class="f-widget w-tags">
                        <div class="f-widget-title">
                            <h4>Tags Cloud</h4>
                        </div>

                        <div class="f-widget-content">
                            <div class="tags-cloud">
                                <a href="#" class="btn-theme">UK News</a>
                                <a href="#" class="btn-theme">Technology</a>
                                <a href="#" class="btn-theme">Computer</a>
                                <a href="#" class="btn-theme">Headphone</a>
                                <a href="#" class="btn-theme">President</a>
                                <a href="#" class="btn-theme">Vice President</a>
                                <a href="#" class="btn-theme">Microsoft</a>
                                <a href="#" class="btn-theme">Apple</a>
                            </div>
                        </div>

                    </div>
                </aside>-->

                <!--<aside class="span3">
                    <div class="f-widget w-pictures">
                        <div class="f-widget-title">
                            <h4>Random Posts</h4>
                        </div>

                        <div class="f-widget-content clearfix thumbnails">
                            <ul class="posts-in-images clearfix">
                                <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Image" title="">
                                    <a href="post-formats/post-image.html">
                                        <div class="thumb-effect">
                                            <div class="mask"></div>
                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/3.jpg&amp;w=80&amp;h=75" />
                                        </div>
                                    </a>
                                </li>

                                <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Video" title="">
                                    <a href="post-formats/post-video.html">
                                        <div class="thumb-effect">
                                            <div class="mask"></div>
                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/4.jpg&amp;w=80&amp;h=75" />
                                        </div>
                                    </a>
                                </li>

                                <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Sound Cloud" title="">
                                    <a href="post-formats/post-soundcloud.html">
                                        <div class="thumb-effect">
                                            <div class="mask"></div>
                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/5.jpg&amp;w=80&amp;h=75" />
                                        </div>
                                    </a>
                                </li>

                                <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Image and Lightbox" title="">
                                    <a href="post-formats/post-image-lightbox.html">
                                        <div class="thumb-effect">
                                            <div class="mask"></div>
                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/6.jpg&amp;w=80&amp;h=75" />
                                        </div>
                                    </a>
                                </li>

                                <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Review" title="">
                                    <a href="post-formats/post-review.html">
                                        <div class="thumb-effect">
                                            <div class="mask"></div>
                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/7.jpg&amp;w=80&amp;h=75" />
                                        </div>
                                    </a>
                                </li>

                                <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Google Map" title="">
                                    <a href="post-formats/post-googlemap.html">
                                        <div class="thumb-effect">
                                            <div class="mask"></div>
                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/8.jpg&amp;w=80&amp;h=75" />
                                        </div>
                                    </a>
                                </li>


                                <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Image and Lightbox" title="">
                                    <a href="post-formats/post-image-lightbox.html">
                                        <div class="thumb-effect">
                                            <div class="mask"></div>
                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/9.jpg&amp;w=80&amp;h=75" />
                                        </div>
                                    </a>
                                </li>

                                <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Review" title="">
                                    <a href="post-formats/post-review.html">
                                        <div class="thumb-effect">
                                            <div class="mask"></div>
                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/10.jpg&amp;w=80&amp;h=75" />
                                        </div>
                                    </a>
                                </li>

                                <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Google Map" title="">
                                    <a href="post-formats/post-googlemap.html">
                                        <div class="thumb-effect">
                                            <div class="mask"></div>
                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/11.jpg&amp;w=80&amp;h=75" />
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </aside>-->

                <!--<aside class="span3">
                    <div class="f-widget w-posts">
                        <div class="f-widget-title">
                            <h4>Posts Of The Day</h4>
                        </div>

                        <div class="f-widget-content">
                            <div class="posts-in-widget">
                                <div class="row-fluid modern-items-list">

                                    <div id="widget_span3_slider2" class="flexslider">

                                        <ul class="slides">
                                            <li>
                                                <ul class="items left clearfix">
                                                    <li>
                                                        <article class="fold-item">
                                                            <div class="clearfix">
                                                                <img class="post-img" src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/10.jpg&amp;w=286&amp;h=200" />

                                                                <div class="post-sitemap">
                                                                    <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>
                                                                </div>

                                                                <div class="description visible-part">
                                                                    <h5 class="title">Post With Featured Image</h5>

                                                                    <div class="info">
                                                                        <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                        <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                        <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                    </div>

                                                                    <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                </div>

                                                                <a href="post-formats/post-image.html" class="more" title=""></a>
                                                            </div>
                                                        </article>
                                                    </li>
                                                </ul>
                                            </li>


                                            <li>
                                                <ul class="items left clearfix">
                                                    <li>
                                                        <article class="fold-item">
                                                            <div class="clearfix">
                                                                <img class="post-img" src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/13.jpg&amp;w=286&amp;h=200" />

                                                                <div class="post-sitemap">
                                                                    <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>
                                                                </div>

                                                                <div class="description visible-part">
                                                                    <h5 class="title">Post With Self Hosted Audio</h5>

                                                                    <div class="info">
                                                                        <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                        <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                        <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>
                                                                    </div>

                                                                    <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                </div>

                                                                <a href="post-formats/post-self-audio.html" class="more" title=""></a>
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
                </aside>-->

                <!--<aside class="span3">
                    <div class="f-widget w-about">
                        <div class="f-widget-title">
                            <h4>About Magazine</h4>
                        </div>

                        <div class="f-widget-content">
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                        </div>

                    </div>
                </aside>-->

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
                            <li><a href="magazine/archives.html">Archives</a></li>
                           
                            <li><a href="magazine/copyright.html">Copyright</a></li>
                            <li><a href="magazine/privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </nav>

                    <div class="span6">
                        <p class="pull-right">&copy; Copyright 2015 NoteInsideNetwork, All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>

    </section>

    <!--<div id="divStyleSwitcher" class="div-switcher-back-color">
        <a id="btnToggleStyleSwitcher">
            <i class="icon-wrench"></i>
            <img src="../images/settings.png" />
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
        </div>-->

        <!--<div id="divBackgroundColor" class="row-fluid">
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
                    <a class="select-pattern" style="background-image: url('../images/bg/28/1.png')"></a>
                </div>
                <div id="divP-2" class="span1 color-picker">
                    <a class="select-pattern" style="background-image: url('../images/bg/28/2.png')"></a>
                </div>
                <div id="divP-3" class="span1 color-picker">
                    <a class="select-pattern" style="background-image: url('../images/bg/28/3.png')"></a>
                </div>
                <div id="divP-4" class="span1 color-picker">
                    <a class="select-pattern" style="background-image: url('../images/bg/28/4.png')"></a>
                </div>

                <div id="divP-5" class="span1 color-picker">
                    <a class="select-pattern" style="background-image: url('../images/bg/28/5.png')"></a>
                </div>
                <div id="divP-6" class="span1 color-picker">
                    <a class="select-pattern" style="background-image: url('../images/bg/28/6.png')"></a>
                </div>
                <div id="divP-7" class="span1 color-picker">
                    <a class="select-pattern" style="background-image: url('../images/bg/28/7.png')"></a>
                </div>
                <div id="divP-8" class="span1 color-picker">
                    <a class="select-pattern" style="background-image: url('../images/bg/28/8.png')"></a>
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
                                <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#acc_Cat_Colors" href="#collapse_HCat">Horizontal Category Colors<i class="icon-angle-down pull-right"></i>
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
                                <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#acc_Cat_Colors" href="#collapse_RevCat">Review Category Colors<i class="icon-angle-down pull-right"></i>
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
                                <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#acc_Cat_Colors" href="#collapse_VerCat_1">Vertical Category Colors<i class="icon-angle-down pull-right"></i>
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
                                <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#acc_Cat_Colors" href="#collapse_HD_Cat">Horizontal Divided Category Colors<i class="icon-angle-down pull-right"></i>
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
    <noscript><a href="http://www.histats.com/" target="_blank"><img src="http://sstatic1.histats.com/03d56.gif?2280553&amp;101" alt="page hit counter" border="0" /></a></noscript>
    <!-- Histats.com  END  -->

</body>
</html>
