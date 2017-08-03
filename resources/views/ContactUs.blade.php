@extends("layout")

@section("content")
        <!--main-->
<div class="main" role="main">

    <div class="wrap clearfix">
        <!--main content-->
        <div class="content clearfix">
            <!--breadcrumbs-->
            <nav role="navigation" class="breadcrumbs clearfix">
                <!--crumbs-->
                <ul class="crumbs">
                    <li><a href="http://www.tourplanner.pk/Home" title="Home">Home</a></li>
                    <li>Contact us</li>
                </ul>
                <!--//crumbs-->
            </nav>
            <!--//breadcrumbs-->
            <!--three-fourth content-->
            <section class="three-fourth">
                <h1>Contact us</h1>
                <!--map-->
                <div class="map-wrap">
                    <div class="gmap" id="map_canvas" style="position: relative; overflow: hidden;">
                        <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                            <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                <div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;">
                                    <div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                    <div style="width: 256px; height: 256px; position: absolute; left: 202px; top: 17px;">

                                                    </div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: 202px; top: 273px;">

                                                    </div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: 458px; top: 17px;">

                                                    </div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: 458px; top: 273px;">

                                                    </div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: -54px; top: 17px;">

                                                    </div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: 202px; top: 529px;">

                                                    </div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: -54px; top: 273px;">

                                                    </div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: 458px; top: -239px;">

                                                    </div>
                                                    <div style="width: 256px; height: 256px; position: absolute; left: 202px; top: -239px;">

                                                    </div><div style="width: 256px; height: 256px; position: absolute; left: 458px; top: 529px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 714px; top: 17px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 714px; top: 273px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 714px; top: -239px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -54px; top: -239px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -54px; top: 529px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 714px; top: 529px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 202px; top: 17px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 202px; top: 273px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 458px; top: 17px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 458px; top: 273px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -54px; top: 17px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 202px; top: 529px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -54px; top: 273px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 458px; top: -239px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 202px; top: -239px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 458px; top: 529px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 714px; top: 17px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 714px; top: 273px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 714px; top: -239px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -54px; top: -239px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -54px; top: 529px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 714px; top: 529px;"></div></div></div><div style="width: 22px; height: 40px; overflow: hidden; position: absolute; left: 401px; top: 235px; z-index: 275;"><img src="./ContactUs_files/spotlight-poi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: 202px; top: 17px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 202px; top: 273px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt(1)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 458px; top: 17px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt(2)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 458px; top: 273px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt(3)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -54px; top: 17px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt(4)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -54px; top: 273px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt(5)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 458px; top: -239px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt(6)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 202px; top: -239px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt(7)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 714px; top: 17px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt(8)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 714px; top: -239px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt(9)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 202px; top: 529px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt(10)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 458px; top: 529px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt(11)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 714px; top: 273px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt(12)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 714px; top: 529px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt(13)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -54px; top: -239px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt(14)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -54px; top: 529px; transition: opacity 200ms ease-out;"><img src="./ContactUs_files/vt(15)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div></div><div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div class="gmnoprint" style="width: 22px; height: 40px; overflow: hidden; position: absolute; opacity: 0.01; left: 401px; top: 235px; z-index: 275;"><img src="./ContactUs_files/spotlight-poi.png" draggable="false" usemap="#gmimap0" style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"><map name="gmimap0" id="gmimap0"><area href="javascript:void(0)" log="miw" coords="8,0,5,1,4,2,3,3,2,4,2,5,1,6,1,7,0,8,0,14,1,15,1,16,2,17,2,18,3,19,3,20,4,21,5,22,5,23,6,24,7,25,7,27,8,28,8,29,9,30,9,33,10,34,10,40,11,40,11,34,12,33,12,30,13,29,13,28,14,27,14,25,15,24,16,23,16,22,17,21,18,20,18,19,19,18,19,17,20,16,20,15,21,14,21,8,20,7,20,6,19,5,19,4,18,3,17,2,16,1,14,1,13,0,8,0" shape="poly" title="" style="cursor: pointer;"></map></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"><div class="infoBox" style="position: absolute; visibility: visible; width: 200px; left: 272.412px; top: 274.804px;"><div><strong>Tour Planner</strong><br>Office # 4, 9th Floor Arfa Tower, Lahore, Pakistan</div></div></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=31.475458,74.342526&amp;z=15&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="./ContactUs_files/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 262px; top: 185px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2017 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="./ContactUs_files/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 167px; bottom: 0px; width: 121px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span style="">Map data ©2017 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2017 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 96px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="./ContactUs_files/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@31.475458,74.342526,15z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; user-select: none; position: absolute; bottom: 107px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><div title="Zoom in" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./ContactUs_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><div title="Zoom out" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./ContactUs_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px;"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="./ContactUs_files/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Pegman is on top of the Map" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="./ContactUs_files/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="./ContactUs_files/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img src="./ContactUs_files/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="./ContactUs_files/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show street map" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 21px; font-weight: 500;">Map</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 28px; text-align: left; display: none;"><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="./ContactUs_files/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show satellite imagery" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-left: 0px; min-width: 39px;">Satellite</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 29px; text-align: left; display: none;"><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="./ContactUs_files/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div></div></div>
                </div>
                <!--//map-->
            </section>
            <!--three-fourth content-->
            <!--sidebar-->
            <aside class="right-sidebar lower">
                <!--contact form-->
                <article class="default">
                    <h2>Send us a message</h2>

                    <form action="http://www.tourplanner.pk/ContactUs" method="post">                        <fieldset>
                            <p>
                            </p>
                            <div class="f-item active">
                                <label for="name">Your name</label>
                                <input type="text" id="name" name="name" value="" required="required">
                            </div>
                            <div class="f-item">
                                <label for="email">Your e-mail</label>
                                <input type="email" id="EmailAddress" name="EmailAddress" value="" required="required">
                            </div>
                            <div class="f-item">
                                <label for="ContactNumber">Your phone</label>
                                <input type="text" id="ContactNumber" name="ContactNumber" value="" required="required">
                            </div>
                            <div class="f-item">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" value="" required="required">
                            </div>
                            <div class="f-item">
                                <label for="message">Your message</label>
                                <textarea id="message" name="message" rows="10" cols="10"></textarea>
                            </div>
                            <input type="submit" value="Send Email" id="submit" name="btsend" class="gradient-button">
                        </fieldset>
                    </form>
                </article>
                <!--//contact form-->
                <!--contact info-->
                <article class="default">
                    <h2>Or contact us directly</h2>
                    <p class="phone-green">+92 - 331 - 8483 - 626</p>
                    <p class="email-green"><a href="http://www.tourplanner.pk/ContactUs">info@tourplanner.pk</a></p>
                    <div class="tags">
                        <ul>
                            <li><a href="http://www.tourplanner.pk/make-my-trip" title="Make My Trip">Make My Trip</a></li>



                        </ul>
                    </div>
                </article>

                <article class="default clearfix">



                    <a target="_blank" href="https://www.facebook.com/Tourplanner.pk/reviews"><h2 itemprop="name" style="color: #5FC8C2;">Facebook Reviews </h2></a>
                    <div style=" height: 480px; overflow-x: hidden;overflow-y: auto; padding-right: 25px; ">
                        <ul class="popular-hotels">
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Haseeb Saied
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> Altogether it was the great and pleasant experience with TPPK. They arranged good hotels and you remain free from all issues.They have best collection of tour guide ... our tour guide Shaheryar Shah was excellent , courteous and become instrumental in making our trip memorable. I have recommended TPPK  to many friends and family members.</p>
                                    <p>
                        <span class="price">
                            <small>

                                03 July 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Sara Khan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> They were the first planners i went to when v decided to visit Hunza..and after going through quite a few..ended up being the last ones i went back to and booked through.

                                        Overall an awesome experience...very cordial..gave me complete lists of places, hotels, driving time..bascially were there for any query at hand before and during the tour.

                                        Our driver was Zahid...and the best thing about him was that he enjoyed being the driver! ...and at times when road times went from minutes to hours and my patience ran thin...he was still smiling and understanding..did not get annoyed ..which i think is commendable.

                                        Overall a recommendable experience and I will be passing along their details to family n friends since the beauty in Pak should be explored!..

                                        Keep up the good work Mr khalid. Was a pleasure.

                                        For all those reading....just be vary that it does take time  so be prepared for traffic clogs (specially on Eid or near 3 big glacier spots right after Naran) and add an extra hour or 2 just to avoid any surprises!
                                        Otherwise...book them and relax for a memorable vacay!</p>
                                    <p>
                        <span class="price">
                            <small>

                                02 July 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Murar G. Mandhan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                02 July 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Amir Lodhi
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I had a wonder full experience of tour of Shogran,Naran and Muzafarabad with tourplanner arranged by Khalid saib.I really enjoyed this tour with my canopy on eid holidays.I  appreciate tourplanner team.</p>
                                    <p>
                        <span class="price">
                            <small>

                                30 June 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Stephanie Edward
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> Very well arranged by tour planner.. had lots of fun, above all it was safe... will plan another tour very soon..</p>
                                    <p>
                        <span class="price">
                            <small>

                                29 June 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ali Hussain
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> It was pleasure working with you guys are client really appreciated your great services ..... keep up the good work .....
                                        from :AXIS TRAVELS AND TOURS</p>
                                    <p>
                        <span class="price">
                            <small>

                                23 May 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ali Raza
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I just completed my tour of  Neelum Valley, Shogran,Naran.
                                        One thing i'll really appreciate, from day first when i called Tour Planner to fix my tour till end i found Mr.Khyaam and Mr.Khalid a very supportive and caring to there client.
                                        Our guide Pervaiz Bhai was a very confident driver and he had a good knowledge of all destinations and he really made our tour memorable.
                                        Thanks to all Tourplanner team and wishing them a successful future ahead.</p>
                                    <p>
                        <span class="price">
                            <small>

                                22 May 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Kamran Haider
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Wow,what a experience.everything was best managed .most appreciable was mr gul faraz, our guide to trip to neelum vally  .he was humble well behaved and courtious .
                                        May you people grow more .you delivered what you comitted .it was absolutely hastle free and fantastic</p>
                                    <p>
                        <span class="price">
                            <small>

                                21 May 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Maha Makhdum
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">1  /5</span>
                                    <p> We booked 2 cottages at Arcadian Shogran. On Saturday 13th May 2017 we decided to go for a hike, on our return everyone went to shower. I went in about an hour later. Once in the bathroom I noticed the windows in the bathrooms have no blinds or covers. However, I thought we were high enough and in a private location so it was safe. Once I got into the shower I randomly got a gut feeling to look out the window, to my horror a man was SITTING IN THE TREE WATCHING! We made eye contact and I screamed. He ran. Once I got out we went to confront them, I found out my friend had also seen him when he was showering. We went to tell the management the men they hired thought what they had done was funny when confronted, the management representatives took no action. My friend had to remove the painter himself.
                                        The manager finally arrives after all events have unfolded and has no remorse for the situation. He also found the situation amusing and only apologized once requested to do so and even then did so with a grin. On top of which he was passing off the blame to his staff and to us for not seeing the painter before. Basically not taking responsibility he throws a broken chair into the bushes instead of replacing it when we politely informed him (picture attached).
                                        Furthermore, after having confirmed the arrangement for a BBQ on site, this was denied on site stating miscommunication between their hotel and head office. After much pleading, BBQ was finally arranged. Eventually the manager, once BBQ had been arranged, stated that he considered all matters concluded. When  informed that the shower situation still needed to be remedied he looked around for support from our group to state otherwise. Ended with offering breakfast which was complimentary anyway.
                                        No exaggeration, the worst experience of my life made worse by the lack of care or understanding or action taken and behaviour by the management about the Peeping pervert.
                                        If anyone wishes to bring their family and wants peace of mind, this is NOT the hotel to bring them.</p>
                                    <p>
                        <span class="price">
                            <small>

                                16 May 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Syed Naqqash Ali
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                13 May 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ifikhar Ahmad
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">1  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                08 May 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Qasim Zafar
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> If you are looking for the Best just contact Tour Planner.</p>
                                    <p>
                        <span class="price">
                            <small>

                                13 April 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Abid Saleem Gandhi
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">3  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                11 April 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Jehangir Ibrahim
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> Hassle free tour from the start till the end.
                                        Every bit of the tour was well organized by Mr Khalid.
                                        The hotels provided were well rated and were much above our expectations.
                                        A tour worth remembering, thanks to Mr Khalid for making it a great vacation for us.
                                        He really has a passion to provide the best services.

                                        I would recommend Tourplanners as the best tour operators.</p>
                                    <p>
                        <span class="price">
                            <small>

                                09 April 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Imran Zaib
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> We were group of 26 people (Family including Kids) We had booked 3 days trip to Neelum Valley through Tourplanner.
                                        They have arranged everything from transportation to hotel to sightseeing.
                                        Overall trip was wonderful and service provided was equally great.</p>
                                    <p>
                        <span class="price">
                            <small>

                                09 April 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Yaseen Hamidia
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> We travel to northern aereas like maree, ayubia, muzafarabad, shugran, Kaghan, the trip was very nice. We enjoyed alot. Mr. Khalid the owner of tourplaner is a nice guy and very cooperative and arranged all the things like hotel transport driver sight seeing etc excellent. I strongly recommend tour Planner.</p>
                                    <p>
                        <span class="price">
                            <small>

                                03 April 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Hammad Afzal
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I had the trip to swat and Kagan, I went to Malam Jabba and some other places like shogran and my trip was planed by tour planner. it was excellent under their plans, (Gulfraz) Guide was very supportive, he was aware of all things like the culture of the areas. I will highly recommend tour planners  if you want to visit anywhere in Pakistan they will give worth to your money.</p>
                                    <p>
                        <span class="price">
                            <small>

                                03 April 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Faizan Sheikh
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                19 March 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Rabia Shaheen
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                19 March 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Umer Rehman
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I had an excellent time because of tourplanner .pk on my five day tour to Kashmir, Balakot and Shogran. It was truly an experience of a life time, full of comfort and adventure... Truly a memory to cherish for a life time... Wonderful! Higly recomended!</p>
                                    <p>
                        <span class="price">
                            <small>

                                16 March 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Mian Nasir Ali
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> This was the first time we planned to visit Murree &amp; Nathia Gali in our life. We thanks that Almighty Allah blessed us #Tour Planner# to see the beauty of Pakistan. Our driver cum guide Mr. Parvez was very co operative and we feel him as a family membe. We enjoyed a lot.
                                        Our firt experience with #Tour Planner# is excellant.
                                        I recommend all friends to get the services of #Tour Planner# whenever they wish to visit the beauty of Pakstan.
                                        Thanks.</p>
                                    <p>
                        <span class="price">
                            <small>

                                16 March 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Maaz Nomani
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Went for my honeymoon in last February to Murree and Kashmir side. It was an awesome experience. We don't have to worry about anything and just enjoyed our time. The driver (Tasweer) was very helpful and cooperative. Hotels in Murree &amp; Muzaffarabad were very good. Overall a wonderful experience. Though its bit expensive but i guess everything has some cost attached and it was worth it. Keep it up!</p>
                                    <p>
                        <span class="price">
                            <small>

                                16 March 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Amir Raja
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Rant a car with driver only xli 2009 model with multimedia and wifi my car available for all pakistan contect me 03455592811</p>
                                    <p>
                        <span class="price">
                            <small>

                                08 March 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Bushra Pervaiz
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Last week, I traveled to explore the beauty of Swat with few of my friends. With the splendid management of Tour Planners, our trip went amazing. Not even a minor mishap happened, Alhamdullilah. Our driver ‘Gulfaraz Khan’ was not only a perfect guide, but also a great caretaker for all of us. Thank you Tour Planners for managing our trip in such a fabulous and perfect way. Tour Planners have been added in my highly recommended list from now :). Kudos to the team for such perfection (Y).</p>
                                    <p>
                        <span class="price">
                            <small>

                                02 March 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Faryal Anwar
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> We recently went to Swat with Tourplanner &amp; i must say it was an amazing experince. The car, driver, hotel &amp; everything else was very managed and cooperative. We had the car and driver all by ourselves and he guided us along the way &amp; also took our pictures :).

                                        Definitely booking them again real soon.</p>
                                    <p>
                        <span class="price">
                            <small>

                                27 February 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Hira Saeed
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> After my recent business trip to Islamabad, my friends and I had our private tour to Swat arranged via Tourplanners. I literally chewed their brain with unlimited emails, calls, and messages and they proved to be thoroughly professional in clarifying all queries.

                                        Everything was great - The car, hotel, and itinerary as well. My all best wishes for Mr. Khayam, Mr. Khalid and our driver Gulfaraz bhai.</p>
                                    <p>
                        <span class="price">
                            <small>

                                27 February 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Anas Bin Ahmad
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> A well managed tour planning services with wonderfully professional and well cooperative staff.</p>
                                    <p>
                        <span class="price">
                            <small>

                                27 February 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Adnan Younus Agar
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I enjoyed my journey with tour planner and will recommend to others.</p>
                                    <p>
                        <span class="price">
                            <small>

                                25 February 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Shahid Hafeez
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Excellent service without any hassle. Very good coaster that was sent to us for my Son's wedding. However driver lacked convey ethics . Over all we were very much satisfied with the service and would highly recommend Tourplanner to anybody wishing a hassle free trip.</p>
                                    <p>
                        <span class="price">
                            <small>

                                22 February 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Khawaja Talha Ahmed
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> It was are first family trip and the experience was awesome. Tourplanners were very cooperative, diligent and professional in their dealings with us.</p>
                                    <p>
                        <span class="price">
                            <small>

                                22 February 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        SK Chua
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> Tour planner's boss or whoever is in charge is extremely good! He called and asked about my welfare everyday, which is very meticulous of him. The tour guide for Islamabad and Lahore was only able to speak abit of English and is not sure of the roads within Lahore city, which took quite bit of time to him to navigate but he is still a good guide overall! The tour guide for Karachi is also good, bringing me to cover almost the whole city. People in Pakistan is friendly and kind and i had a great trip with tour planner pk :)</p>
                                    <p>
                        <span class="price">
                            <small>

                                10 February 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Abdul-Rahman Saeed
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                06 February 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Malik Rehan Khokhar
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                21 January 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ahmad Farooq
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> This was my first experience but it was indeed very good. Now I will be a regular customer. Thanks</p>
                                    <p>
                        <span class="price">
                            <small>

                                20 January 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Asad Lalani
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> They had arranged a 5-day tour for us (Family of five including a five-year child) for Murree, Nathia Gali, Kohala, Nelam Point and so on. The arrangement was good, Driver was very courteous and always ready to assist. Vehicle was well maintained. Our Executive Package include Hotel nights at Blue Pine Resort and that was simple superb at the new year's eve!

                                        We would surely recommend Tourplanner for trip to Beautiful Pakistan!</p>
                                    <p>
                        <span class="price">
                            <small>

                                19 January 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Tamjid Aijazi
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> We booked our 13 day Pakistan tour through Tourplanner. My friend told me about the company and our experience with Tourplanner was really good. We went to Islamabad, Murree and Muzaffarabad in winters, and our main requirement was uninterrupted geysers and heaters in all hotels. Tourplanner arranged hotels for us that met this requirement despite gas and electric load shedding. The driver picked us up from train station in Islamabad and was the guide for us in all these places. Overall it was a superb experience and whenever we get a chance, we will book the tour again with TourPlanner.</p>
                                    <p>
                        <span class="price">
                            <small>

                                12 January 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Faizan Siddiqi
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Could not have asked for a better service. Trip went perfect from beginning to end, thanks to Tour planner. Our driver Iftikhar was great and very helpful.</p>
                                    <p>
                        <span class="price">
                            <small>

                                12 January 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Shaheryar Khan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Very excellent and satisfied trip with tour planner .excellent services ..... And driver of APV MR. IFTIKHAR is very good , honest and careful driver we all are satisfied with his driving also on hills of muree ayubia nathiagali during snow ice . I will always demand him.</p>
                                    <p>
                        <span class="price">
                            <small>

                                12 January 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Faisal Balouch
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Booked 7 days package with wife and 2 kids to muree , kashmeer , abbotabad
                                        Db picture you see in my profile is from that trip
                                        We enjoyed alot driver was gul faraz and he also guided us very well
                                        Hotel rooms are comfortable for entire family
                                        And most important tourplanner packages are very affordable with the facilities they offer</p>
                                    <p>
                        <span class="price">
                            <small>

                                10 January 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Zahid Mansori
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                10 January 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        DrAsad Ali
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Its great time with the team of tourplanner really i enjoyed my honeymoon alot i will say to all please must try tour with tour planner speacially wd families hanks tour planner for make my tour better and specially specially and specially thanks to our driver Tasweer sb he is a great person and help us alot in different places thanks tasweer sab for make our time special.....!!!!</p>
                                    <p>
                        <span class="price">
                            <small>

                                09 January 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Nayyar Jawaid Khan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">2  /5</span>
                                    <p> Going back to UAE with some pleasant memories.Over all experience was good however drivers needs improvement specially when you are driving with the family &amp; kids and should be well aware of the various locations.

                                        Next time when you guys travel please make sure of these two things.


                                        Thanks</p>
                                    <p>
                        <span class="price">
                            <small>

                                03 January 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Adeel Wali
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> Being an accountant I can say that i got my value for the money. On the down side i can say that the tour did not include some of the important locations which could have been included.</p>
                                    <p>
                        <span class="price">
                            <small>

                                02 January 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Mina Rizvi
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Hi all
                                        I reallly thank tour planner to make it happen.
                                        I had 9 days and wanted my trip to b planned. I called these people in the morning to plan it and by the evening i left khi.... picking m up from the daewoo lhr till dropping m bak to the station its was fantabulous..... these people did a great job. And since it was a sudden plan they were very mch open for the changes in betweeen.... without any arguement.....
                                        the amazing hotels, complete tour,24/7 car with m...... it was THE trip i was looking fwd fr after ages and these people made it happen.
                                        The only problem that i faced was lhr hotel which was a bit of a pain h/e that can b ignored against all the wonderful days...
                                        I was bit scared since we were all women and jz a boy kid... but it was planned so nicely that i never felt that i was alone on my own
                                        Good work tour planner..... keep it up.....</p>
                                    <p>
                        <span class="price">
                            <small>

                                02 January 2017
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Anum Rizwan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Dear Tourplanner &amp; Team,

                                        I hope this feedback finds you in good health. Now it's time to share our thoughts after having such a wonderful tour in a very short span of time. We are very proud to say that the services which you guys provided to us were beyond our expectations. Each &amp; every single thing, from Airport Pick Up to Whole Tour to Airport Drop off, all things were organized brilliantly. Even the driver guide was too much supportive. The good thing is we felt secured &amp; safe on the whole tour. Overall, a big thumbs up to you guys, &amp; thank you so much for giving us such memorable memories which will remember for lifetime. I'll rate you guys 10/10.

                                        Remember us in your special prayers.

                                        Much Thanks.

                                        Kind Regards;

                                        Mr. &amp; Mrs. Muhammad Nasar</p>
                                    <p>
                        <span class="price">
                            <small>

                                30 December 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Mohammed Faisal
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Fantastic trip :), tour guide mr. Tasveer was good person but driving quite fast ! Hotel in abbotabad was demanchi which is good but i would suggest mr. Khalid to book executive rooms there inatead of normal rooms. Overall, tourplanner is doing great job and thanks to the whole team for arranging my trip to naran, thandiani a memorable one !!</p>
                                    <p>
                        <span class="price">
                            <small>

                                30 December 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Zaheer Abbas
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                11 December 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Iqbal Ahmed
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> We just planned our tour to different areas of Kashmir , Naran, Kaghan &amp; Murree.
                                        Our driver Mr. Taswar  was such a great and friendly guy. Enjoyed every stage of our tour, Hotels were hygienic as committed.

                                        I appreciate the flexibility we got from Tour Planner according to our Comfort.</p>
                                    <p>
                        <span class="price">
                            <small>

                                30 October 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Subhash K Dawani
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> We booked a family tour starting from Islamabad nd includes muzaffarabad, Naran, Muree, Islamabad nd surroundings. My experience with them was excellent, Mr. Khalid is a seasoned professional, the driver, car, commitments all were bulls eye.
                                        For slightly more from your pocket one is getting excellent convenience of booking everything from one company having enough flexibility.
                                        I highly recommend this company nd will surely going to book my next trip to north through them.</p>
                                    <p>
                        <span class="price">
                            <small>

                                29 October 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Zubair Anwar
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> Availed good plan, schedule, car and professional driver services.
                                        It was value for money.</p>
                                    <p>
                        <span class="price">
                            <small>

                                28 October 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Syed Mubashar Hussain
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Me and my family spent a wonderful time in naran kaghan  tour.                       Mr.Khawaja Khalid (Tour planner) is a nice and very cooperative gentleman who continuously  in touch and managed to accommodate us according to our choice of hotels and facilitated us more then his commitment and up to our entire satisfaction. Driver Abid was well experienced, cooperative and nice guy. Toyota Corolla XLi Car was in excellent condition. we recommend tourplanner to everyone.</p>
                                    <p>
                        <span class="price">
                            <small>

                                25 October 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Syed Mohtashim
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> we just had a two days tour of Naran Kaghan on a very short notice to Mr. Khalid Mushtaq. the arrangements are pretty good and comfortable too. Driver Mr. Babar was gentle person. The stops he took was really good. over all its good.</p>
                                    <p>
                        <span class="price">
                            <small>

                                13 October 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Sohaib Alvi
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> Our trip to Kashmir with Tour Planners was the first we had done through a proper company. I must say that right from the time the driver (throughout courteous, friendly, knowledgeable of area) picked us up in the car they had promised (comfortable, sturdy for the roads, clean and hygienic), it all went like clockwork.

                                        What I liked about Tour Planner was the flexibility that they allowed. We had asked for openness and comfort even if it meant staying in one quiet place. When we got what we had said and felt it wasn't as open as we thought it would be (it was our choice and approved beforehand) our request for fast forwarding the next location was arranged within minutes.

                                        On another occasion we liked the hotel arrangement so much and the location of it that we wanted to stay an extra day; that too was arranged despite a commitment elsewhere.

                                        The point of contact in Tour Planner was never a phone call away. And when the mobile phone signals were inaccessible there was always the landline to which they answered all the time. If messages were left for the person, we always received a call back well in time.

                                        The hotels were wonderful; the owners seemed conscious that we were to be given the courtesy and respect of tired travelers which indicates the good relationship Tour Planner had with the hotel management.

                                        Once we were asked to pay the breakfast bill when in fact the deal included room and breakfast. When we informed them that we were from Tour Planner, they gave us the benefit of doubt even though the receptionist had not written down the breakfast was part of the deal. They said they'll sort it out with Tour Planner but they had been told not to bother guests if they had come from Tour Planner.

                                        I would say that perhaps Tour Planner should have a more detailed briefing from. It would help both them and the tourists. You see, explaining a requirement over phone can be difficult and not every tourist can fully explain what they want.

                                        Overall a very pleasant experience and next time we go vacationing, I would like to go with Tour Planner. We had taken two quotations and they are indeed value for money. When you go on vacation you don't mind paying a little more if you have peace of mind. here I don't think we paid more and yet had tremendous peace of mind.</p>
                                    <p>
                        <span class="price">
                            <small>

                                11 October 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Usman Sajid Sipra
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> Hi all, me and my wife set up a 5 day trip with Tourplanner recently &amp; quite surprising it went very well, Alhamdulillah. At 1st i was confused about transferring online payment to a unknown tour company. But after reading the reviews from the fb, i went in with the risk &amp; the feedback from Mr. Khayam (who managed the whole trip) was superb. Our driver Mr,Adnan was very professional and intelligent driver. His driving skills very very much appreciatable.
                                        Some minor issues with the Hotel deManchi in Naran were the lack of hot water. Other services were excellent &amp; i recommend others as well. Thanks a lot for a lifetime experience !!</p>
                                    <p>
                        <span class="price">
                            <small>

                                10 October 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Fahad Raja
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> Me and my Wife booked 3 days tour to naran through Tourplanner and it was a lifetime experience. We stayed in Demanche Hotel Naran where we had a comfortable stay. There were minor issues but overall stay went good.

                                        We had tour to  Lake saif ul Maluk, Lake lulusar and Babusar pass, We also witnessed surprise snowfall at Babuser Top. Provided convince (Gli Car) and driver (Mr Tasveer) really made tour very comfortable, entertaining and enjoyable. However, driving of driver was much fast ...

                                        Overall we recommend Tourplanner to others to have a great trip in affordable cost.</p>
                                    <p>
                        <span class="price">
                            <small>

                                08 October 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Muhammad Faisal Wadiwala
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> i booked with tour planner for muree naran and shogran tour. It was very comfortable and pleasant tour.hoteling and travel logistics were good. I recomend it esp for families as its convenient, reliable  and safe.</p>
                                    <p>
                        <span class="price">
                            <small>

                                07 October 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Sohaib Jamil
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> My Experience was very exotic will definitely use the service for my trips</p>
                                    <p>
                        <span class="price">
                            <small>

                                07 October 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Taha Kamal
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> So i and family used tourplanner for our trip of 6days for Naran,Kaghan and Murree. Although a short trip with whole lot of hustle to do, the driver, the hotels and the tourplanner itself never had us feeling away from our family or our home. The tourplanner was very willing to make changes to anything that we weren't comfortable with either it be the hotels or the service s, without any if's or but's. I will recommend this to everyone who  is looking forward for a great comfy trip.</p>
                                    <p>
                        <span class="price">
                            <small>

                                07 October 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Hashim Khan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Hello, friend's i hope you all doing well. I wanna say tourplanner is awsome.... Me &amp; my Wife booked 5 days 4 night Neelum Valley Tour from tour planner  Everything done by telephonic , Email and whatsapp conversation and i booked my tour very easily.
                                        Our driver Ramiz bhai was very polite and cooperative person. Our journey started from Lahore upto Kashmir neelum valley.
                                        Muzafrabad Royal Continental Hotel was awsome. Sharda Valley trackers hotel superb view and nice rooms.
                                        Thanks to Mr.khalid for over all coordination during our tour. Even i change my plan at the end and stay muree. Mr.Khalid make it very easy and Spring lodge muree was awsome.
                                        My first experience with tour planner was awsome. i will 100? use there service in future and i will recommend other people as well.</p>
                                    <p>
                        <span class="price">
                            <small>

                                04 October 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Taimoor Khalid
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> We took a package of Neelum Valley for 4N/5D in Sept 2016. I was my first experience with you and I must say I am impressed as everything was superb and we enjoyed our tour very much.</p>
                                    <p>
                        <span class="price">
                            <small>

                                04 October 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Zeeshan Iqbal
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I started my trip with my wife and kid from Islamabad on 18 Sep 2016 from Islamabad. Mr. Gulfaraz (Driver / Guide) assist us during trip. Our Trip was awesome and Mr. Khalid also help us to explore more. I personally recommend tour planner for your family trip. Mr. Khalid I would like to thanks and appreciate your effort and help.

                                        And Special thanks to Mr. Gulfaraz (Please convey my regards to him)

                                        Thanks Tour Planner to make my trip memorable.

                                        Regards

                                        Zeeshan Iqbal</p>
                                    <p>
                        <span class="price">
                            <small>

                                27 September 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Saqlain Muhammad
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> We booked 3 nights tour to Naran, babusar It was awesome experience. experienced driver(Asif bhai) with good knowledge of roads, places and local culture. Accomodition &amp; transport arrangements was very good and timely

                                        Its value for money</p>
                                    <p>
                        <span class="price">
                            <small>

                                25 September 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Dil Jan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">1  /5</span>
                                    <p> I love u</p>
                                    <p>
                        <span class="price">
                            <small>

                                17 September 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Faisal Jawad Shaukat
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> i booked 4 days and 3 nights package for NARAN &amp; Shugaran which was well planned and on time by tour planner's team. i was litter bit hesitant in the beginning because i made this deal online but after start up of trip and dealing with driver Mr. Tasweer, i was very comfortable. The hotel stay in NARAN was very good with big room and all other services but hotel in Shogaran was below  the standard like (old furniture/ water leakage in washroom and no hot water) pls try to change it. overall experience was very good and thanks to tour planner's team who made this trip memorable for us.</p>
                                    <p>
                        <span class="price">
                            <small>

                                17 September 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Faisal Awan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> We booked 4 days / 3 nights tour of Naran during the first week of Sept 2016.It was a wonderful experience visiting Naran with tourplanner. Everything is well organized and their driver Mr. Danish was a professional fellow with complete knowledge of the area.</p>
                                    <p>
                        <span class="price">
                            <small>

                                15 September 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Akmal Hussain
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I booked for 4 days package my experience with them was out class their coperation guidelines all very nice</p>
                                    <p>
                        <span class="price">
                            <small>

                                15 September 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Wali Ullah
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                11 September 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Asif Khan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                03 September 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ahmad Shafi Choksy
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> We hired car through TourPlanner for 11 days. Mr. Khalid was very helpful and friendly . Driver Mr Tasweer was very nice guy. He was very friendly with us and our children .He guided us throughout the tour to Murree Bhurban Patraita Nathiagali Naran Kagan .Car was well maintained and comfortable.I would highly recommend Tour Planners for arranging future travel plans.</p>
                                    <p>
                        <span class="price">
                            <small>

                                01 September 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Misbah Ilyas
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                28 August 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Hammad Khan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I was planning for months and I am lucky to planned my tour with them. Mr Khalid organised every thing perfectly, besides that I am more lucky (ALHAMDULILLAH) to have Parvez as our Guide/Driver he made our trip the best he knows every thing about the area, food, stay points for photography... Thanks again brother Khalid and brother Pervez.</p>
                                    <p>
                        <span class="price">
                            <small>

                                14 August 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Qazi Adeel
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                14 August 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Haroon Toor
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> So here it goes...we booked a 7 days 6 nights tour starting from Islamabad till Hunza and back to Islamabad. Details r as below:
                                        Started from Islamabad till Naraan (night stay)
                                        From Naran to Hunza  via Gilgit (3 nights)
                                        HUnza to Gilgit (night stay)
                                        Gilgit to Shogran (night stay)
                                        Finally back to Islamabad.
                                        I must say it was a very well organized and planned trip. Initially Naran and Shogran night stays were not included but thanks to Tour Planner guys for making this modification (from initial plan that was for Chillas night stays). Both the guys (Khalid and Farhad) were continous in touch with us to make sure trip is going good as planned. Very cooperative and nice guys and the most important thing, they are not GREEDY at all unlike many other touring companies in Pakistan. Well done guys and would love to plan another trip via Tour Planner in future.  And also to mention about our driver Adnan who was a young and enthusiastic driver and very carefully drove the car in all areas.</p>
                                    <p>
                        <span class="price">
                            <small>

                                11 August 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Arsalan Ghani
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Good company to deal with - managed my trip arrangements from start to finish very efficiently and saved me from all the hassles of hotel bookings, tour planning and transport. Will definitely recommend to others!</p>
                                    <p>
                        <span class="price">
                            <small>

                                11 August 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Salim Urs
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> The driver Mr.Tasvir Bukhary was very cooperative and a good family man enjoyed his company. Some Hotels were satisfactory not meeting our expectations. Overall had a good time.</p>
                                    <p>
                        <span class="price">
                            <small>

                                04 August 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ayesha Matloob
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> last week we visited northern areas arranged by tour planner. It was overall good experience. I strongly recommend others to take their services.</p>
                                    <p>
                        <span class="price">
                            <small>

                                01 August 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Qurat Bilal
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I arranged 6Days/5Nights Tour for AJK, Muzzaffarabad, Kel, Keran, Kuttan, Murree, Ayubia and Nathiagali. It was really helpful, though it wasn't mine, and i didn't travel but it was an excellent one and really helpful. I arranged for my company that was really being appreciated.</p>
                                    <p>
                        <span class="price">
                            <small>

                                01 August 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Naveed Ali
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> excellent service....reasonable package..driver pervaiz was a good tour guider as wel.I want to recommmand people to go through tourplanner service.THANKS TOURPLANNER.</p>
                                    <p>
                        <span class="price">
                            <small>

                                27 July 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ozan Hasan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Best hassle free experience ever!
                                        My family and i loved it. Grey Wall Resorts was Amazing!
                                        Our Driver/Guide Mr. Pervaiz was an excellent driver and guide who drove carefully and wasn't disturbed by the excitement of my two little ones playing and fighting in the car.
                                        Will highly recommend Tourplanner. to anyone looking for a hassle free vacation.
                                        Great Job Mr. Farhad! You have my thanks! Next year Skardu (Y) :)</p>
                                    <p>
                        <span class="price">
                            <small>

                                27 July 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ehsan Shahrukh
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">3  /5</span>
                                    <p> Took a package of Neelum Valley for 4N/5D in July 2016.  Overall a good experience. Things which were committed by Mr. Khalid Mushtaq prior to the visit were all provided during the visit. Driver Mr. Husnain kept good care of us throughout the tour. Hotel at Keran (Green Village) was very good however hotel at Sharda (Kashmir Lodge) was below average. Overall it was a gud experience. However a suggestion to Mr. Khalid is that he should physically visit the area himself and look for other hotel options in the Neelum Valley. There are  a number of other better rental options available in the valley.</p>
                                    <p>
                        <span class="price">
                            <small>

                                25 July 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Kazim Raza
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">3  /5</span>
                                    <p> I had booked a 7 days 6 nights trip for nathiagali murree. The vehicle and driver shafqat are so nice.shafaqt is very punctual and very calm natured driver. In murree the hotel standard is not so good enough. Howerer over all trip is so memorable.</p>
                                    <p>
                        <span class="price">
                            <small>

                                21 July 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Prince Faisal Nizami
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> In short.... A very well executed holidays with perfection....!

                                        Credit goes to Mr. Khalid, farhad and our companion driving expert Pervaiz.

                                        A promise to my mom and my family got a perfect reply from their smiles and thanks to all the team members of tour planner to get it accomplished....!

                                        A highly recommended partner for the best holidays planning.

                                        Good job tour planner.... My promise to come back next year ....!!!!!</p>
                                    <p>
                        <span class="price">
                            <small>

                                21 July 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Iqra Ahmad
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> We booked a 3 day 2 night trip to naran. Everything was good from contacting the staff to payments, from travelling to sight seeing.  Our driver shujaat was really good as well.  Had some problem with the hotel stay but that was resolved.  Overall a great experience with u ppl.  Wil definitely travel again but here are a few suggestions

                                        1. Food voucher shoulde be included because breakfast payment was an issue at the hotel.  Had to pay for it separately.

                                        2. Its good that the tour is flexible but a proper itinerary should be given.

                                        3. Kindly change the pine hills hotel from ur list. Its not recommended at all.</p>
                                    <p>
                        <span class="price">
                            <small>

                                18 July 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Zeeshan Qureshi
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> I booked 5 days 4 night Shogran &gt; Siripaye &gt; Naran &gt; Saiful Malook &gt; Lulusar &gt; Babusar Top in mid of july the experience was good little hassle in start then everything sort out perfectly driver Naeem was good.</p>
                                    <p>
                        <span class="price">
                            <small>

                                18 July 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Shabahat Bokhari
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> We booked a 4-Day, 3-Night trip for Naran-Babusur-Saiful Maluk with Tour Planner on Eid holidays. The experience was amazing, the driver Fida was knowledgeable about the surroundings and helped us a lot to see places we didn't know about.
                                        First 2 nights were in Parhena Cottages short of Naran, amazing views and great hospitality, highly recommended. Last night stay was in Centurian Hotel Naran City, too noisy, staff un-supportive, in-dining not allowed and washrooms leaking. Though the hotel was newly built but not recommended.

                                        Infact any place in Naran city is not recommended if you want to enjoy the serene environment. Stay outside the city, Arcadian Resort is another good choice.

                                        Service by Tour Planner is highly recommended, you will feel right at home, refreshed and raring to go every morning. Thanks for the experience, will definitely try again.</p>
                                    <p>
                        <span class="price">
                            <small>

                                17 July 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Sajid Hanif
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> It was an excellent experience withTour Planner. In start I was bit hesitant to deal with an online company in Pakistan. I booked a 5 day 4 night trip to Naran Siful Malook, Lulosar lake, Babusar top and Shogran with Sri Paye. Mr. Faraz was our main contact who arranged and organized the trip and pleasantly modified our booking on ourreuested dates.
                                        The start was not good as our driver shoukat came late bu then he explained the reason of heavy traffic from Mansehra due to eid holidays.  We started our trip from Rawalpindi due to eid holidays rushwe reached to Naran in 14 hours. But it was nothing to do with Tour planner. Driver was also very friendly and responsible.  Overall I am very happy and satisfied with their services and it was full return of my investment. I will surely recommend them for any trip arrangements.</p>
                                    <p>
                        <span class="price">
                            <small>

                                16 July 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Muhammad Farhan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                14 July 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Syedhashaam Nasir
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Dear tour planners thank-you very much for managing such a wonderful trip to naran valley the hotel millinium was outstanding and it was a memorable trip of our family and it was very well managed and planned trip from your side thanks</p>
                                    <p>
                        <span class="price">
                            <small>

                                10 July 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Waseem Ashraf
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">1  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                07 July 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Noman Nomi
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                07 July 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Muhammad Yousuf Muhammad Nafees
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                05 July 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        S Saqib Mahmood
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                26 June 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Kashan Yaqoob
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">2  /5</span>
                                    <p> It was an ok experience. Could have been much better...</p>
                                    <p>
                        <span class="price">
                            <small>

                                15 June 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Anam Bhatti
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Tourplanner is indeed the best in Pakistan's travel industry! Our day trip to mushkpuri and nathiagali was an unforgettable experience.Thanks to Mr Khalids recommendations and guidance throughout the trip!</p>
                                    <p>
                        <span class="price">
                            <small>

                                11 June 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Mariam Zia
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> As we wanted a very special trip for our honeymoon, after much research and a rather skeptical approach, we booked a 10 day/9 nights honeymoon package to Skardu with Tourplanner. And we are very glad that we did. Suffice it to say that we'd recommend them with eyes closed. The planning was seamless and we did not have any problems despite the fact that we kept shifting our plans and changing our bookings. Mr. Khalid went to every length to accommodate us to his best ability. Thank you for a lovely trip!</p>
                                    <p>
                        <span class="price">
                            <small>

                                11 June 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Anam Arif
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> We planned a 5 days trip to Naran with tour Planners n believe me it was flawless. Starting from our stay in Islamabad,our driver Mr Tasveer who was n true professional, n then reaching to our dream land Naran everything was planned very well.All the hotel rooms which were booked for us were so neat n clean. Not for a second we doubt on our decision of booking our trip with u guys. Definitely I will recommend every one who want to go on pakistan trip to take help from u guys. Keep up the good work.</p>
                                    <p>
                        <span class="price">
                            <small>

                                09 June 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Mirza Nasir Baig
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                07 June 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Orange Real Estatess
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> It was my 1st tour/Booking with Tourplanner. I booked 3Nights/4Days tour for Naran/Kaghan and Shogran Valley. Frankly I was not comfortable while booking the tour with tour operator, But amazingly it was brilliant experience. I am impressed with Khalid Sb,s arrangements all over. Everything was arranged well in time including Car, Hotel Bookings and Jeep arrangements. I did few changes in the tour as well which were managed efficiently. Insha Allah I will book the tours again and again after such a great experience.
                                        I definitely and strongly recommend TourPlanner</p>
                                    <p>
                        <span class="price">
                            <small>

                                07 June 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Humaira Abbasi
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> i organized my university trip to toli peer .thanks alot tour planner for your cooperation throughout . we enjoyed alot. place was like heaven on earth (Y)</p>
                                    <p>
                        <span class="price">
                            <small>

                                03 June 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Muhammad Fahad
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> Had loads of fun, The Driver was good and hotels were also good</p>
                                    <p>
                        <span class="price">
                            <small>

                                01 June 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ejaz Hasnain
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> My Family and I booked a 5 day tour to Murree hills and adjoining heights. The whole program was wonder full and refreshing. Not to mention the plan was well planned by Khalid and the driver (MUDDASSIR) was a thorough gentlemen a true family man! He knew the places like an expert guide and is a very safe driver. The trip was worth its price! and we look forward to making more programs with Tour planner. Keep it up KHALID.</p>
                                    <p>
                        <span class="price">
                            <small>

                                01 June 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Saad Aslam
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> I booked the tour with tourplanner for Kaghan- Naran for 4 nights &amp; 5 days and I am glad that i took the right decision. Mr. Farhad and Mr. Khalid both are very cooperative and everything that was decided was provided. They helped me to plan the trip and utilize the days. The car was in excellent condition and the driver Gulfraz was very humble and knew everything about the entire area.
                                        Overall and excellent experience and will definitely plan another trip soon.</p>
                                    <p>
                        <span class="price">
                            <small>

                                31 May 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ambreen Khalid
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                27 May 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Aysha Ehsan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> We booked car with tour planner for 6 days for a trip to kashmir and murree. We felt very comfortable throughout our trip. The car was well maintained with all the days planned. Mr.Khalid helped us a lot in planning  the same. Our driver(Fida) was Ok. We changed a bit of our plan on the 4th day for which we were charged extra. Our whole trip was very comfortable and hasle free starting from our pick from the airport to drop at the airport. We definately would recommend tour planner to all :)
                                        Regards
                                        Mr&amp;Mrs Ehsan</p>
                                    <p>
                        <span class="price">
                            <small>

                                26 May 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Muhammad Arif Rana
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I booked a 6 Days / 5 Nights Murree Nathiagali &amp; Muzaffarbad Neelum Valley AJK tour with TourPlanner. My experience with Mr. Khalid and our driver cum guide Fida was excellent. Fida Bhai was very punctual &amp; knows almost everything about the areas were we traveled. He showed us all the worth visiting places during our travel. Car was comfortable.
                                        All the Hotels where we stayed were very good &amp; Hotel Staff was very courteous too.

                                        Overall an excellent experience.

                                        I would highly recommend Tourplanner to people who are looking for family trips with everything arranged, so they can only enjoy their traveling.</p>
                                    <p>
                        <span class="price">
                            <small>

                                17 May 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Sana Hassaan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                10 May 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Muhammad Furqan Khan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> We booked a four days tour with tourplanner for Murree/Abbottabad/Balakot. I had my own arrangements for stay but the trip was planned by Mr. Khalid. He provided us a comfortable car and an excellent driver cum guide Gulfraz who was very helpful throughout the trip. Highly recommended for families and all those who want to enjoy a care free trip with excellent customer satisfaction service.</p>
                                    <p>
                        <span class="price">
                            <small>

                                08 May 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Haseeb Ahmad
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Tourplanner dot pk = peace of mind
                                        Booking our 4 day trip to Nathiagali with tourplanner dot pk was the best choice. Mr. Khalid arranged the whole trip very nicely. Throughout the whole trip I was at peace of mind from all the hassles of hotel bookings and travelling.  The drive plus guide Mr. Tasveer Bukhari is a nice and very decent person, he made our trip great. He showed nice locations and stopped wherever a nice picture could be taken. I highly recommend tourplanner dot pk for your trip, it is a great choice for first timers.</p>
                                    <p>
                        <span class="price">
                            <small>

                                29 April 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Owais Shah
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Impressed with their services. Awesome Experience. Mr. Khalid and his team know what they are doing. Specially Driver (Gul Faraz) was extremely professional and friendly.</p>
                                    <p>
                        <span class="price">
                            <small>

                                29 April 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Blessing Eyes
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                26 April 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Adeel Yousaf
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> We booked a 5 dayand 4 nights  tour to Muzzaferabad, AJK (Neelam Valley). The experience was just Awsoem . The organizer Mr Khalid is a very professional and V guy. He was helpful till the end of our trip, keeping update of our locations and helping out in any way he could There was a some change in plans from his  side The last minute change from Muzzaferrabad to Rawalpindi  – Murree was accommodated without any hesitation.
                                        Despite all the changes we made he remained completely calm and wasn't irritated at all. I would definitely recommend Muzzaferabad and Neelum Valley to all.</p>
                                    <p>
                        <span class="price">
                            <small>

                                23 April 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ali Raza
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I booked a 5 days tour with tourplanner. The experience was great. Mr khalid is a true gentleman who arranged the tour in a flawless manner. Our driver cum guide "tasweer" was also very couteous and professional. I definitely recommend tourplanner to every1.</p>
                                    <p>
                        <span class="price">
                            <small>

                                30 March 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Laura Ruiz Diaz
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> My sister and I booked a 4 day trip to Islamabad, Murree and Nathiagali. Everything worked perfectly! Our driver/guide (Imran) was extremely punctual, and he was extremely helpful. Khalid was always checking on us, making sure we've reached our destination and if we needed any kind of support!. The car was comfortable, Imran was always checking if we needed stops (or pictures!) and the structure of the tour worked fine. Hotels were fine, the one in Islamabad has excellent service ( Apex guest House).

                                        Overall, an excellent experience and would recommend it for persons looking to have everything arranged.</p>
                                    <p>
                        <span class="price">
                            <small>

                                27 March 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Hammad Shahid
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Great experience with Tourplanner , all the arrangements were perfect and everything went smooth. Would definitely recommend.</p>
                                    <p>
                        <span class="price">
                            <small>

                                18 March 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Nabeel Naseer
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> We booked a 4 days Swat tour with tourplanner... And I must say the whole experience was flawless. Mr. Khalid is a true gentleman and I didn't need to do a lot to get my tour reservation in place. We also did a last minute Islamabad reservation with them for 1 day and that too was accommodated very easily by Mr. Khalid. The hotel, Car, driver and everything else required for the tour was all arranged perfectly. Our driver/guide Mr. Tasweer bukhari was excellent and was very well mannered and very punctual as well. I would highly recommend tourplanner to anyone wishing to travel anywhere to Pakistan. Keep up the good work.</p>
                                    <p>
                        <span class="price">
                            <small>

                                13 March 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ahsan Ali
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Fabulous services... I admire tour planner and appreciate from core of heart.. Wish you best of luck   in future...</p>
                                    <p>
                        <span class="price">
                            <small>

                                08 March 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Zohaib Tariq
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> Our four day stay at Murree was definitely made worth-while by Tour planner. The driver/guide was really punctual and friendly who showed us all the worth visiting places and managed the time properly. Thanks for your services. Totally recommended.</p>
                                    <p>
                        <span class="price">
                            <small>

                                05 March 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Muhammad Hammad
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Tour Planner is the only best services provider. The most important thing which I liked is the commitment of Tour planner. I suggest everyone, please must use at least one time Tour planner.

                                        Good Management, Good Attitude, Good Performance..... !  :)

                                        Hopefully Tour planner will meet all possible expectations of every traveler in a good sense.

                                        Thank you @Team Tour Planner</p>
                                    <p>
                        <span class="price">
                            <small>

                                20 February 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Muhammad Naeem
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                16 February 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Madiha Habib
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Our experience with Tour Planner, Mr. Khalid and our driver cum guide Gulfaraz was just awesome. Khalid took care of every single thing from timely pick-up to comfortable hotel rooms to excursions. We are very satisfied with the service and will definitely hire Tour Planner again to make our trip remarkable. Highly recommended for others who want to enjoy a care-free trip with good client servicing.</p>
                                    <p>
                        <span class="price">
                            <small>

                                05 February 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Abdullah Naeem
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> I went on my honeymoon for 2 days to Murree, Nathiagali, Ayubia and Patriata. The driver was congenial and the whole operation was very smooth. I had a good experience. Would definitely do this again</p>
                                    <p>
                        <span class="price">
                            <small>

                                03 February 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Talha Anwar
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> I planned 8 days trip with my wife to Abbortabbad, Muzafferabad, Neelum Valley and Murree. It was  great Experience. Customer care was at its best. Although I changed / Alter my trip frequently as per my desire but they manage it for me accordingly without any extra charges.</p>
                                    <p>
                        <span class="price">
                            <small>

                                22 January 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Syed Fahad
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> Great experience overall. Keep up the good work !</p>
                                    <p>
                        <span class="price">
                            <small>

                                16 January 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Iqbal Fari Iqbal Fari
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> 11 Days Pakistan Tour of Lahore Islamabad Murree Swat AJK Tour,It was a wonderful experience to see these amazing places in our beloved country Pakistan!
                                        I'm happy to chose Tourplanner for this trip. Mr. Khalid is very kind gentleman &amp; very active &amp; professional person. He was very cooperative throughout the trip. Our driver Purdil was very supportive. hotels also were good.
                                        Overall it was a great trip. Thanks to Tourplanner for managing it so well.
                                        I'm certain to use their services again in future. Also I'm happily recommending them to my friends &amp; family!</p>
                                    <p>
                        <span class="price">
                            <small>

                                12 January 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Nasir Mohammed
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                03 January 2016
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Dewan Khas
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                22 December 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Syed Atif Ali
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> I planned my tour to AJK &amp; Murree with my family, i enjoyed there with very much specially our driver cum guide MR Gulfaraz is very friendly and experienced driver, Mr Khalid is also very supported we have faced 1 or 2 small issues which was solved within no time.
                                        i appreciate and recommend tour planner to all my friends.</p>
                                    <p>
                        <span class="price">
                            <small>

                                18 December 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Asim Aslam
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I went on 4 days trip to Nathiagali, Thandiani, Murree , Bhurban booked with tour planner. I am really impressed by the quality of services they are offering. Everything was well organised. I stayed in hotel Elite Nathiagali the entire period and didnt find any issues.

                                        I would like to thank our driver Perveiz who took really good care while driving as I was traveling with two infants. He remain very friendly and accommodating.

                                        I would also like to thank Mr. Khalid for his support. Overall we enjoyed the trip very much. We would like to go with Tourplanner again.</p>
                                    <p>
                        <span class="price">
                            <small>

                                21 October 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Rizwan Ashraf
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> I took 5 days trip to Naran Kaghan Shogran and Nathiagali with my friends. My trip was very well organized and all the bookings were in place when we arrived to the hotels. Driver was very friendly and knew all the places we had to visit.

                                        In Naran we stayed  2 nights in Demanchi hotel. Overall the hotel was nice and staff was friendly but i there were no electric sockets available in the room and to charge our laptop/mobile phones we had to go to reception to avail the charging facility. I would recommend tourplanner to speak to hotel management to put sockets in the rooms or to change the hotel to avoid this inconvenience to the guests.</p>
                                    <p>
                        <span class="price">
                            <small>

                                15 October 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Akash Ahmed Soomro
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> I planned a trip with my family to Naran, Kaghan, Neelum Valley and Murree

                                        I would rate tour planner services as very good due to 3 main reasons:
                                        1. Reliable and caring customer service (especially by Mr. Khalid)
                                        2. Good planning and management of tour
                                        3. Good value for money

                                        In terms of improvement areas, they could consider the following:
                                        1. Consistent customer service levels by drivers (Drivers were changed during our trip and the second driver was not very friendly, whereas the first one was very good)
                                        2. More proactive support in terms of information on locations, stays and things to do

                                        Specific comments on the hotels provided by Tourplanner are given below:
                                        1. Naran - Hotel Demanchi - Over nice hotel, good room size and decent customer service - Major issues faced were hot water (only available in morning for 5 hours), and lack of clean rooms (dirty sheets)
                                        2. Kaghan/Shogran - Pine Park Hotel - Large hotel with good garden but the rooms were in very very bad shape (not much cleaning in rooms) - Restaurant customer service was very bad (Took more than 50 minutes to get Tea, and also dinner came late by 1 hour)
                                        3. Neelum Valley - State continental guest house Kutton - Very basic facility but amazing customer services - Timely delivery of food, clean room and hot water for the full day - Definitely recommend a stay here
                                        4. Murree - Hotel Murree Jawa - Pretty run down hotel located on hill so difficult to go up and down - Very bad quality of food and service (Took us a full day to get an extra mattress, but none of the other hotels seemed better than this one -

                                        Other tips about the trip:

                                        Naran - Main site to visit is Lake Saiful Malook which one goes by a Jeep ride of 45 min - However there are other sites to visit there too which we did not include in our package but you may consider them - They include Lalazar and Babusar Top - Both are reached by Jeep rides

                                        Shogran - Main site to visit is Siri and Paye - Reached through a 45 min Jeep ride - Not much to do there except these 2 - My recommendation would be to not stay there but do a day trip only

                                        Neelum Valley - There are many places to visit - Although our stay was only in Kutton - I would recommend staying at Keran too (About 1 hour drive from Kutton) as it has a good hotel called Valley trackers - In addition, the state continental guest house Kutton also has a hotel in Sharda  - 3 hours drive from Kutton (which is a really beautiful place)  -

                                        Murree - If you have never been there, than do visit - Otherwise you would be underwhelmed to see this after Neelum valley and Naran/Kaghan

                                        Hope you find this helpful</p>
                                    <p>
                        <span class="price">
                            <small>

                                10 October 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Qumber Abbas
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I had book for 2 days Muree Package as I was traveling with 1 Infant and 1 child along with my wife I had requested for Pickup from Islamabad but Drop at Peshawar. Everything was very nice.. Specially the coordination before, During and after the trip.
                                        Driver was also very nice and tidy. We stayed at Lookwood Hotel and Check in and Check out was very fast and smooth. Overall it was money well spent.
                                        Inshallah, next year for NARAN package I will definitely gonna take your Services.</p>
                                    <p>
                        <span class="price">
                            <small>

                                28 September 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Fahad Shoks
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> It was my first experience with Tour Planner. Initially i was a bit sceptical about it but when the journey started i was very much satisfied with the planning, punctuality and cooperation. Good job.</p>
                                    <p>
                        <span class="price">
                            <small>

                                13 September 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Mohsin Ateeq
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                06 September 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Sajjad Ahmad
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> I have already used services for trip to Neelum Valley last year and being satisfied customer opted tour planner for Swat/Kalam tour. It was well planned and issues were resolved promptly. Just want to suggest that attitude of driver needed improvement.</p>
                                    <p>
                        <span class="price">
                            <small>

                                01 September 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Mansoor Khalid Khan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                26 August 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Tahira Yasmeen
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> I planned a trip with my kids with them i was worried how i will manage but they organized every thing .very professionals. Driver mudasar was very nice man good driver n have knowledge n give right information.</p>
                                    <p>
                        <span class="price">
                            <small>

                                22 August 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Umair Ahmed Shamsi
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> A trip that could never have been possible without Tourplanner.  Thankyou for your support.  You understood exactly what we wanted. A trip we thoroughly enjoyed.</p>
                                    <p>
                        <span class="price">
                            <small>

                                11 August 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Salman Rauf
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">2  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                06 August 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Mueez Sattar Khan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I just came back from trip , went to muree naran and shugran , i must say the 7 days of awesomeness , the most memorable time of my life , my parents enjoyed alot.. The convenience is very comfortable. Everything as per scheduled.

                                        Thank you Tourplanner pk..
                                        A highly recommend service and Mr Khalid is a great guy, very professional and always there if you come across any problem.. Thanks bro.. Will soon contact you again.</p>
                                    <p>
                        <span class="price">
                            <small>

                                06 August 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Hai Shahbaz
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> assalaamu alikum I m Dr. shahbaz , consultant JPMC karachi.. i want to acknowledge good appreciable tour arranged by tourplanner .pk .. we planned and booked tour from karachi, tour starting from islamabad ..6 nights 7 days , including 3 night at naran , then one in sugran and two in muree. Alhamdulillah , by the special kindness of Allah , and nice planning of tourplannner our tour was done as planned .....all our discussed requirements and needs were well adjusted by tour planner .pk we were also surprised regarding extraordinary trust on us by tour planner ..</p>
                                    <p>
                        <span class="price">
                            <small>

                                04 August 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Sabih Khan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I wish it go great! Trying you for the first time!</p>
                                    <p>
                        <span class="price">
                            <small>

                                28 July 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Saima Absar
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Thank you so much tourplanner team for a fab holiday. We like most of Pakistan had few of summer holidays left after eid vacations. Everyone including us seemed to be heading North. Tourplanner not only handled all our bookings to Naran Kaghan but also made the journey comfortable with their well-informed and trained divers. They provided us with a customized package for small family and parents. Will be planning another vacation with them next year. Highly recommended!  They deliver what they promise!</p>
                                    <p>
                        <span class="price">
                            <small>

                                27 July 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Imran Haider
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> I went to Azad Kashmir on 4 nights and 5 days tour with tour planner. It was a good experience. The customer service was great. The driver was very friendly and a good guide. Tour planner representative were in touch with me during whole tour. I felt safe and did not face any issue during my visit.

                                        I planned my own visit and would have given 5 star if i have been guided more by the company. From Lahore we went directly to Keran and it was a bad decision. A lot of travelling with family. A friendly advise would be have been stay in Kashmir. But i would also appreciate tour planner as on my request they made arrangement of my stay in Kashmir on 11th hour. Secondly we opted to go for Tobat and were advised to not stay there as there are not good hotels. It was a really bad suggestion as not staying in Tobat mean we traveled 11 hours in a day where the return was in dark night on a road with no lights and river flowing beside us. It was scary experience.

                                        I believe the service i availed through tour planner was expensive. My friend is also going to Kashmir but on lower rates and longer stay. But if you are looking for reliable service and peace of mind than yes, Tourplanner is the right choice.</p>
                                    <p>
                        <span class="price">
                            <small>

                                13 July 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Mahmood Ashraf
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> We booked a coaster for Nathiagali by Tourplanner. Although small booking but we found everything fine. The timings, quality of driver, quality of vehicle, cooperation, and cost all requirements were met. We enjoyed the trip very much. We would like to go with Tourplanner again.</p>
                                    <p>
                        <span class="price">
                            <small>

                                02 July 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        ???? ?
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Our heartiest and BIG THANK YOU to  Tourplanner .pk
                                        Travel Agency for our recent trekking'

                                        After a relaxing free afternoon, we headed out to our welcome dinner at traditional local Dewanekhas Restaurant. Quite fittingly, Dewanekhas translates to “celebration” in Local. Dinner Local Food was a series of yummy Excellent little entree sized dishes, accompanied by some beautiful local Mountain Documentary . This was a fine way to introduce us to Pakistani</p>
                                    <p>
                        <span class="price">
                            <small>

                                18 June 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Aamir Ali Ahmad
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I planned a trip last week to Neelum Valley and was not satisfied with the Hotel Bookings as everybody is asking for high rates as its a jam packed week before the holy month of Ramadan.

                                        I found Tour Planner Site on Google and contacted them they have made prompt arrangements for our 02 Groups for Staying at Neelun Valley - Athmuqam and Sharda as Karen Hotels are fully booked.

                                        Our Hotel at Athmuqam is very neat to the River Neelum and the view of the high rise mountains are breaktaking.

                                        We suggest everyone to trust Tour Planners who ever is looking for a memorable trip with family or friends.

                                        The hotel rooms are nice and clean and with breathtaking near views of the mighty river Neelum.</p>
                                    <p>
                        <span class="price">
                            <small>

                                15 June 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Talha Sajjad
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I went to Murree, Nathiagali, Muzaffarabad. Tour management was awesome, car was comfortable, driver(Mr. Gulfraz) was very humble and knew every thing.
                                        Every thing was according to plan. Great support without a single physical interaction.
                                        I will definitely use tourpalnner services in future too and will recommend others to use Tour Planner service..</p>
                                    <p>
                        <span class="price">
                            <small>

                                12 June 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Sahibzada Farhan Amin
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Perfect Schedule! Perfect Timings! Stupendous Management ! This is Tourplanner; the best Travel Agency in Pakistan I would say. Thank you Tourplanner for making our trip memorable. (: Thumbs up! Cheers!</p>
                                    <p>
                        <span class="price">
                            <small>

                                22 May 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        A Samad Nasyr
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Recently, I booked a Car for rental with TourPlanner for my honeymoon trip to Northern Pakistan including Balakot, Kaghan, Naran, Azad Jammu Kashmir. I'm really glad to mention that me and my wife are truly overwhelmed with our trip thanks to Mr. Khalid of TourPlanner for the recommendations, suggestions at all required times and above all the car was great and the driver Mr. Ajmal Naqvi was super helpful, really courteous and trustworthy person. Thanks TourPlanner for a memorable trip. Look forward to see you again in future inshaAllah. Much appreciated!</p>
                                    <p>
                        <span class="price">
                            <small>

                                13 May 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Habib Mujtaba
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> Had great experience with you guys. very well planned and supportive staff.</p>
                                    <p>
                        <span class="price">
                            <small>

                                02 May 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        ????? ???? ???? ???
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> AMAZING TRIP !! the two words I can use to mark my trip. I am extremely delighted and satisfied with the level of continuous support and assistance which was provided to us by tour planner. The tour was well organized. Tour planner was very prompt, reliable and flexible to the change request for locations. All the hotels arrangements were amazing in different ways, meeting or beyond our expectations which made our trip more peaceful. The driver that the company assigned to us was very helpful at all times, driving us through all those chaotic and peaceful streets and roads of various cities and having the car clean and ready at all times for us. He also was our guide when traveling between cities, making it possible for us to better know the local lifestyles. The driver was well knowledgeable, extremely support and caring at all times. We were even touched with the care and love he gave to my 8 months old daughter when she became ill and we had to rush her to the hospital.

                                        The only regret is that we couldn't spend more time and wish that next time when we plan to visit the places we will give sufficient time to ourselves to enjoy the beauty of nature created by Allah. All the places we visited were breath taking for us as they were extremely beautiful for us and beyond what we can express in words. Thank you for making our trip very memorable. Truly and heartily appreciate all your kind efforts.

                                        Best Regards

                                        Talha Nasser
                                        Doha - Qatar</p>
                                    <p>
                        <span class="price">
                            <small>

                                27 April 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Xaid Saab
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I went to Nathiagali for 3 days with Tour planner. Me and my family really enjoyed a lot. I must say that the services they provided us are much better than my expectations. And I'm planning to take their services again INSHA ALLAH.</p>
                                    <p>
                        <span class="price">
                            <small>

                                25 April 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Gulfam Shabbir
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Tourplanner arranged a fabulous honeymoon trip for us to Muzafarabad, Neelam Valley and Pir Chinasi. At the end, I would say they are surely one of the best. Everything was well planned and executed to perfection. The travel arrangements were fantastic, wherever we reached, the hotel was already booked and the staying arrangements made already. The locations they selected for our stay were one of the best. Food was delicious and especially the stay at Shahkot (Dreamland guest house) was superb. The driver they arranged for us was very cooperative, professional and knew his job well.
                                        Tourplanner would always be my first preference whenever I would like to have a trip arranged.</p>
                                    <p>
                        <span class="price">
                            <small>

                                14 April 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Moosa Hemani
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I usually prefer not to book any tour guide service as it usually restricts you to visit the places they know already and which give a shut up call to your exploring nature but I have to admit that Tour Planner and an extremely helpful nature of the guide “Kismat Khan” changed my opinion completely.

                                        It’s a usual perception that Islamabad is a capital state and has nothing to enjoy in it other than the government building. If you have the same perception, I would highly recommend you to hire Tour Planner and you will simply change your opinion about Islamabad after visiting places like “Shadhra”, “Lake View Park”, “Ayub Park” and more.

                                        I am defiantly going to consider them again for my coming trips and will highly recommend you too.</p>
                                    <p>
                        <span class="price">
                            <small>

                                07 April 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Abdul Basit
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> This is my first time to have a trip with some arrangement done by a tour operator. Overall I am satisfied with the arrangements done by tourplanner.

                                        Driver was impressively well experienced to drive on roads for Neelum Valley. But driver was not much aware of rout or places (we have planned to visit). He has tried to manage it by keeping in contact with the head office of tourplanner. So becasue of less knowledge of driver about places I think we have missed some places to see there.

                                        Overall Good Service/accomodation, Guset House and Hotel was also good.</p>
                                    <p>
                        <span class="price">
                            <small>

                                06 April 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Mohammad Faraz Rasool
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Alhumdu lillah was a great trip mashaALLAH JazakaALLAH for tour planner make our.trip.awesome.specially thnx.for Fida bhai as a guider of us May ALLAH give more success to Tour.planner.</p>
                                    <p>
                        <span class="price">
                            <small>

                                01 April 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ehsan Muhammad Khan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Everything including guide, hotels and management was fantastic. You were always available for help and guidance. Thanks for making my trip wonderful :)</p>
                                    <p>
                        <span class="price">
                            <small>

                                18 March 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Rizvi Danish
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Tourplanner made my honeymoon memorable! My whole trip to Swat was excellently managed by them and I was absolutely relaxed and tension-free during my whole trip! In all my upcoming tours, I will definitely opt up their services every time! I highly recommend them whenever you are planning your vacations!</p>
                                    <p>
                        <span class="price">
                            <small>

                                10 March 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Banda Khuda
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I have experienced Tour planner recently and I am pleased to share that services are awesome. I want to use tour planner again in future. One thing they should consider that there is no plan for 1st day and last day. 1st day they just receive the guest and at last day they just drop.</p>
                                    <p>
                        <span class="price">
                            <small>

                                09 March 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Riaz Ul Haq Tanoli
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">3  /5</span>
                                    <p> It was great experience and I am fully satisfied with the services and tour planning of the Tour-planner Team.I will recommend all friends to select tour-planner for making their tour full of enjoyment.

                                        Suggestion: Someone from the team should be there at hotel entrance for guidance and reception on very first day of the tour.</p>
                                    <p>
                        <span class="price">
                            <small>

                                01 March 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ashfaq Hussain
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Very good service, nice and co-operative people, excellent hotels, gentle drivers, economical packages, .........................................................</p>
                                    <p>
                        <span class="price">
                            <small>

                                15 February 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Pir Mudassar Ali Shah
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> A very well planned tour by Tourplanner, from day one till end of tour i had complete support of Tourplanner staff. Thanks for making our tour memorable.</p>
                                    <p>
                        <span class="price">
                            <small>

                                26 January 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ichie Liebe Nayel
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                20 January 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Abdul Qadir Memon
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Me and my family spend a wonderful time in all destinations during tour. We preferred to stay in hotels then Guest houses. Mr. Khawaja Khalid (Tour planner) is a nice and very cooperative gentleman who continuously remained in touch and managed to accommodate us according to our choice of hotels and facilitated us more then his commitment and up to our entire satisfaction. Driver Gulfraz was well experienced, cooperative and nice guy. Toyota Corolla XLi Car was in excellent condition.</p>
                                    <p>
                        <span class="price">
                            <small>

                                09 January 2015
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Sajid Hussain
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                26 December 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Muhammad Umer Asif
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> We arranged our Azad Kashmir trip through Tourplanner. This later proved to be the best thing we did. They had arranged our accommodation which was actually very good. Food was also good. They also handled our transport which was also very comfortable. The driver, who was also our guide, was very professional and courteous. The only issue we faced was 24 hour availability of hot water. We usually had it for 8 - 9 hours.</p>
                                    <p>
                        <span class="price">
                            <small>

                                11 December 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ahmad Raza
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Few simple words about tourplanner ,
                                        - Excellent
                                        - Well Organized
                                        - Strict to the plane.
                                        - Know the client needs.

                                        I will recommend tourplanner for everyone to plane your trip with tourplanner experts.</p>
                                    <p>
                        <span class="price">
                            <small>

                                10 December 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Shazia SN
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">1  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                08 December 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Afshan Afshee
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                07 December 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Hammad Khan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">3  /5</span>
                                    <p> I think it will be good</p>
                                    <p>
                        <span class="price">
                            <small>

                                10 November 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Tahir LaLa
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">3  /5</span>
                                    <p> Ahanmm.like</p>
                                    <p>
                        <span class="price">
                            <small>

                                06 November 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ajmal Jarral
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">3  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                03 November 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Syed Danish A. Rahman
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> I am extremely pleased and satisfied with the level of service that tourplanner provided us, We had an absolutely wonderful trip to Islamabad, Naran, kaghan, Shogran, Murree which will stay in the memory forever.
                                        I do recommend tourplanner to all my family &amp; friends, and who ever is looking for such a wonderful trip with perfect arrangment.
                                        Thank you so much tourplanner.

                                        Regards,
                                        Danish
                                        +966561509079
                                        Jeddah, Saudi Arabia</p>
                                    <p>
                        <span class="price">
                            <small>

                                03 November 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Abdul Mannan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Great job</p>
                                    <p>
                        <span class="price">
                            <small>

                                03 November 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Abdullah Iqbal
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> One of the best tour operating company in Pakistan. They have delivered what they have committed.</p>
                                    <p>
                        <span class="price">
                            <small>

                                01 November 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ch Razzaq Jutt
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                30 October 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Mohammad Ahsan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Very excellent and remarkable service.Good choice of hotels.very gentle and nice driver and best transportion.I will recommend tour planner for everyone planning to take pakistan tour.Real value for money.</p>
                                    <p>
                        <span class="price">
                            <small>

                                19 October 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Ghazal Sajid
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Had a brilliant trip to naran, kaghan n shogran with excursions everyday. Very well planned. Will definitely book with tourplanner again ! Thanks for a great service !</p>
                                    <p>
                        <span class="price">
                            <small>

                                11 October 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Umair Dar
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Amazing trip up to Naran, Kaghan and Shogran!! Very well managed - great service at a very affordable price!</p>
                                    <p>
                        <span class="price">
                            <small>

                                10 October 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Azam Saleem
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Amazing services. I visited naran, shogran and murree. Good hotels and tourist guide provided</p>
                                    <p>
                        <span class="price">
                            <small>

                                06 October 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Salman Saleem
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> I hired Tourplanner for my family vacation to Naran, Shogran and Murree. I must say i enjoyed their service and tour plan. Good thing was that they were in constant follow up during the tour to make sure there are no problems being faced. Go for their services for a hassle free tour to ur favorite destination.

                                        I will definitely opt for their services for my future tours.</p>
                                    <p>
                        <span class="price">
                            <small>

                                30 September 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Sameeta Asad
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                28 September 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        ???
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">2  /5</span>
                                    <p> ????  ????  ????? ???? ?????
                                        ???? ????? ??? ?????? ????? ??? ?????~~!!!</p>
                                    <p>
                        <span class="price">
                            <small>

                                26 September 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Zaina Hammad
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Wonderful place...</p>
                                    <p>
                        <span class="price">
                            <small>

                                23 September 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Asma Zafar
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                27 August 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Nauman Ahmad Saqi
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> IT WAS REALLY GOOD EXPERIENCE.FIRSTLY I WAS BIT ANXIOUS ABOUT THEM BUT FOUND ALL OK WHICH THEY PROMISED.ALL WAS WELL IN TIME AND FULLY SUPPORTED STAFF</p>
                                    <p>
                        <span class="price">
                            <small>

                                15 August 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Oosman Sadiq
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Absolutely amazing! I planned a holiday with them and I was astounded by the level of customer service and professionalism with which Tour Planner handled all my queries.
                                        The hotel arrangement was amazing, the transportation arrangement was also amazing.
                                        I strongly recommend using Tour Planner's services to experience the beauty of Pakistan!</p>
                                    <p>
                        <span class="price">
                            <small>

                                07 August 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Shoaib Rauf
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                20 July 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Waqas Badar
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> If i say my family holiday trip was excellent or good then it is wrong. it is fabulous. Every thing was book. Hotel, jeep and car every thing is as per expectation. I will definitely use them again. I highly recommend to use tourplanner for your holiday trips.</p>
                                    <p>
                        <span class="price">
                            <small>

                                01 July 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Imran Waheed
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> good keep it up and i am thankfull to mr khalid . inshaAllah we will meet in next year.</p>
                                    <p>
                        <span class="price">
                            <small>

                                30 June 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Niyaz Noor Ali
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> Overall great guidance and customer support.
                                        Hotel accommodation could have been better. Also few lack in communication to hotels.

                                        Hotel pictures to be shown prior booking. Also complete itinerary with excursions to different places should be shared with photographs.

                                        Overall: Satisfactory</p>
                                    <p>
                        <span class="price">
                            <small>

                                29 June 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Irfan Ahmed
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Great support and guidance. Thanks Tour planner for making my trip awesome. (Y)</p>
                                    <p>
                        <span class="price">
                            <small>

                                25 June 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        M Zahid Piprani
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> Really good arrangements by them,, car to hotel,, i really enjoyed their services. Good staff and good services... Provide all which they committed.. I am thankful to them.</p>
                                    <p>
                        <span class="price">
                            <small>

                                21 June 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Khokhar Aftab
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                26 May 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Shagufta Kazi
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                26 May 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Muhammad Shah Fahad
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">3  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                20 March 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Rashid Irfan
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                09 March 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Tahir Azeem
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">3  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                13 February 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Sajid Mushtaq
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> Good customer support from booking till completion of holiday. Exactly delivers what us promised in the package.
                                        Hotel was nice and clean and the was very good. Driver was polite and the tour guide also helped us with sight seeing. Overall tourplanner made our holiday pleasant and memorable. Highly recommended. :)</p>
                                    <p>
                        <span class="price">
                            <small>

                                17 January 2014
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Samad Khan Afridi
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                25 December 2013
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Roshan Gunwardana
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">5  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                21 December 2013
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a id="showCustomerReviews" target="_blank" href="http://www.tourplanner.pk/ContactUs#reviews">
                                    <h3>
                                        Sardar Bangash
                        <span class="stars">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                                    <img src="./ContactUs_files/star.png" alt="star">
                        </span>
                                    </h3>
                                    <span class="rating">4  /5</span>
                                    <p> </p>
                                    <p>
                        <span class="price">
                            <small>

                                19 December 2013
                            </small>
                        </span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a target="_blank" href="https://www.facebook.com/Tourplanner.pk/reviews" title="Show all" class="show-all">View on Facebook</a>


                </article>
                <!--//contact info-->
            </aside>
            <!--//sidebar-->
        </div>
        <!--//main content-->
    </div>
</div>
<!--//main-->
@stop