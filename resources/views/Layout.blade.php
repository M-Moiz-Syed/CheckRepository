<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <!-- TITLE -->
    <title>Travas</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,400italic,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css"  href="{{ URL::asset('css/lib/bootstrap.min.css') }}" >
    <link rel="stylesheet" type="text/css"  href="{{ URL::asset('css/lib/font-awesome.min.css') }}" >
    <link rel="stylesheet" type="text/css"  href="{{ URL::asset('css/lib/awe-booking-font.css') }}" >
    <link rel="stylesheet" type="text/css"  href="{{ URL::asset('css/lib/owl.carousel.css') }}" >
    <link rel="stylesheet" type="text/css"  href="{{ URL::asset('css/lib/jquery-ui.css') }}" >

    <!-- REVOLUTION DEMO -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('revslider-demo/css/settings.css') }}" >


    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/demo.css') }}" >

    <!-- CSS COLOR -->
    <link id="colorreplace" rel="stylesheet" type="text/css" href="{{ URL::asset('css/colors/blue.css') }}" >

    {{--<!--[if lt IE 9]>--}}
    {{--<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>--}}
    {{--<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>--}}
    {{--<![endif]-->--}}

    {{--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">--}}

    {{--<title>My Website</title>--}}
    {{--<link rel="stylesheet" href="{{ URL::asset('css/shared.css') }}" />--}}
</head>
<body>

{{--<div id="page-wrap">--}}
    {{--<!-- PRELOADER -->--}}
    {{--<div class="preloader"></div>--}}
    {{--<!-- END / PRELOADER -->--}}
{{--</div>--}}

<div class="header">
    @include("Header")
</div>
<div class="content">
    @yield("content")
</div>
<div class="footer">
    @include("Footer")
</div>

<!-- LOAD JQUERY -->
<script type="text/javascript" src="{{ URL::asset('js/lib/jquery-1.11.2.min.js') }}" ></script>
<script type="text/javascript" src="{{ URL::asset('js/lib/masonry.pkgd.min.js') }}" ></script>
<script type="text/javascript" src="{{ URL::asset('js/lib/jquery.parallax-1.1.3.js') }}" ></script>
<script type="text/javascript" src="{{ URL::asset('js/lib/jquery.owl.carousel.js') }}" ></script>
<script type="text/javascript" src="{{ URL::asset('js/lib/theia-sticky-sidebar.js') }}" ></script>
<script type='text/javascript' src="{{ URL::asset('js/lib/jquery-ui.js') }}" ></script>
<script type="text/javascript" src="{{ URL::asset('js/scripts.js') }}" ></script>

<!-- REVOLUTION DEMO -->
<script type="text/javascript" src="{{ URL::asset('revslider-demo/js/jquery.themepunch.revolution.min.js') }}" ></script>
<script type="text/javascript" src="{{ URL::asset('revslider-demo/js/jquery.themepunch.tools.min.js') }}" ></script>
<script type="text/javascript">
    if($('#slider-revolution').length) {
        $('#slider-revolution').show().revolution({
            ottedOverlay:"none",
            delay:10000,
            startwidth:1600,
            startheight:650,
            hideThumbs:200,

            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,


            simplifyAll:"off",

            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview4",

            touchenabled:"on",
            onHoverStop:"on",
            nextSlideOnWindowFocus:"off",

            swipe_threshold: 0.7,
            swipe_min_touches: 1,
            drag_block_vertical: false,

            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[7,4,3,2,5,4,3,2,1,0],


            keyboardNavigation:"off",

            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,

            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,

            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,

            shadow:0,
            fullWidth:"on",
            fullScreen:"off",

            spinner:"spinner2",

            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,

            shuffle:"off",

            autoHeight:"off",
            forceFullWidth:"off",



            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,

            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0
        });
    }
</script>
</body>
</html>