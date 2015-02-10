<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Adams Magazine | Archives Page</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Styles Should be After Script -->
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="functions.ajax.js"></script>

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
                    <div class="logo-240 pull-left" itemscope itemtype="http://schema.org/Brand">
                        <h1 class="hidden" itemprop="name">Serpentsoft</h1>
                        <a href="../index.html">
                            <img itemprop="logo" src="../../images/logoNiN.png" alt="Logo" /></a>
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
                                    data-target="#" href="#" title="">Page Layout<i class="caret"></i></a>

                                <ul class="dropdown-menu">
                                    <li><a href="../home-styles/blog.html" title="">Blog Style</a></li>
                                    <li><a href="../home-styles/left-sb.html" title="">Left Sidebars</a></li>
                                    <li><a href="../home-styles/middle-content.html" title="">Middle Content</a></li>
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
                <article class="article-container"  itemtype="http://schema.org/Article">
                    <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                

                               

                                <div class="post-info"></div>

                            </header>
                           
                            <span class="clearfix"></span>

                            <div class="row-fluid">
                            <div class="span12">

                               <div id="allContent"><table border="0" height="100%" width="100%"><tr><td align="center" valign="middle" height="100%" width="100%">
		
		<div id="alertBoxes"></div>
                                    <h1 itemprop="headline">Ingresa tus Datos &Uacute;nicos de Acceso</h1>
		<span class="loginBlock"><span class="inner">
			<?php
            if ( isset($_SESSION['admonusuario_Gl']) && isset($_SESSION['Id_UsuG']) && $_SESSION['admonusuario_Gl'] != '' && $_SESSION['Id_UsuG'] != '0' ){
	echo '<div class="session_on">
		Ya iniciaste sesi&oacute;n &#124; Ahora has un <a href="javascript:void(0);" id="sessionKiller">logout</a>.<span class="timer" id="timer"  style="margin-left: 10px;"></span>
	</div>';
}
else{
	echo '<form method="post" action="">
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td>Usuario:</td>
				<td><input type="text" name="login_username" id="login_username" /></td>
			</tr>
			<tr>
				<td>Contrase&ntilde;a:</td>
				<td><input type="password" name="login_userpass" id="login_userpass" /></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><span class="timer" id="timer"></span><button id="login_userbttn">Login</button></td>
			</tr>
		</table>
	</form>';
}
			?>
		
		</span></span>
		
	</td></tr></table></div>
                            </div>
                        </div>
                            
                            

                           
                        </div>

                    </div>
                </article>
            </div>

        </div>
        </div>
   

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
