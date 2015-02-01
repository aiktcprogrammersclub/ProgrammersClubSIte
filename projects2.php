


<!DOCTYPE html>
<html lang="en">
<head>
<title>Programmers</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="icon" href="images/t.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/home-slider01.js"></script>
<script type="text/javascript" src="js/home-slider02.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/html5shiv.js"></script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
   	<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
    <script language="JavaScript" type="text/JavaScript">
function form()  
{  

var fname=document.forms["rform"]["username"].value;
var passid = document.rform.Password.value;
var x=document.forms["rform"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");




if (fname==null || fname=="")
  {
  alert("Name must be filled out");
  return false;
  }
  
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
	
	if(passid=="")
	{
		alert("Please Enter Password ");
		return false;
	}
 
}  


	</script>
</head>
<body>
<div class="block1 p_bottom_zero">
  <div class="container_12"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <h1><a class="logo" href="index.php"><span class="underline">Programmers Club</a></h1><br><br>
      <nav>
       <ul class="sf-menu">
          <li class="current"><a href="home.php">Home</a></li>
          <li><a href="aftersigned.php">Forum</a></li>
          </li><li> <a href="projects2.php">Projects</a>
		  
          <li> <a href="logout.php">Logout</a>
            
          </li>
   
        </ul>
 
      </nav>
               <!--SLIDER-->
    <section class="innerpages">
      <div class="grid_12">
        <ul class="breadcrumb clearfix">
 
        </ul>
        <h2>PROJECTS</h2>
      </div>
    </section>
      <div class="clear"></div>
    </header>
  </div>
</div>

    <!--SLIDER_END--> 
      <div class="clear"></div>
    </header>
  </div>
</div>
<div class="extra_container">
  <section >
    <div class="fullwidthbanner-container" style="height:450px">
      <div class="fullwidthbanner">
        <ul>
          











 <!-- FADE -->
          <li data-transition="fade">
          
            <img src="images/main.jpg" alt="">
            <div class="caption lft" data-x="700" data-y="70" data-speed="900" data-start="900" data-easing="easeOutExpo"><img src="images/prog.jpg" alt="" width="256" /></div>
            
            <div class="caption sfl big_orange_bg" data-x="10" data-y="40" data-speed="600" data-start="2000" data-easing="easeOutExpo">Programmer-An organism</div>
            <div class="caption sfl big_blue_bg" data-x="10" data-y="170" data-speed="600" data-start="2500" data-easing="easeOutExpo">
             That turns
            </div>
            
            <div class="caption sfl big_blue_bg" data-x="10" data-y="240" data-speed="600" data-start="2700" data-easing="easeOutExpo">
            Coffee into
            </div>
            
            <div class="caption sfl big_blue_bg" data-x="10" data-y="310" data-speed="600" data-start="2900" data-easing="easeOutExpo">
              Software!
            </div>
            
          </li>


          <!-- SLIDELEFT -->
  
          
          <!-- SLIDERIGHT -->
          <li data-transition="slideleft"> <img src="images/img3.jpg" alt="" />
            <div class="caption lft boxshadow" data-x="10" data-y="50" data-speed="900" data-start="1300" data-easing="easeOutExpo">
                   
        <iframe src="http://player.vimeo.com/video/90391803?title=0&amp;color=ff5050"  width="630" height="350" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
              
            </div>
            <div class="caption lfr big_black_bg" data-x="700" data-y="50" data-speed="300" data-start="1600" data-easing="easeOutExpo">
Web Technology</div>

            <div class="caption lfb small_black_bg" data-x="700" data-y="130" data-speed="300" data-start="1800" data-easing="easeOutExpo"><a href="html-prog.php">HTML</a><br/></div>
      <div class="caption lfb small_black_bg1" data-x="700" data-y="210"data-speed="300" data-start="1800" data-easing="easeOutExpo">
<a href="php-prog.php">

PHP</a><br/></div>
            
            <div class="caption lfb" data-x="700" data-y="400" data-speed="300" data-start="1800" data-easing="easeOutExpo"><a href="#" class="button large">GET STARTED </a></div>
            
            
          </li>
          
       
          
          <!-- SLIDEUP -->
          <li data-transition="fade"> <img src="images/img4.jpg" alt="" />
            <div class="caption lft" data-x="520" data-y="20" data-speed="900" data-start="500" data-easing="easeOutBack">
  <iframe src="http://player.vimeo.com/video/90394510?title=0&amp;color=ff5050"  width="630" height="350" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</div>
            <div class="caption lfb big_red_bg" data-x="0" data-y="50" data-speed="900" data-start="800" data-easing="easeOutSine">Application Programming</div>
            
            <div class="caption lfb small_black_bg" data-x="30" data-y="130" data-speed="1100" data-start="1000" data-easing="easeOutSine"><a href="c-prog.php">C Programming</div>
            
            <div class="caption lfb small_black_bg" data-x="30" data-y="180" data-speed="1100" data-start="1200" data-easing="easeOutSine"><a href="cplus-prog.php">C++ programming</div>
            
            <div class="caption lfb small_black_bg" data-x="30" data-y="230" data-speed="1100" data-start="1200" data-easing="easeOutSine"><a href="java-prog.php">Java programming</div>
            
            <div class="caption lfb small_black_bg" data-x="30" data-y="280" data-speed="1100" data-start="1200" data-easing="easeOutSine"><a href="python-prog.php">Python programming</div><br>
                     <div class="caption lfb" data-x="0" data-y="400" data-speed="300" data-start="1800" data-easing="easeOutExpo"><a href="#" class="button large">GET STARTED </a></div>
            
            
         
          </li>
        </ul>
       
      </div>
    </div>	
  </section>
</div>


<div class="block2">
  <div class="container_12"> 
    <!--==============================content================================-->
    <section class="content">
      <div class="wrapper">
        <article class="grid_12 last-col">
          <div class="hello_box"><b>PAGE UNDER CONSTRUCTION!!!</div>
        </article>
      </div><center>
	<h3><b>PLEASE DO VISIT AGAIN!!!</b></h3>
		<IMG SRC="images/const.gif">


</div>

</div>













 <!--==============================footer=================================-->

<?php

include "foot.html";
?>
 
