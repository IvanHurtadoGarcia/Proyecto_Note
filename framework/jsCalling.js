// Sliders
$jqSlider = jQuery.noConflict();

function isSliderExist(sliderTitle) {
    return $jqSlider(sliderTitle).length > 0 ? $jqSlider(sliderTitle).length : 0;
}

//$jqSlider(function () {

//if (isSliderExist('#da-slider') > 0) {
//    $jqSlider('#da-slider').cslider({
//        current: 0, 	// index of current slide
//        bgincrement: 50,	// increment the bg position (parallax effect) when sliding
//        autoplay: false,// slideshow on / off
//        interval: 4000  // time between transitions
//    });
//}
//});

$jqSlider(function () {
    SyntaxHighlighter.all();
});

$jqSlider(document).ready(function () {

    if (isSliderExist('#mainSlider1') > 0) {

        if (isSliderExist('#mainSlider1-carousel') > 0) {
            // The slider being synced must be initialized first
            $jqSlider('#mainSlider1-carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 97,
                itemMargin: 5,
                asNavFor: '#mainSlider1'
            });
        }

        $jqSlider('#mainSlider1').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#mainSlider1-carousel"
        });
    }

    if (isSliderExist('.span270 #widget_270_slider1') > 0) {

        $jqSlider('.span270 #widget_270_slider1').flexslider({
            slideshow: false,
            animation: "slide"
        });
    }

    // Sidebar 300
    if (isSliderExist('.span300 #widget_300_slider3') > 0) {
        $jqSlider('.span300 #widget_300_slider3').flexslider({
            slideshow: false,
            animation: "slide"
        });
    }
    if (isSliderExist('.span300 #widget_300_slider1') > 0) {
        $jqSlider('.span300 #widget_300_slider1').flexslider({
            slideshow: false,
            animation: "slide"
        });
    }

    if (isSliderExist('.span300 #widget_300_slider2') > 0) {
        $jqSlider('.span300 #widget_300_slider2').flexslider({
            slideshow: false,
            animation: "slide"
        });
    }

    // Category Sliders
    if (isSliderExist('.h-cat-1 #h_cat_slider1') > 0) {
        $jqSlider('.h-cat-1 #h_cat_slider1').flexslider({
            slideshow: false,
            animation: "slide",              //String: Select your animation type, "fade" or "slide"
            easing: "swing",                 // swing   //{NEW} String: Determines the easing method used in $jqSlider transitions. $jqSlider easing plugin is supported!
            direction: "horizontal"                //String: Select the sliding direction, "horizontal" or "vertical"
        });
    }

    if (isSliderExist('.v-cat-1 #v_cat_slider1') > 0) {
        $jqSlider('.v-cat-1 #v_cat_slider1').flexslider({
            slideshow: false,
            animation: "slide",              //String: Select your animation type, "fade" or "slide"
            easing: "swing",                 //{NEW} String: Determines the easing method used in $jqSlider transitions. $jqSlider easing plugin is supported!
            direction: "vertical"            // String: Select the sliding direction, "horizontal" or "vertical"
        });
    }

    if (isSliderExist('.v-cat-2 #v_cat_slider2') > 0) {
        $jqSlider('.v-cat-2 #v_cat_slider2').flexslider({
            slideshow: false,
            animation: "slide",              //String: Select your animation type, "fade" or "slide"
            easing: "swing",                 //{NEW} String: Determines the easing method used in $jqSlider transitions. $jqSlider easing plugin is supported!
            direction: "vertical"            // String: Select the sliding direction, "horizontal" or "vertical"
        });
    }

    // Review Category Sliders
    if (isSliderExist('.review-cat-1 #review_cat_slider1') > 0) {
        $jqSlider('.review-cat-1 #review_cat_slider1').flexslider({
            slideshow: false,
            animation: "slide",              //String: Select your animation type, "fade" or "slide"
            easing: "swing",                 //{NEW} String: Determines the easing method used in $jqSlider transitions. $jqSlider easing plugin is supported!
            direction: "horizontal"            // String: Select the sliding direction, "" or "vertical"
        });
    }

    // Footer Sliders
    if (isSliderExist('.span3 #widget_span3_slider1') > 0) {
        $jqSlider('.span3 #widget_span3_slider1').flexslider({
            slideshow: false,
            animation: "slide"
        });
    }

    if (isSliderExist('.span3 #widget_span3_slider2') > 0) {
        $jqSlider('.span3 #widget_span3_slider2').flexslider({
            slideshow: false,
            animation: "slide"
        });
    }

    if (isSliderExist('.cat-related-news #related_posts_slider') > 0) {
        $jqSlider('.cat-related-news #related_posts_slider').flexslider({
            slideshow: false,
            animation: "slide"
        });
    }
});

$ = jQuery.noConflict();

//Breaking News
$jqBreakingNews = jQuery.noConflict(); //create the ($jqBreakingNews) variable with no conflict
$jqBreakingNews(document).ready(function () {
    $jqBreakingNews('#js-news').bticker({
        speed: 0.07,
        ajaxFeed: false,
        feedUrl: '',      //Test > http://feeds.bbci.co.uk/news/world/rss.xml
        feedType: 'xml',
        displayType: 'reveal',
        htmlFeed: true,
        debugMode: true,
        controls: false,
        titleText: '',
        direction: 'ltr',
        pauseOnItems: 5000,
        fadeInSpeed: 600,
        fadeOutSpeed: 300
    });

});
$ = jQuery.noConflict(); //restore the $ symbol

// Fixed Navigation Menu
$jqFixedNav = jQuery.noConflict();
$jqFixedNav(document).ready(function () {

    var headerHeight = $jqFixedNav('.navbar-main').offset().top;
    var main = $jqFixedNav('.enable-fixed');

    $jqFixedNav(window).scroll(function () {
        HeaderScroll();
    });
    $jqFixedNav(window).load(function () {
        HeaderScroll();
    });

    //function HeaderScroll() {
      //  var scrollY = $jqFixedNav(window).scrollTop();
        //if (main.length > 0) {
          //  if (scrollY > headerHeight + 75) {
            //    main.stop().addClass('navbar-fixed-top');
            //} else if (scrollY < headerHeight + 75) {
              //  main.removeClass('navbar-fixed-top');
            //}
        //}
    //}

});
$ = jQuery.noConflict();


// Tooltip
$(function () {
    $("[rel='tooltip']").tooltip();
});

$jqTweets = jQuery.noConflict();
$jqTweets(function ($) {
    $jqTweets("#divLatestTweets").tweet({
        username: "envato",
        page: 1,
        avatar_size: 32,
        count: 20,
        loading_text: "loading ..."
    }).bind("loaded", function () {
        var ul = $(this).find(".tweet_list");
        var ticker = function () {
            setTimeout(function () {
                var top = ul.position().top;
                var h = ul.height();
                var incr = (h / ul.children().length);
                var newTop = top - incr;
                if (h + newTop <= 0) newTop = 0;
                ul.animate({ top: newTop }, 500);
                ticker();
            }, 5000);
        };
        ticker();
    });
});
$ = jQuery.noConflict();


