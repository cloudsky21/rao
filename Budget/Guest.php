<?PHP 
session_start();
include("insertLog.php");
date_default_timezone_set('Asia/Manila');

if($_SESSION['isLogin'] == 0) {
	
	header("location: index.php");
}



?>



<!DOCTYPE html>
<html>
<head>
<title>RAO | Municipal Budget Office - Tolosa, Leyte</title>
<link rel="icon" href="fav.png" rel="icon" type="image/x-icon" sizes="16x16">
<link rel="shortcut icon" href="favicon.ico"/>
<style>


html, body {
		
	font-family: Tahoma, Verdana, Segoe, sans-serif;
	width: 100%;
	margin: 0;
	min-width: 1000px;	
}



#accountTitle {
	top:10px;
	float: left;
	position: fixed;
	color: white;
	margin-left: 40px;
	min-width: 1000px;
	font-size: 20px;
	
}
a:active {
	background-color: #a6d8a8;
	
	
}


#container {
	top: 0;
	margin: 0 auto;
	position: fixed;
	background-color: #005960;
	width: 100%;
	z-index: 5;
	height: 50px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	min-width: 1000px;
}

#avatar {
	margin-top: 10px;
	z-index: 3;
    background-image: url('default-avatar.png');
    
    /* make a square container */
    width: 25px;
    height: 25px;

    /* fill the container, preserving aspect ratio, and cropping to fit */
    background-size: cover;

    /* center the image vertically and horizontally */
    background-position: center;

    /* round the edges to a circle with border radius 1/2 container size */
    border-radius: 50%;
	
	
	margin-right: 20px;
	display: inline-block;
	float: right;
	
	
}

.wrap {
	
	
	text-align: center;
	width: 100%;
	position: fixed;
	min-width: 1000px;
}

.dropbtn {
    background-color: #005960;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;

	
	
}

.dropdown {
    position: relative;
    display: inline-block;
	margin-right: -5px;
	font-family: Tahoma, Verdana, Segoe, sans-serif;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	
	
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	text-align: left;
	
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #434343;
}

#wrap-log {
	
	float: right;
	font-family: Tahoma, Verdana, Segoe, sans-serif;
	font-size: 12px;
	color: white;
	margin-right: 10px;
	margin-top: 16px;

}




#centralized {
	display: block;
	width: 628px;
	height: 430px;
	margin: 0 auto;
	
	
	
}

.imgs {border-radius: 20px;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}

.wrapp { margin-top: 100px; min-width: 1000px;}
  /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background: url('img/a12.png') no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }

</style>
 
  <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-22.2.10.mini.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
</script>
</head>
<body>


<div id="container">
<label id="accountTitle">RAO SYSTEM <?PHP echo $_SESSION['budget']; ?> </label>
<div id="avatar"></div>
<div id="wrap-log">

<?PHP

echo '<label class="login"> <strong>'.$_SESSION['isLoginName'].'</strong></label><br>';


?>
</div>
	<div class="wrap">
	<div class="dropdown">
	<button class="dropbtn" id="homebtn">Home</button>
	<div class="dropdown-content">
	<a href="aipMMOg.php">AIP</a>
	<a href="logmeOut.php">Log Out</a>
	
    </div>
	</div>
	<div class="dropdown">
	<button class="dropbtn" id="raobtn">Registry Allotment and Obligations (RAO)</button>
	<div class="dropdown-content">
    <a href="personal_services_mmo_g.php">Personal Services</a>
    <a href="mooe_mmo_g.php">Maint. And Other Operating Expenses</a>
    <a href="co_mmo_g.php">Capital Outlay</a>
	<a href="rao20g.php">20&#37; EDF</a>
	<a href="#">Non - Office</a>
	<a href="gadg.php">5% Gender and Development (GAD)</a>
	<a href="#">Continuing Program</a>
	<a href="#">SEF</a>
	<a href="mdrg.php">5% MDR</a>
	<a href="pwdsg.php">1% PWDs</a>
	<a href="scg.php">1% Senior Citizen</a>
	<a href="iralcpcg.php">1% IRA &amp; LCPC</a>
  </div>
  </div>
 
</div>
</div>

<div class="wrapp">
<div id="centralized">
 <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:300px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">
            <div>
                <img data-u="image" src="img1.jpg" class="imgs"/>
            </div>
            <div>
                <img data-u="image" src="img2.jpg" class="imgs"/>
            </div>
            <div>
                <img data-u="image" src="img3.jpeg" class="imgs"/>
            </div>
            
            <div>
                <img data-u="image" src="img4.jpg" class="imgs"/>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>
  </div>
 </div>




</body>
</html>