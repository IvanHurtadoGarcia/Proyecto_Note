<?php 
   include('../php_conexion.php');
    if(!empty($_GET['noticia'])){
        $noticia=$_GET['noticia'];
        $sqlx=mysql_query("SELECT * FROM fotografia WHERE id=$noticia");
        if($datox=mysql_fetch_array($sqlx)){
            $ntitulo=$datox['titulo'];  $nintro=$datox['intro'];
            $ntexto=$datox['texto'];    $nfecha=$datox['fecha'];
        }
    } 
    $x=0;
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM fotografia  ORDER BY my_date desc ");
        while($datos=mysql_fetch_array($sqlx)){
        $x++;
        $v_foto[$x]=$datos['id'];
        $v_titulo[$x]=$datos['titulo'];
        $v_intro[$x]=$datos['intro'];
        $v_fecha[$x]=$datos['fecha'];
    }

    $x2=0;
    $sqlx2=mysql_query("SELECT * FROM usuarios");
        while($datos2=mysql_fetch_array($sqlx2)){
        $x2++;
        $v_usu[$x2]=$datos2['nombre'];
        
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
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>NoteInsideNetwork |  Fotigrafia</title>

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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
                        <a href="../index.php"><img itemprop="logo" src="../../images/LogoNiN.png" alt="Logo" /></a></div>

                  <div class="adv-970 pull-right visible-desktop"></div>
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
                                    <li><a href="../noticias/lecturas.php?codigo=15#">Lecturas</a></li>
                                    <li><a href="../noticias/descargar.php?codigo=13#">Descargas</a></li>
                                    <li><a href="../noticias/random.php?codigo=15#">Random</a></li>
                                    


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
                            <h3>Ultimas</h3>
                        </div>
                        <div id="divBreakingNewsTicker" class="content">
                            <ul id="js-news" class="js-hidden">
                                <li><a href="tecnologias.php?titulo=<?php echo $v_titulo['1'] ?>&id=6"><?php echo $v_titulo['1'] ?></a></li>
                                <li><a href="tecnologias.php?titulo=<?php echo $v_titulo['2'] ?>&id=5"><?php echo $v_titulo['2'] ?></a></li>
                                <li><a href="tecnologias.php?titulo=<?php echo $v_titulo['3'] ?>&id=4"><?php echo $v_titulo['3'] ?></a></li>
                                <li><a href="tecnologias.php?titulo=<?php echo $v_titulo['4'] ?>&id=3"><?php echo $v_titulo['4'] ?></a></li>
                                <li><a href="tecnologias.php?titulo=<?php echo $v_titulo['5'] ?>&id=2"><?php echo $v_titulo['5'] ?></a></li>
                                <li><a href="tecnologias.php?titulo=<?php echo $v_titulo['6'] ?>&id=1"><?php echo $v_titulo['6'] ?></a></li>
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
                                            <a href="../index.php"><i class="bo-icon-home"></i>Inicio</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="../post-formats/post-fotografiadatos.php?codigo=6">Fotografia</a></li>
                                    </ul>
                                </div>

                                <div class="figure-container">
                                    <figure class="featured-post-figure" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        

                               <img src="../login/administration/admin/secciones/fotografia/<?php echo $noticia.'.jpg'; ?>" width="550" height="550">
                                
                                        
                                    </figure>
                                </div>

                                
                                                            
                                <h1 itemprop="headline">

                                <p> <?php echo $ntitulo; ?></p>
                                </h1>

                                <div class="post-info">
                                    <div class="post-meta">
                                        <ul>
                                            <li title="Post Author"><a href="#"><i class="bo-icon-pencil"></i><?php echo $v_usu['2'] ?></a></li>
                                            <li title="Publish Time" itemprop="datePublished"><i class="bo-icon-time"></i><?php echo $nfecha;?></li>

                                        </ul>
</li>
                                            <li title="Publish Time" itemprop="datePublished"><i class="bo-icon-time"></i><?php echo $nfecha;?></li>

                                        </ul>
                                    </div>
                                </div>



                            </header>




                            <span class="clearfix"></span>

                            <div class="post-entry" itemprop="articleBody">

                               
                            
                            
                            <blockquote>
                                <p style="text-align: justify">
                                   <?php echo $ntexto; ?>
                                </p>
                            </blockquote>
                               

                               
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

                          

                            <!-- Author Biography -->
                            <aside class="author-bio w-user">
                                <div class="cat-widget-title">
                                    <h3>El de la Nota</h3>
                                </div>

                                <div class="cat-widget-content">
                                    <div class="row-fluid">

                                        <div class="media" itemprop="author" itemscope itemtype="http://schema.org/Person">

                                            <!--<a class="thumbnail span2 pull-left" href="author.html" title="More About Author">
                                            <img itemprop="image" class="media-object" src="" data-src="holder.js/77x77" alt="Author" />
                                        </a>-->
                                            <a href="#" class="media-object span2" title="Author">
                                                <div class="thumb-effect">

                                                    <div class="mask"></div>
                                                     it´s me <?php echo $v_usu['2'] ?>
                                                </div>
                                            </a>

                                            <div class="media-body span10">

                                                <a itemprop="name" class="hidden" href="../page-templates/author-archive.html" title="More About Author">
                                                    <h4 class="media-heading hidden">Serpentsoft</h4>
                                                </a>

                                               <div class="media">

                                                    <ul class="author-personal-info social-networks clearfix">

                                                        <li><a href="https://www.facebook.com/esteban.perz" class="fb-metro-24px-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                            data-original-title="facebook" title=""></a></li>

                                                        <li><a href="https://twitter.com/Hanckert" class="twitter-metro-24px-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                            data-original-title="twitter" title=""></a></li>

                                                        <li><a href="https://plus.google.com/u/0/+Estebancastillobod/posts" class="googleplus-metro-24px-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                            data-original-title="googleplus" title=""></a></li>

                                                       

                                                    </ul>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </aside>

                            <!-- Related Posts -->
                          

                            <!-- Posts Navigator -->
                            

                            <!-- Members Comments -->
                            <div class="fb-comments" data-href="https://www.facebook.com/noteinside?fref=ts" data-numposts="5" data-colorscheme="light"></div>

                        </footer>

                    </div>
                </article>
            </div>


            <!-- Right sidebar -->
            <section class="span270">
                <h2 class="hidden">Right Sidebar</h2>

              

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
                

                <!-- New In Pictures -->
                 <aside class="widget w-pictures">
                    <div class="widget-title">
                        <h4>Ultimas en Fotografia</h4>
                    </div>

                    <div class="widget-content clearfix thumbnails">
                         <ul class="posts-in-images clearfix">
                            <?php 
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM fotografia WHERE tipo='6'  ORDER BY my_date asc LIMIT 9");
    while($datox=mysql_fetch_array($sqlx)){
                    
            ?>
                            <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="" title="<?php echo $datox['titulo']; ?>">
                                <a href="post-fotografia.php?noticia=<?php echo $datox['id']; ?>">
                                    <div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="../login/administration/admin/secciones/fotografia/<?php echo $datox['id'].'.jpg'; ?>" height="75" width="80">
                                        
                                    </div>
                                </a>
                            </li>

                           <?php } 
    $sqlx=mysql_query("SELECT *, DATE_FORMAT(`fecha`,'%d/%m/%Y %H:%i:%s') AS my_date FROM fotografia WHERE tipo='6'  ORDER BY my_date asc LIMIT 9");
    if(!$datox=mysql_fetch_array($sqlx)){
            echo '<div class="alert alert-error" align="center">
                        <strong><i class="icon-warning-sign"></i> No hay noticias de esta categoria</strong>
                 </div>';               
    }
               ?>
                        </ul>
                    </div>
                </aside>



                <!-- Tags Cloud -->
                

                <!-- Recent News -->
              <!--  <aside class="widget w-posts">
                    <div class="widget-title">
                        <h4>Recientes</h4>
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
                                                            
                                                            <img src="../login/administration/admin/secciones/random/<?php echo $v_foto[1].'.jpg'; ?>" height="200" width="271">
                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Tecnol&oacute;gias</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title"><?php echo $v_titulo['1'] ?></h5>

                                                                <div class="info">
                                                                                                                                </div>

                                                                <p class="text"><?php echo $v_intro['1'] ?> ...</p>
                                                            </div>

                                                            <a href="tecnologias.php?titulo=<?php echo $v_titulo['1'] ?>&id=6" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                            
                                                            <img src="../login/administration/admin/secciones/randomt/<?php echo $v_foto[2].'.jpg'; ?>" height="200" width="271">
                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Tecnol&oacute;gias</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title"><?php echo $v_titulo['2'] ?></h5>

                                                                <div class="info">
                                                                                                                                </div>

                                                                <p class="text"><?php echo $v_intro['2'] ?> ...</p>
                                                            </div>

                                                            <a href="tecnologias.php?titulo=<?php echo $v_titulo['2'] ?>&id=5" class="more" title=""></a>
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
                                                            
                                                            <img src="../login/administration/admin/secciones/randomt/<?php echo $v_foto[3].'.jpg'; ?>" height="200" width="271">
                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Tecnol&oacute;gias</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title"><?php echo $v_titulo['3'] ?></h5>

                                                                <div class="info">
                                                                                                                                </div>

                                                                <p class="text"><?php echo $v_intro['3'] ?> ...</p>
                                                            </div>

                                                            <a href="tecnologias.php?titulo=<?php echo $v_titulo['3'] ?>&id=4" class="more" title=""></a>
                                                        </div>
                                                    </article>
                                                </li>

                                                <li>
                                                    <article class="fold-item span12">
                                                        <div class="clearfix">
                                                            
                                                            <img src="../login/administration/admin/secciones/randomt/<?php echo $v_foto[4].'.jpg'; ?>" height="200" width="271">
                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Tecnol&oacute;gias</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title"><?php echo $v_titulo['4'] ?></h5>

                                                                <div class="info">
                                                                                                                                </div>

                                                                <p class="text"><?php echo $v_intro['4'] ?> ...</p>
                                                            </div>

                                                            <a href="tecnologias.php?titulo=<?php echo $v_titulo['4'] ?>&id=3" class="more" title=""></a>
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
                <!--<aside class="widget w-posts">
                    <div class="widget-title">
                        <h4>Descargas</h4>
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
                                                            
                                                          <img src="../login/administration/admin/secciones/descargas/<?php echo $v4_foto[1].'.jpg'; ?>" height="200" width="301">
                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Descargas</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title"><?php echo $v4_titulo['1'] ?></h5>

                                                                <div class="info">
                                                                                                                                  </div>

                                                                <p class="text"><?php echo $v4_intro['1'] ?>...</p>
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
                                                            
                                                          <img src="../login/administration/admin/secciones/descargas/<?php echo $v4_foto[2].'.jpg'; ?>" height="200" width="301">
                                                            <div class="post-sitemap">
                                                                <span><i class="bo-icon-home bo-icon-white"></i>Descargas</span>                                                            </div>

                                                            <div class="description visible-part">
                                                                <h5 class="title"><?php echo $v4_titulo['2'] ?></h5>

                                                                <div class="info">
                                                                                                                                  </div>

                                                                <p class="text"><?php echo $v4_intro['2'] ?>...</p>
                                                            </div>

                                                            <a href="post-image.html" class="more" title=""></a>
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



                <!-- Random Posts (Classic) -->
                <aside class="widget w-posts">
                    <div class="widget-title">
                        <h4>Random</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="posts-in-widget">
                            <ul class="media-list">
                                <li class="media">
                                    <article>
                                        <a href="post-formats/post-image-lightbox.html" class="span3" title="">
                                            <div class="media-object thumb-effect">
                                                <div class="mask"></div>
                                                <img src="../login/administration/admin/secciones/random/<?php echo $v7_foto[1].'.jpg'; ?>" height="65" width="65">
                                                
                                            </div>
                                        </a>

                                        <div class="media-body span9">
                                            <a href="post-formats/post-image-lightbox.html" title="">
                                                <h5 class="media-heading"><?php echo $v7_titulo['1'] ?></h5>
                                            </a>

                                            <div class="media">
                                                <span title=""><i class="bo-icon-time"></i><?php echo $v7_fecha['1'] ?></span>
                                            </div>
                                        </div>
                                    </article>
                                </li>

                                <li class="media">
                                    <article>
                                        <a href="post-formats/post-self-audio.html" class="span3" title="">
                                            <div class="media-object thumb-effect">
                                                <div class="mask"></div>
                                               <img src="../login/administration/admin/secciones/random/<?php echo $v7_foto[2].'.jpg'; ?>" height="65" width="65">
                                            </div>
                                        </a>

                                        <div class="media-body span9">
                                            <a href="post-formats/post-self-audio.html" title="">
                                                <h5 class="media-heading"><?php echo $v7_titulo['2'] ?></h5>
                                            </a>

                                            <div class="media">
                                                <span title=""><i class="bo-icon-time"></i><?php echo $v7_fecha['2'] ?></span>
                                            </div>
                                        </div>
                                    </article>
                                </li>

                                <li class="media">
                                    <article>
                                        <a href="post-formats/post-soundcloud.html" class="span3" title="">
                                            <div class="media-object thumb-effect">
                                                <div class="mask"></div>
                                               <img src="../login/administration/admin/secciones/random/<?php echo $v7_foto[3].'.jpg'; ?>" height="65" width="65">
                                            </div>
                                        </a>

                                        <div class="media-body span9">
                                            <a href="post-formats/post-soundcloud.html" title="">
                                                <h5 class="media-heading"><?php echo $v7_titulo['3'] ?></h5>
                                            </a>

                                            <div class="media">
                                                <span title=""><i class="bo-icon-time"></i><?php echo $v7_fecha['3'] ?></span>
                                            </div>
                                        </div>
                                    </article>
                                </li>

                                <li class="media">
                                    <article>
                                        <a href="post-formats/post-googlemap.html" class="span3" title="">
                                            <div class="media-object thumb-effect">
                                                <div class="mask"></div>
                                                <img src="../login/administration/admin/secciones/random/<?php echo $v7_foto[4].'.jpg'; ?>" height="65" width="65">
                                            </div>
                                        </a>

                                        <div class="media-body span9">
                                            <a href="post-formats/post-googlemap.html" title="">
                                                <h5 class="media-heading"><?php echo $v7_titulo['4'] ?></h5>
                                            </a>

                                            <div class="media">
                                                <span title=""><i class="bo-icon-time"></i><?php echo $v7_fecha['4'] ?></span>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </div>
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
