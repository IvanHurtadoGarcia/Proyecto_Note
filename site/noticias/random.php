<?php
        session_start();
        include('../php_conexion.php'); 
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
                                    data-target="#" href="../index.php"><i class="icon-home"></i></a>
                            </li>

                            <li class="divider-vertical"></li>

                            <li class="dropdown" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="a6" role="button"
                                    data-hover="dropdown" data-delay="200"
                                    data-target="#" href="#" title="">Vida y Tecnol&oacute;gia<i class="caret"></i></a>

                               <ul class="dropdown-menu">
                                    <li><a href="../nota/technews.php?codigo=1" title="">Noticias Tecnol&oacute;gicas</a></li>
                                    <li><a href="../nota/videojuegos.php?codigo=2" title="">Video Juegos </a></li>
                                    <li><a href="../nota/reviews.php?codigo=3" title="">Reviews</a></li>
                                </ul>

                            </li>

                            <li class="divider-vertical"></li>
                            
                            <li class="dropdown" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="A1" role="button"
                                   data-hover="dropdown" data-delay="200"
                                   data-target="#" href="#">Sociedad y Cultura<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="../post-formats/post-eventosdatos.php?codigo=4">Eventos</a></li>
                                    <li><a href="../post-formats/post-fotografiadatos.php?codigo=6">Fotografía</a></li>
                                    <li><a href="../post-formats/post-saluddatos.php?codigo=8">Salud</a></li>
                                   

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
                                    <li><a href="../noticias/lecturas.php?codigo=12#">Lecturas</a></li>
                                    <li><a href="../noticias/descargar.php?codigo=13#">Descargas</a></li>
                                    <li><a href="../noticias/random.php?codigo=14#">Random</a></li>
                                    


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
               
                

                <!-- main content -->
                <article class="article-container" itemscope itemtype="http://schema.org/Article">
                    <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope itemtype="http://schema.org/WebPage">
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        <li>
                                            <a href="../index.php"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="random.php?codigo=14" class="active">random</a></li>
                                    </ul>
                                </div>

                                <h1 itemprop="headline">Noticias sobre random</h1>

                                <div class="post-info"></div>

                            </header>

                            <span class="clearfix"></span>

                            <div class="blog">
                                 <?php 
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM random WHERE tipo='$codigo'  ORDER BY my_date desc LIMIT 5");
    while($datox=mysql_fetch_array($sqlx)){
                    
            ?>
                              <ul class="media-list">
                                    <li class="media blog-item">
                                        <article>
                                            <div class="span12 img-container" title="">
                                                
                                                <img src="../login/administration/admin/secciones/random/<?php echo $datox['id'].'.jpg'; ?>" height="345" width="604">
                                                <a href="nota-ram.php?noticia=<?php echo $datox['id']; ?>" class="more"></a>
                                            </div>

                                            <div class="row-fluid">
                                            <div class="media-body span12">
                                                <div class="row-fluid">
                                                    <div class="span2 blog-date">
                                                        <div class="date-meta">
                                                            <div class="post-date">
                                                                <div class="date">
                                                                  <b><p>Post:</p><p style="font-size:12px;font-family:cursive" align="center"><br /><?php echo $datox['fecha']; ?></p></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>    

                                                    <div class="span10 blog-desc-container">
                                                            <a href="nota-ram.php?noticia=<?php echo $datox['id']; ?>" title="">
                                                            <h4 class="media-heading"><?php echo $datox['titulo']; ?></h4>
                                                        </a>

                                                        <div class="post-meta clearfix">
                                                            
                                                        </div>

                                                        <div class="media">
                                                            <p class="blog-desc">
                                                                <?php echo $datox['intro']; ?>...
                                                            </p>
                                                            <a href="nota-ram.php?noticia=<?php echo $datox['id']; ?>" class="btn-theme">Continuuar Leyendo...</a>
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

                                   <?php } 
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM random WHERE tipo='$codigo'  ORDER BY my_date desc LIMIT 5");
    if(!$datox=mysql_fetch_array($sqlx)){
            echo '<div class="alert alert-error" align="center">
                        <strong><i class="icon-warning-sign"></i> No hay noticias de esta categoria</strong>
                 </div>';               
    }
               ?>
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
