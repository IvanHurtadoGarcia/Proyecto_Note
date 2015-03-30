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
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM noticias  ORDER BY my_date desc ");
        while($datos=mysql_fetch_array($sqlx)){
        $x++;
        $v_foto[$x]=$datos['id'];
        $v_titulo[$x]=$datos['titulo'];
        $v_intro[$x]=$datos['intro'];
        $v_texto[$x]=$datos['texto'];
        $v_fecha[$x]=$datos['fecha'];
    }
    ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>NoteInsideNetwork | Tecnol&oacute;gias</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Styles Should be After Script -->
    <link rel="stylesheet" href="../style.css" />

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
                        <a href="../index.html"><img itemprop="logo" src="../../images/LogoNiN.png" alt="Logo" /></a></div>

                  <div class="adv-970 pull-right visible-desktop"></div>
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
                                    <li><a href="noticias/technews.php" title="">Noticias Tecnol&oacute;gicas</a></li>
                                    <li><a href="noticias/left-sb.html" title="">Video Juegos </a></li>
                                    <li><a href="noticias/middle-content.html" title="">Reviews</a></li>
                                </ul>

                            </li>

                            <li class="divider-vertical"></li>
                           
                            <li class="dropdown" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="A1" role="button"
                                   data-hover="dropdown" data-delay="200"
                                   data-target="#" href="#">Sociedad y Cultura<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="noticias/blog.html">Eventos</a></li>
                                    <li><a href="noticias/blog.html">Recomendaciones Musicales</a></li>
                                    <li><a href="noticias/blog.html">Fotografía</a></li>
                                    <li><a href="noticias/blog.html">Video</a></li>
                                    <li><a href="noticias/blog.html">Salud</a></li>
                                   

                                </ul>
                            </li>
                            <li class="dropdown" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="a4" role="button"
                                   data-hover="dropdown" data-delay="200"
                                   data-target="#" href="#" title="">Polit&iacute;ca<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="noticias/blog.html">Internacional</a></li>
                                    <li><a href="noticias/blog.html">Nacional</a></li>
                                    <li><a href="noticias/blog.html">Opinion</a></li>
                                    


                                </ul>

                            </li>

                            <li class="dropdown" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="a4" role="button"
                                   data-hover="dropdown" data-delay="200"
                                   data-target="#" href="#" title="">Inter&eacute;s General<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="noticias/lecturas.html">Lecturas</a></li>
                                    <li><a href="noticias/descargar.html">Descargas</a></li>
                                    <li><a href="noticias/random.html">Random</a></li>
                                    


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
                                    <li><a href="noticias/blog.html">¿Qué somos?</a></li>
                                    <li><a href="noticias/blog.html">Preguntas Frecuentes</a></li>
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
                            <h3>Breaking News</h3>
                        </div>
                        <div id="divBreakingNewsTicker" class="content">
                            <ul id="js-news" class="js-hidden">
                                <li><a href="post-image.html">Eventos</a></li>
                                <li><a href="post-video.html">Post With Video</a></li>
                                <li><a href="post-soundcloud.html">Post With Sound Cloud</a></li>
                                <li><a href="post-googlemap.html">Post With Google Map</a></li>
                                <li><a href="post-image-lightbox.html">Post With Image and Lightbox</a></li>
                                <li><a href="post-review.html">Post With Animated Review System</a></li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- main content -->
                <article class="article-container" itemscope itemtype="http://schema.org/Article">
                    <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope itemtype="http://schema.org/WebPage">
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        <li>
                                            <a href="#"><i class="bo-icon-home"></i>Eventos</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="#" class="active">Eventos</a></li>
                                    </ul>
                                </div>

                                <div class="figure-container">
                                    <figure class="featured-post-figure" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        
                                 <img src="../login/administration/admin/secciones/noticiast/<?php $id=$_GET["id"];
                                                                                            $sqlx=mysql_query("SELECT * FROM noticias  where id='+$id'"); 
                                                                                            while($datos=mysql_fetch_array($sqlx)){
                                                                                             echo $datos['foto'].'.jpg';
                                                                                            } ?>" height="345" width="604">
                                        
                                    </figure>
                                </div>

                                
                                                            
                                <h1 itemprop="headline"><?php 
                                $id=$_GET["id"];
                                $sqlx=mysql_query("SELECT * FROM noticias  where id='+$id'"); 
                                while($datos=mysql_fetch_array($sqlx)){
                                                         echo $datos['titulo'];
                                                        }
                                ?></h1>

                                <div class="post-info">
                                    <div class="post-meta">
                                        <ul>
                                            <li title="Post Author"><a href="#"><i class="bo-icon-pencil"></i>Esteban Castillo Perez</a></li>
                                            <li title="Publish Time" itemprop="datePublished"><i class="bo-icon-time"></i>26 Feb, 2013 at 03:15 PM</li>

                                            <li><a href="#" itemprop="interactionCount" title="No. of Comments"><i class="bo-icon-comment"></i>15</a></li>
                                            <li itemprop="interactionCount" title="No. of Views"><i class="bo-icon-eye-open"></i>35</li>
                                        </ul>
                                    </div>
                                </div>



                            </header>




                            <span class="clearfix"></span>

                            <div class="post-entry" itemprop="articleBody">

                                <span class="drop-capital">D</span>
                                escripcion del evento
                            
                            
                            <blockquote>
                                <p>
                                    Mi opinion respecto al evento antes mencionado
                                </p>
                            </blockquote>

                                <p>
                                    Informacion,fechas,localizacion del evento
                                </p>
                                <ul class="icons-ul">
                                    <li><i class="icon-li icon-ok"></i>More Than 400 List Types.</li>
                                    <li><i class="icon-li icon-ok"></i>Unlimited Colors.</li>
                                    <li><i class="icon-li icon-ok"></i>Easy To Use.</li>
                                    <li><i class="icon-li icon-ok"></i>100% Unique Widget Style.</li>
                                    <li><i class="icon-li icon-ok"></i>Weather & Poll Widgets.</li>
                                    <li><i class="icon-li icon-ok"></i>Author Posts.</li>
                                </ul>

                               
                            </div>

                            <div class="clearfix"></div>

                            <div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <!-- Add Social Share Buttons Here --> <!-- AddThis Button BEGIN --><div class="addthis_toolbox addthis_default_style "> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div><script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script><script type="text/javascript" src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5052d92e104432e3"></script><!-- AddThis Button END -->
                                </div>

                            </div>
                        </div>


                        <!-- Article Footer Start from author bio to comments box  -->
                        <footer>

                            <!-- Post Tags -->
                            <aside class="row-fluid">
                                <h3 class="hidden">Article Tags</h3>

                                <div class="article-tags clearfix">
                                    <!--<h3 class="span1">Tags:</h3>-->

                                    <ul class="tags-cloud span12">
                                        <li><a class="btn-theme" href="#">UK</a></li>
                                        <li><a class="btn-theme" href="#">President</a></li>
                                        <li><a class="btn-theme" href="#">3D Printers</a></li>
                                    </ul>
                                </div>
                            </aside>

                            <!-- Author Biography -->
                            <aside class="author-bio w-user">
                                <div class="cat-widget-title">
                                    <h3>About Serpentsoft</h3>
                                </div>

                                <div class="cat-widget-content">
                                    <div class="row-fluid">

                                        <div class="media" itemprop="author" itemscope itemtype="http://schema.org/Person">

                                            <!--<a class="thumbnail span2 pull-left" href="author.html" title="More About Author">
                                            <img itemprop="image" class="media-object" src="" data-src="holder.js/77x77" alt="Author" />
                                        </a>-->
                                            <a href="../page-templates/author-archive.html" class="media-object span2" title="More About Author">
                                                <div class="thumb-effect">

                                                    <div class="mask"></div>
                                                    <img itemprop="image" src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/a1.jpg&amp;w=88&amp;h=88" />
                                                </div>
                                            </a>

                                            <div class="media-body span10">

                                                <a itemprop="name" class="hidden" href="../page-templates/author-archive.html" title="More About Author">
                                                    <h4 class="media-heading hidden">Serpentsoft</h4>
                                                </a>

                                                <div class="media">
                                                    <div itemprop="description">
                                                        <p>
                                                            A few words about an article author, I am a Web Developer and Designer, i love computer programming either Desktop or Web
                                                        </p>
                                                    </div>

                                                    <ul class="author-personal-info social-networks clearfix">

                                                        <li><a href="#" class="fb-metro-24px-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                            data-original-title="facebook" title=""></a></li>

                                                        <li><a href="#" class="twitter-metro-24px-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                            data-original-title="twitter" title=""></a></li>

                                                        <li><a href="#" class="googleplus-metro-24px-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                            data-original-title="googleplus" title=""></a></li>

                                                        <li><a href="#" class="pinterest-metro-24px-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                            data-original-title="pinterest" title=""></a></li>

                                                        <li><a href="#" class="youtube-metro-24px-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                            data-original-title="youtube" title=""></a></li>

                                                        <li><a href="#" class="linkedin-metro-24px-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                            data-original-title="linkedin" title=""></a></li>

                                                        <li><a href="#" class="rss-metro-24px-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                            data-original-title="rss" title=""></a></li>

                                                        <li><a href="#" class="email-metro-24px-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                            data-original-title="email author" title=""></a></li>

                                                        <li><a href="#" class="website-metro-24px-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                            data-original-title="visit private website" title=""></a></li>

                                                    </ul>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </aside>

                            <!-- Related Posts -->
                            <aside class="cat-related-news w-related">
                                <div class="cat-widget">
                                    <div class="cat-widget-title">
                                        <h3>Related News</h3>
                                    </div>

                                    <div class="cat-widget-content">
                                        <div class="row-fluid modern-items-list">
                                            <div id="related_posts_slider" class="flexslider">
                                                <ul class="slides">
                                                    <li>
                                                        <ul class="items left clearfix">
                                                            <li class="row-fluid">
                                                                <div class="span6">
                                                                    <article class="fold-item span12">
                                                                        <div class="clearfix">
                                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/6.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                            <div class="description visible-part">
                                                                                <h5 class="title">Post With Featured Image</h5>

                                                                                <div class="info">
                                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>                                                                                </div>

                                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                            </div>

                                                                            <a href="post-image.html" class="more" title=""></a>
                                                                        </div>
                                                                    </article>
                                                                </div>

                                                                <div class="span6">
                                                                    <article class="fold-item span12">
                                                                        <div class="clearfix">
                                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/12.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                            <div class="description visible-part">
                                                                                <h5 class="title">Post With Google Map</h5>

                                                                                <div class="info">
                                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>                                                                                </div>

                                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                            </div>

                                                                            <a href="post-googlemap.html" class="more" title=""></a>
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
                                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/8.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                            <div class="description visible-part">
                                                                                <h5 class="title">Post With Featured Video</h5>

                                                                                <div class="info">
                                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>                                                                                </div>

                                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                            </div>

                                                                            <a href="post-video.html" class="more" title=""></a>
                                                                        </div>

                                                                    </article>
                                                                </div>

                                                                <div class="span6">
                                                                    <article class="fold-item span12">
                                                                        <div class="clearfix">
                                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/10.jpg&amp;w=294&amp;h=190" class="post-img" />

                                                                            <div class="description visible-part">
                                                                                <h5 class="title">Post With Sound Cloud</h5>

                                                                                <div class="info">
                                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>                                                                                </div>

                                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                                            </div>

                                                                            <a href="post-soundcloud.html" class="more" title=""></a>
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
                            </aside>

                            <!-- Posts Navigator -->
                            <nav class="row-fluid post-navigation">
                                <h3 class="hidden">Posts Navigation</h3>

                                <div class="row-fluid">
                                    <div class="span6 prev-post">
                                        <a href="post-soundcloud.html" class="btn-theme" title="Previous Post Title" rel="prev">
                                            <div class="text-content">
                                                <i class="icon-arrow-left"></i>
                                                <span>Post With Sound Cloud</span>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="span6 pull-right next-post">
                                        <a href="post-video.html" class="pull-right btn-theme" title="Next Post Title" rel="next">
                                            <div class="text-content">
                                                <span>Post With Video</span>
                                                <i class="icon-arrow-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </nav>

                            <!-- Members Comments -->
                            <section class="comments-box w-comments" itemprop="comment" itemscope itemtype="http://schema.org/UserComments">
                                <div class="cat-widget">
                                    <div class="cat-widget-title">
                                        <h3>Comments</h3>
                                    </div>

                                    <div class="cat-widget-content">
                                        <div class="row-fluid comments">

                                            <article class="media">
                                                <img class="media-object span2" src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/a2.jpg&amp;w=65&amp;h=65" alt="65x65" />

                                                <div class="media-body span10">
                                                    <a itemprop="creator" href="#">
                                                        <h4 class="media-heading">Serpentsoft</h4>
                                                    </a>


                                                    <div class="media">
                                                        <div itemprop="commentText">
                                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
                                                        </div>
                                                        <ul>
                                                            <li><span itemprop="commentTime" title="Comment Time"><i class="bo-icon-time"></i>14 Mar 2013, 03:32 PM</span></li>
                                                            <li><a itemprop="replyToUrl" href="#" class="btn-theme" title="Reply"><i class="bo-icon-comment bo-icon-white"></i>Reply</a></li>
                                                        </ul>
                                                    </div>

                                                    <!-- Nested Comments -->
                                                    <article class="media">
                                                        <img class="media-object span2" src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/a3.jpg&amp;w=65&amp;h=65" alt="65x65" />

                                                        <div class="media-body span10">
                                                            <a itemprop="creator" href="#">
                                                                <h5 class="media-heading">Bee Comment</h5>
                                                            </a>

                                                            <div class="media">
                                                                <div itemprop="commentText">
                                                                    <p>Vel velit auctor aliquet auctor.</p>
                                                                </div>
                                                                <ul>
                                                                    <li><span itemprop="commentTime" title="Comment Time"><i class="bo-icon-time"></i>14 Mar 2013, 03:32 PM</span></li>
                                                                    <li><a itemprop="replyToUrl" href="#" class="btn-theme" title="Reply"><i class="bo-icon-comment bo-icon-white"></i>Reply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </article>

                                            <article class="media">
                                                <img class="media-object span2" src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/a4.jpg&amp;w=65&amp;h=65" alt="65x65" />

                                                <div class="media-body span10">
                                                    <a itemprop="creator" href="#">
                                                        <h4 class="media-heading">Creator 2</h4>
                                                    </a>

                                                    <div class="media">
                                                        <div itemprop="commentText">
                                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                                                        </div>

                                                        <ul>
                                                            <li><span itemprop="commentTime" title="Comment Time"><i class="bo-icon-time"></i>14 Mar 2013, 03:32 PM</span></li>
                                                            <li><a itemprop="replyToUrl" href="#" class="btn-theme" title="Reply"><i class="bo-icon-comment bo-icon-white"></i>Reply</a></li>
                                                        </ul>
                                                    </div>

                                                    <!-- Nested Comments -->
                                                    <article class="media">
                                                        <img class="media-object span2" src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/a1.jpg&amp;w=65&amp;h=65" alt="65x65" />

                                                        <div class="media-body span10">
                                                            <a itemprop="creator" href="#">
                                                                <h5 class="media-heading">Reply Comment 3</h5>
                                                            </a>

                                                            <div class="media">
                                                                <div itemprop="commentText">
                                                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
                                                                </div>
                                                                <ul>
                                                                    <li><span itemprop="commentTime" title="Comment Time"><i class="bo-icon-time"></i>14 Mar 2013, 03:32 PM</span></li>
                                                                    <li><a itemprop="replyToUrl" href="#" class="btn-theme" title="Reply"><i class="bo-icon-comment bo-icon-white"></i>Reply</a></li>
                                                                </ul>
                                                            </div>


                                                            <!-- Nested 2 -->
                                                            <article class="media">
                                                                <img class="media-object span2" src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/a3.jpg&amp;w=59&amp;h=59" alt="59x59" />

                                                                <div class="media-body span10">
                                                                    <a itemprop="creator" href="#">
                                                                        <h5 class="media-heading">Reply Comment 4</h5>
                                                                    </a>

                                                                    <div class="media">
                                                                        <div itemprop="commentText">
                                                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                                                                        </div>
                                                                        <ul>
                                                                            <li><span itemprop="commentTime" title="Comment Time"><i class="bo-icon-time"></i>14 Mar 2013, 03:32 PM</span></li>
                                                                            <li><a itemprop="replyToUrl" href="#" class="btn-theme" title="Reply"><i class="bo-icon-comment bo-icon-white"></i>Reply</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </article>


                                                </div>
                                            </article>

                                        </div>

                                        <div class="row-fluid split-top leave-comment">
                                            <h4>Leave a Comment</h4>
                                            <p>Your email address will not be published. Required fields are marked with <i class="bo-icon-star"></i></p>
                                            <form>
                                                <fieldset>
                                                    <label for="txtCommenterName">Your Name <i class="bo-icon-star"></i></label>
                                                    <input id="txtCommenterName" type="text" placeholder="Your Name" required="required" />

                                                    <div class="row-fluid">
                                                        <div class="span6">
                                                            <label for="txtCommenterEmail">Email <i class="bo-icon-star"></i></label>
                                                            <input id="txtCommenterEmail" type="email" placeholder="Email will not appear to users" required="required" />
                                                        </div>

                                                        <div class="span6">
                                                            <label for="txtCommenterURL">Website</label>
                                                            <input id="txtCommenterURL" type="url" placeholder="http://www.website-if-available.com" />
                                                        </div>
                                                    </div>

                                                    <label for="txtCommenterText">Comment <i class="bo-icon-star"></i></label>
                                                    <textarea id="txtCommenterText" rows="3" cols="100" placeholder="Write your comment" required="required"></textarea>

                                                    <button type="submit" class="btn-theme">Post Comment</button>
                                                </fieldset>

                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </section>

                        </footer>

                    </div>
                </article>
            </div>


            <!-- Right sidebar -->
            <section class="span270">
                <h2 class="hidden">Right Sidebar</h2>

                <!-- Feedburner -->
                <aside class="widget w-rss-feed">
                    <div class="widget-title">
                        <h4>Subscribe To RSS Feed</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="feedburner-subscribe">
                            <form>
                                <div class="input-append input-block-level">
                                    <input type="email" class="span12 search-query" placeholder="Enter you email" required="required">
                                    <button type="submit" class="btn-theme">Subscribe</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </aside>

                <!-- Weather -->
                <aside class="widget w-weather">
                  <div class="widget-content clearfix"></div>
              </aside>

                <p>
                  <!-- Poll Cloud -->
                </p>
                <p>
                  <!-- Sponsors (4x125 Adv.) -->
                </p>
                <aside class="widget w-sponsors">
                    <div class="widget-title">
                        <h4>Sponsors</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <ul class="widget-sponsor clearfix">
                            <li><a href="#MyThemeAdv" target="_blank">
                                <img src="../../images/ad-125-1.jpg" /></a></li>
                            <li><a href="#MyThemeAdv" target="_blank">
                                <img src="../../images/ad-125-2.jpg" /></a></li>
                            <li><a href="#MyThemeAdv" target="_blank">
                                <img src="../../images/ad-125-3.jpg" /></a></li>
                            <li><a href="#MyThemeAdv" target="_blank">
                                <img src="../../images/ad-125-4.jpg" /></a></li>
                        </ul>
                    </div>
                </aside>

                <!-- New In Pictures -->
                <aside class="widget w-pictures">
                    <div class="widget-title">
                        <h4>Notas en imagen </h4>
                    </div>

                    <div class="widget-content clearfix thumbnails">
                        <ul class="posts-in-images clearfix">
                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Image" title="">
                                <a href="post-image.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/3.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>

                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Video" title="">
                                <a href="post-video.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/4.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>

                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Sound Cloud" title="">
                                <a href="post-soundcloud.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/5.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>

                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Image and Lightbox" title="">
                                <a href="post-image-lightbox.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/6.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>

                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Review" title="">
                                <a href="post-review.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/7.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>

                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Google Map" title="">
                                <a href="post-googlemap.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/8.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>


                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Image and Lightbox" title="">
                                <a href="post-image-lightbox.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/9.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>

                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Review" title="">
                                <a href="post-review.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/10.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>

                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Post With Google Map" title="">
                                <a href="post-googlemap.html">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/11.jpg&amp;w=80&amp;h=75" />
                                    </div>
                                </a>
                            </li>
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

                <!-- Recent News -->
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
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Featured Image</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-image.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/10.jpg&amp;w=271&amp;h=200" class="post-img" />

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Sound Cloud</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-soundcloud.html" class="more" title=""></a>
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
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Featured Image</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-image.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/12.jpg&amp;w=271&amp;h=200" class="post-img" />

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Sound Cloud</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-soundcloud.html" class="more" title=""></a>
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


                <!-- 160 (160x600 Adv.) -->
                <aside class="widget w-adv">
                    <div class="widget-title">
                        <h4>250x250 Adv</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <img src="#" data-src="holder.js/250x250" />
                    </div>
                </aside>


            </section>


            <!-- Left sidebar -->
            <section class="span300">
                <h2 class="hidden">Left Sidebar</h2>

                <!-- Posts Of The Day -->
                <aside class="widget w-posts">
                    <div class="widget-title">
                        <h4>Most Viewed Posts</h4>
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
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Featured Image</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-image.html" class="more" title=""></a>
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
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Self Hosted Audio</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-self-audio.html" class="more" title=""></a>
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
                        <h4>Social Networks</h4>
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

                                <li class="vm-wrp">
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
                                </li>

                                <li class="rs-wrp">
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
                                </li>



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
                <aside class="widget w-adv">
                    <div class="widget-title">
                        <h4>300x250 Advertisement</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <a href="#MyThemeAdv" target="_blank">
                            <img src="../../images/ad-300x250.jpg" />
                        </a>
                    </div>

                </aside>

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
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Featured Image</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-image.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li>
                                                    <article class="fold-item">
                                                        <div class="clearfix">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/5.jpg&amp;w=301&amp;h=200" class="post-img" />

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Sound Cloud</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-soundcloud.html" class="more" title=""></a>
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
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Featured Image and Lightbox</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-image-lightbox.html" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li>
                                                    <article class="fold-item">
                                                        <div class="clearfix">
                                                            <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/1.jpg&amp;w=301&amp;h=200" class="post-img" />

                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Media, Technology</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title">Post With Self Hosted Audio</h5>

                                                                <div class="info">
                                                                    <span><i class="bo-icon-time bo-icon-white"></i>26 Feb 2013, 05:15 AM</span>
                                                                    <span><i class="bo-icon-comment bo-icon-white"></i>25</span>
                                                                    <span><i class="bo-icon-eye-open bo-icon-white"></i>320</span>                                                                </div>

                                                                <p class="text">Lorem ipsum dolor sit amet, mei eligendi moderatius deterruisset no. Blandit mentitum delicata an eos, novum persius ne per. Soluta rationibus repudiandae ut pro, quidam quodsi audiam ad cum. Duo vero nihil ocurreret at ...</p>
                                                            </div>

                                                            <a href="post-self-audio.html" class="more" title=""></a>
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
                                                        <a href="post-image.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/2.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-image.html" title="Post With Featured Image">

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
                                                        <a href="post-video.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/10.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-video.html" title="Post With Video">
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
                                                        <a href="post-review.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/12.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-review.html" title="Post With Review">
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
                                                        <a href="post-self-video.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/13.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-self-video.html" title="Post With Self Hosted Video">
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
                                                        <a href="post-image-lightbox.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/11.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-image-lightbox.html" title="Post With Image + Lightbox">
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
                                                        <a href="post-self-audio.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/10.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-self-audio.html" title="Post With Self Hosted Audio">
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
                                                        <a href="post-soundcloud.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/1.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-soundcloud.html" title="Post With Sound-Cloud">
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
                                                        <a href="post-googlemap.html" class="span3" title="">
                                                            <div class="media-object thumb-effect">
                                                                <div class="mask"></div>
                                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/2.jpg&amp;w=65&amp;h=65" />
                                                            </div>
                                                        </a>

                                                        <div class="media-body span9">
                                                            <a href="post-googlemap.html" title="Post With Google Map">
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
                                        <a href="post-image-lightbox.html" class="span3" title="">
                                            <div class="media-object thumb-effect">
                                                <div class="mask"></div>
                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/1.jpg&amp;w=65&amp;h=65" />
                                            </div>
                                        </a>

                                        <div class="media-body span9">
                                            <a href="post-image-lightbox.html" title="Post With Image + Lightbox">
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
                                        <a href="post-self-audio.html" class="span3" title="">
                                            <div class="media-object thumb-effect">
                                                <div class="mask"></div>
                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/2.jpg&amp;w=65&amp;h=65" />
                                            </div>
                                        </a>

                                        <div class="media-body span9">
                                            <a href="post-self-audio.html" title="Post With Self Hosted Audio">
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
                                        <a href="post-soundcloud.html" class="span3" title="">
                                            <div class="media-object thumb-effect">
                                                <div class="mask"></div>
                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/3.jpg&amp;w=65&amp;h=65" />
                                            </div>
                                        </a>

                                        <div class="media-body span9">
                                            <a href="post-soundcloud.html" title="Post With Sound-Cloud">
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
                                        <a href="post-googlemap.html" class="span3" title="">
                                            <div class="media-object thumb-effect">
                                                <div class="mask"></div>
                                                <img src="http://labs.serpentsoft.com/adams-magazine/framework/timthumb.php?src=../images/5.jpg&amp;w=65&amp;h=65" />
                                            </div>
                                        </a>

                                        <div class="media-body span9">
                                            <a href="post-googlemap.html" title="Post With Google Map">
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
                        <h4>Youtube Video</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <iframe itemprop="contentURL" class="youtube-player" type="text/html"
                            width="100%" height="200" src="http://www.youtube.com/embed/P5_Msrdg3Hk?wmode=transparent&amp;wmode=opaque"
                            allowfullscreen frameborder="0"></iframe>
                    </div>

                </aside>


                <!-- Sound Cloud Widget -->
                <aside class="widget w-audio">
                    <div class="widget-title">
                        <h4>SoundCloud Track</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <iframe itemprop="contentURL" width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F72646464"></iframe>
                    </div>

                </aside>

            </section>
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
