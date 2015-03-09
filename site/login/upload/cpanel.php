<?php
include("conexion.php"); 
session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Panel de Control</title>

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
   <header>
        <div class="navbar navbar-banner">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="logo-240">
                        <h1 class="hidden" itemprop="name">Serpentsoft</h1>
                        <a href="../index.html">
                            <img itemprop="logo" src="../../images/logoNiN.png" alt="Logo" /></a>
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
                                    data-target="#" href="../index.html"><i class="icon-home"></i></a>
                            </li>

                            <li class="divider-vertical"></li>

                            <li class="dropdown" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="a6" role="button"
                                    data-hover="dropdown" data-delay="200"
                                    data-target="#" href="#" title="">Seguimiento<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="../home-styles/blog.html" title="">Reestablecer Contrase&ntilde;as</a></li>
                                    <li><a href="../home-styles/left-sb.html" title="">Cambiar Usuarios</a></li>
                                    <li><a href="../home-styles/middle-content.html" title="">Preguntas</a></li>
                                </ul>

                            </li>

                            <li class="divider-vertical"></li>
                            <li class="dropdown" role="menu" aria-labelledby="dLabel">
                                <a class="dropdown-toggle" id="a6" role="button"
                                    data-hover="dropdown" data-delay="200"
                                    data-target="#" href="../login/logout.php" title="">Salir<i class="caret"></i></a>
                            </li>
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
            <div class="span12 main-content">

                <!-- main content -->
                <article class="article-container" itemscope itemtype="http://schema.org/Article">
                    <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                

                                <h1 itemprop="headline">Panel de Control</h1>

                                <div class="post-info"></div>
                                <div class="login-page">
                            <!-- Upload Files -->

                            <div class="row-fluid">
                                

<SCRIPT LANGUAGE="JavaScript" type="text/javascript">
    /* Collect all forms in document to one and post it */
    function submitAllDocumentForms() {
        var arrDocForms = document.getElementsByTagName('form');
        var formCollector = document.createElement("form");
        with (formCollector) {
            method = "post";
            action = "../login/upload/procesar.php";
            name = "formCollector";
            id = "formCollector";
        }
        for (var ix = 0; ix < arrDocForms.length; ix++) {
            appendFormVals2Form(arrDocForms[ix], formCollector);
        }
        document.body.appendChild(formCollector);
        formCollector.submit();

    }
    /* Function: add all elements from ``frmCollectFrom´´ and append them to ``frmCollector´´ before returning ``frmCollector´´*/
    function appendFormVals2Form(frmCollectFrom, frmCollector) {
        var frm = frmCollectFrom.elements;
        for (var ix = 0 ; ix < frm.length ; ix++)
            frmCollector.appendChild(frm[ix]);
        return frmCollector;
    }

</SCRIPT>
Información del Articulo:
<FORM METHOD="POST" ACTION="../login/upload/procesar.php" NAME="form1" id="form1">
<input type="text" class="span12" required="required" id="id_art" name="id_art" placeholder="Identificador" required/>
<input type="text" class="span12" required="required" id="titulo" name="titulo" placeholder="Titulo" />
<input type="text" class="span12" required="required" id="subtitulo" name="subtitulo" placeholder="Subtitulo" />
<textarea rows="10" cols="70" class="span12" required="required" id="articulo" name="articulo" placeholder="Articulo" ></textarea>
<input type="datetime" class="span12" required="required" id="date" name="fecha" placeholder="Fecha" />
Imagen para el Articulo:
</FORM>
<FORM METHOD="POST" ACTION="../login/upload/procesar.php" NAME="form2" id="form2">
<input type="text" class="span12" required="required" id="id_img" name="id_img" placeholder="Identificador de Imagen" />
<input type="file" class="span12" required="required" name="imagen"/>
</FORM>
<INPUT TYPE="submit" value="Ingresar">
                            </div>
                            
                        </div>

                            </header>
                            <span class="clearfix"></span>

                            <div class="columns-page">
                    
                            <div class="columns-six">
                                <div class="columns-title">
                                    <h2>Articulos</h2>
                                </div>

                                <div class="row-fluid">
                                    <div class="span2">
                                        <p><span class="drop-capital">1</span>
										</p>
                                    </div>

                                    <div class="span2">
                                        <p><span class="drop-capital">2</span> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, Highlight Text: lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                    </div>

                                    <div class="span2">
                                        <p><span class="drop-capital">3</span> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, Highlight Text: lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                    </div>

                                    <div class="span2">
                                        <p><span class="drop-capital">4</span> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, Highlight Text: lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                    </div>

                                    <div class="span2">
                                        <p><span class="drop-capital">5</span> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, Highlight Text: lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                    </div>

                                    <div class="span2">
                                        <p><span class="drop-capital">6</span> Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, Highlight Text: lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                            
                            <div class="clearfix"></div>

                            <div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                               

                            </div>
                        </div>

                    </div>
                </article>
            </div>

        </div>
    </div>
    <section class="modern-footer">
        <footer class="f-copyright">
            
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
