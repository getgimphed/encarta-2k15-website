<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Encarta MBM 2015" />
<meta name="description" content="Encarta MBM 2015" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- favicon links -->
<link rel="shortcut icon" type="image/ico" href="favicon.ico" />
<link rel="icon" type="image/ico" href="favicon.ico" />
<!--Google Web Fonts-->
<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'/>
<title>Encarta 2k15</title>
<!-- main css -->
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" id="theme-color" type="text/css" href="#"/>


<!-- Smooth Scroll -->
<script src="js/jquery.min.js" type="text/javascript"></script> 
<script src="js/jquery.mousewheel.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/smoothScroll.js"></script>
<script type="text/javascript">
   $(function () {
      jQuery.srSmoothscroll()
    })
</script>

<!-- Preloader -->
<link rel="stylesheet" type="text/css" href="css/preloader/main.css">
<link rel="stylesheet" type="text/css" href="css/preloader/jpreloader.css">
<script type="text/javascript" src="js/preloader/jpreLoader.min.js"></script>
<script>
// <!-- jPreLoader script -->

$(document).ready(function() {
  $('#wrapper').hide();
  $('header').css("top",-90);
  $('footer').css("bottom",-25);
  
  $('#control').children('span:not(clicked)').click(function() {
    $('.clicked').removeClass('clicked');
    $(this).toggleClass('clicked');
    var id = '#' + $(this).attr('id') + '-p';

    $('.current').fadeOut(500, function() {
      $(this).removeClass('current');
      $(id).addClass('current');
      $(id).fadeIn(500);
    });
  });
});

$(document).ready(function() {

  var timer;
  
  //calling jPreLoader function with properties
  $('body').jpreLoader({
    splashID: "#jSplash",
    splashFunction: function() {  //passing Splash Screen script to jPreLoader
      $('#jSplash').children('section').not('.selected').hide();
      $('#jSplash').hide().fadeIn(800);
      
      timer = setInterval(function() {
        splashRotator();
      }, 3000);
    }
  }, function() { //jPreLoader callback function
    clearInterval(timer);
    $('footer').animate({"bottom":0}, 500);
    $('header').animate({"top":0}, 800, function() {
      $('#wrapper').fadeIn(1000);
    });
  });
});
<!-- End of jPreLoader script -->

function splashRotator(){
  var cur = $('#jSplash').children('.selected');
  var next = $(cur).next();
  
  if($(next).length != 0) {
    $(next).addClass('selected');
  } else {
    $('#jSplash').children('section:first-child').addClass('selected');
    next = $('#jSplash').children('section:first-child');
  }
    
  $(cur).removeClass('selected').fadeOut(800, function() {
    $(next).fadeIn(800);
  });
}
</script>
<!-- Preloader Script End -->

<!-- Scroll to top -->
<script>            
  jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
      if (jQuery(this).scrollTop() > offset) {
        jQuery('.crunchify-top').fadeIn(duration);
      } else {
        jQuery('.crunchify-top').fadeOut(duration);
      }
    });
 
    jQuery('.crunchify-top').click(function(event) {
      event.preventDefault();
      jQuery('html, body').animate({scrollTop: 0}, duration);
      return false;
    })
  });
</script>
</head>
<body>

<!--Pre loader start-->

 <div id='jSplash'>
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left">
        <img src="images/jnvu.png" width="100" style="position:relative; top:40%; ">
      </div>
      <div class="loader-section section-right">
        <img src="images/mbmlogo1.png" width="100" style="position:relative; top:40%; ">
      </div>
    </div>
</div>
<!--pre loader end--> 

  
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69217141-1', 'auto');
  ga('send', 'pageview');

</script>

<!--Slider start-->
<div class="container-fluid">
  <div class="hs_menu_wraper">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12"> 
          <!-- logo start-->
          <div class="col-lg-2 col-md-2 col-sm-2"> <a href="http://encartambm.in">
            <div class="hs_logo"><img src="images/encarta_logo.png" width="100" style="z-index:-2;"><sup class="hs_logo_num"></sup></div>
            </a> </div>
          <!--logo end--> 
          <!--menu start-->
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="hs_nav">
              <ul class="clearfix">
                <li><a class="active" href="index.php" id="home" >Home</a>     </li>
                <li><a href="events.php">Events</a>
                  <ul class="hs_sub_menu">
                    <li><a href="code_fiesta.php">Code Fiesta </a></li>
                    <li><a href="creatrix.php">Creatrix</a></li>
                    <li><a href="grand_arcanum.php">Grand Arcanum</a></li>
                    <li><a href="tech_art.php">Tech Art</a></li>
                    <li><a href="ingenieur.php">Ingenieur</a></li>
                    <li><a href="quizzotica.php">Quizzotica</a></li>
                    <!--<li><a href="gamezville.php">Gamezville</a></li>--->
                    <li><a href="prelims.php">Prelims</a></li>
                  </ul>
                </li>
                <li><a href="gallery.php">Gallery</a></li>

                <li><a href="register.php">Login/Register</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
              <a href="1" id="pull">Menu</a> </div>
          </div>
          <!--menu end--> 

          <!--social icon start-->
          <div class="col-md-2 col-md-2 col-sm-2">
            <div class="icons"> <a class="facebook" href="https://www.facebook.com/Encarta-2k15-1907469076144784/"></a><a class="googleplus" href="https://plus.google.com/u/3/104023683445593236078"></a></div>
          </div>  
          <!--social icon end--> 
        </div>
      </div>
      <hr class="hs_divider"/>
      <div class="row hs_search_box">
        <form class="form-inline">
          <div class="form-group has-success has-feedback">
            <input type="text" class="form-control" placeholder="Search">
            <span class="glyphicon glyphicon-search form-control-feedback"></span> </div>
        </form>
      </div>
    </div>
  </div>
  <!--main slider start-->
  <div class="hs_slider_wraper">
    <ul class="bxslider">
      <li>
        <div class="hs_slider"> <img src="images/slider/slider5.jpg" alt="" width="1631" height=""/>
          <div class="hs_overlay_slider"></div>
          <div class="container">
             <div class="hs_slider_content"> <a class="hs_link" href="http://mbm.ac.in">MBM Jodhpur</a>
              <h1 style="font-family: 'Poiret One', cursive; font-weight:900;">ENCARTA 2K15</h1>
              <h2 style="font-family: 'Indie Flower', cursive;">leading you to infinite...</h2>
              <!-- <a href="#" class="hs_btn_dark">learn more</a> <a href="#" class="hs_btn_dark">buy now</a> </div> -->
          </div>
        </div>
      </li>
      <li>
        <div class="hs_slider"> <img src="images/slider/slider8.jpg" alt="" width="1631" height=""/>
          <div class="hs_overlay_slider"></div>
          <div class="container">
            <div class="hs_slider_content"> <a class="hs_link" href="http://mbm.ac.in">MBM Jodhpur</a>
              <h1 style="font-family: 'Poiret One', cursive; font-weight:900;">ENCARTA 2K15</h1>
              <h2 style="font-family: 'Indie Flower', cursive;">leading you to infinite...</h2>
              <!-- <a href="#" class="hs_btn_dark">learn more</a> <a href="#" class="hs_btn_dark">buy now</a> </div> -->
          </div>
        </div>
      </li>
      <li>
        <div class="hs_slider"> <img src="images/slider/slider7.jpg" alt="" width="1631" height=""/>
          <div class="hs_overlay_slider"></div>
          <div class="container">
            <div class="hs_slider_content"> <a class="hs_link" href="http://mbm.ac.in">MBM Jodhpur</a>
              <h1 style="font-family: 'Poiret One', cursive; font-weight:900;">ENCARTA 2K15</h1>
              <h2 style="font-family: 'Indie Flower', cursive;">leading you to infinite...</h2>
              <!-- <a href="#" class="hs_btn_dark">learn more</a> <a href="#" class="hs_btn_dark">buy now</a> </div> -->
          </div>
        </div>
      </li>
    </ul>
    <div class="container" style="text-align:center">
      <div class="row" id="bx-pager"> 
        <a class="hs_slider_thumb_wraper" data-slide-index="0" href="/notifications.php" >
          <div class="hs_slider_thumb"> <i class="fa fa-bell-o fa-2x" style="padding-top:10px;" ></i>
            <p >Notifications</p>
          </div>
        </a> 

        <a class="hs_slider_thumb_wraper" data-slide-index="1" href="1">
          <div class="hs_slider_thumb"> <i class="fa  fa-clock-o fa-2x" style="padding-top:10px;" ></i>
            <p> Time To Go...
                <ul class="countdown">
                <li> <span class="days">00</span>
                <p class="days_ref">days</p>
                </li>
                <li class="seperator">.</li>
                <li> <span class="hours">00</span>
                <p class="hours_ref">hours</p>
                </li>
                <li class="seperator">:</li>
                <li> <span class="minutes">00</span>
                <p class="minutes_ref">minutes</p>
                </li>
                <li class="seperator">:</li>
                <li> <span class="seconds">00</span>
                <p class="seconds_ref">seconds</p>
                </li>
                </ul>
              </p>
          </div>
        </a>

        <a class="hs_slider_thumb_wraper" data-slide-index="2" href="/prelims.php" target="_blank" >
          <div class="hs_slider_thumb"> <i class="fa fa-pencil fa-2x" style="padding-top:10px;" ></i>
            <p>Prelims</p>
          </div>
        </a> 
        
      </div>
    </div>
  </div>
  <!--main slider end-->
  <div class="clearfix"></div>
</div>
<!--main container start-->
<div class="container">
  <div class="hs_heading" id="index_about_future_heading">
    <h2 style="font-family: 'Poiret One', cursive;">About Encarta</h2>
    <span>leading you to infinite...</span>
    <i class="fa fa-4x fa-chevron-left" style="float:right;" ></i>
    <div class="clearfix"></div>
    <div class="hs_hr"></div>
  </div>
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 hs_about_image">
      <div class="hs_image_overlay"> <img src="images/about_future.jpg" alt=""  width="577" height="443"/>
        <div class="hs_overlay_heading" id="index_about_image_text"> <a class="hs_link" href="events.php">Got the skills ?</a>
          <h2 style="font-family: 'Poiret One', cursive;"> we provide the<br>
            platform</h2>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6" id="index_about_text">
      <h1 class="hs_margin_top" style="font-family: 'Poiret One', cursive;">Technical festival by<br>M.B.M. Engg. college.</h1>
      <p>Act as a platform for innovative and dexterous technocrats to exhibit their technical skills.</p>
      <p class="hs_margin_bottom">Scheduled from 20 November 2015 to 22 November 2015, the fest contains the technical, business, intellectual and General Knowledge events, covering the serious & fun part. </p>
      <a href="register.php" class="hs_btn_light bounceInLeft">Register Now</a> </div>
  </div>
  <div class="hs_margin_bottom"></div>
  <div id="index_about_div">

    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="hs_about_div">
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3">
              <div class="hs_service_img"> 
                <i class="fa fa-code fa-3x"></i>
              </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-9">
              <h4 style="font-family: 'Poiret One', cursive;"class="hs_margin_top">Where You Reform The Tech</h4>
              <p>The place where you code the fun out of your heart. The place where you mobilize the immovable. </p>
            </div>
          </div>
        </div>
      </div>
	  
	  
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="hs_about_div">
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3">
              <div class="hs_service_img">
                <i class="fa fa-coffee fa-3x"></i>
              </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-9">
              <h4 class="hs_margin_top" style="font-family: 'Poiret One', cursive;">Where you shout out loud.</h4>
              <p>30 Hours of fun over 3 days and 2 workshops over 4 days making a powerpuffed week.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="hs_about_div">
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3">
              <div class="hs_service_img"> 

                <i class="fa fa-camera fa-3x"></i>

              </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-9">
              <h4 class="hs_margin_top" style="font-family: 'Poiret One', cursive;">Where fun begins</h4>
              <p>Its Technical, not 'just' Technical. "Super funny events with super awesome prizes."</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="hs_margin_bottom"></div>
  <div class="hs_heading">
    <h2 style="font-family: 'Poiret One', cursive;">Events</h2>
    <span> where the fun begins...</span>
    <!-- <span style="float:right;"> <i class="fa fa-camera fa-3x" style="float:right;"></i> </span>
    <span style="float:right;"><i class="fa fa-coffee fa-3x" style="float:right;"></i></span> -->
    <span style="float:right;"><i class="fa fa-child  fa-3x" style="float:right;"></i></span>
    <div class="clearfix"></div>
    <div class="hs_hr"></div>
  </div>
  <div class="hs_margin_bottom"></div>

  <div class="col-md-12 align-c pull-down-62 hs_portfolio index_portfolio"> 
    <!-- /.title -->
    <ul class="push-down-62 portfolio-filter" data-scrollreveal="enter from the bottom over 1s but wait 0.5s">
      <li><a href="1" class="filter-item active" data-filter="all">All</a></li>
      <li><a href="1" class="filter-item" data-filter="code_fiesta">Code Fiesta</a></li>
      <li><a href="1" class="filter-item" data-filter="creatrix">Creatrix</a></li>
      <li><a href="1" class="filter-item" data-filter="grand_arcanum">Grand Arcanum</a></li>
      <li><a href="1" class="filter-item" data-filter="ingenieur">Ingenieur</a></li>
      <li><a href="1" class="filter-item" data-filter="quizoticca">Quizoticca</a></li>
      <!--<li><a href="1" class="filter-item" data-filter="gamezville">Gamezville</a></li>-->
      <li><a href="1" class="filter-item" data-filter="tech_art">Tech Art</a></li>
    </ul>
    <!-- /.push-down-62 portfolio-filter --> 
  </div>
  <div class="clearfix"></div>
  <div class="row push-down-62 portfolio-grid index_portfolio_content" id="grid">
    <style type="text/css">
    .portfolio-details p{
          color: #fff;
    }
    </style>   
    <div class="col-md-2 col-sm-6 portfolio-item code_fiesta  mix"><img src="images/events/320/code_fiesta/1_code_marathon.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.5s" width="" height=""/>
      <a href="code_fiesta.php" target="_blank"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Code Marathon</h2>
        <p>Code Fiesta</p>
        <div class="hs_botom_part">
        </div>
      </div>
      </a>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-2 col-sm-6 portfolio-item code_fiesta  mix"><img src="images/events/320/code_fiesta/2_code_struck.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.5s" width="" height=""/>
      <a href="code_fiesta.php" target="_blank"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Code Struck</h2>
        <p>Code Fiesta</p>
        <div class="hs_botom_part">
        </div>
      </div>
      </a>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-2 col-sm-6 portfolio-item code_fiesta  mix"><img src="images/events/320/code_fiesta/3_flex_your_brain.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.5s" width="" height=""/>
      <a href="code_fiesta.php" target="_blank"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Flex Your Brain</h2>
        <p>Code Fiesta</p>
        <div class="hs_botom_part">
        </div>
      </div>
      </a>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-2 col-sm-6 portfolio-item code_fiesta  mix"><img src="images/events/320/code_fiesta/4_insomnia.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.5s" width="" height=""/>
      <a href="code_fiesta.php" target="_blank"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Insomnia</h2>
        <p>Code Fiesta</p>
        <div class="hs_botom_part">
        </div>
      </div>
      </a>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-2 col-sm-6  portfolio-item code_fiesta mix"><img src="images/events/320/code_fiesta/6_klutzy_code.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.6s" width="" height=""/>
      <a href="code_fiesta.php" target="_blank"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Klutzy Code</h2>
        <p>Code Fiesta</p>
      </div>
      </a>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-2 col-sm-6  portfolio-item code_fiesta   mix"><img src="images/events/320/code_fiesta/7_predict-O-warrior.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.7s" width="" height=""/>
      <a href="code_fiesta.php" target="_blank"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Predict-O-Warrior</h2>
        <p>Code Fiesta</p>
      </div>
      </a>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-2 col-sm-6  portfolio-item code_fiesta  mix"><img src="images/events/320/code_fiesta/9_witty_coder.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.7s" width="" height=""/>
      <a href="code_fiesta.php" target="_blank"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Witty Coder</h2>
        <p>Code Fiesta</p>
        <div class="hs_botom_part">
          
        </div>
      </div>
      </a>
    </div>

    <div class="col-md-2 col-sm-6 portfolio-item tech_art mix"><img src="images/events/320/tech_art/1_webcrats.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.5s" width="" height=""/>
      <a href="tech_art.php" target="_blank"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Web Cratz</h2>
        <p>Tech Art</p>
        <div class="hs_botom_part">
        </div>
      </div>
      </a>
    </div>

    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-2 col-sm-6  portfolio-item  creatrix mix"><img src="images/events/320/creatrix/1_fake_research.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.7s" width="" height=""/>
      <a href="creatrix.php" target="_blank"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Fake Research</h2>
        <p>Creatrix</p>
        <div class="hs_botom_part">
        </div>
      </div>
      </a>
    </div>
    <!-- /.col-md-4 portfolio-item mix --> 
    
    <div class="col-md-2 col-sm-6  portfolio-item  creatrix  mix"><img src="images/events/320/creatrix/3_technorhyme.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.6s" width="" height=""/>
      <a href="creatrix.php" target="_blank"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Techno Rhyme</h2>
        <p>Creatrix</p>
      </div>
      </a>
    </div>

    <div class="col-md-2 col-sm-6 portfolio-item tech_art mix"><img src="images/events/320/tech_art/2_music_mashup.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.5s" width="" height=""/>
      <a href="tech_art.php" target="_blank"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Music Mashup</h2>
        <p >Tech Art</p>
        <div class="hs_botom_part">
        </div>
      </div>
      </a>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
  <div class="col-md-2 col-sm-6  portfolio-item tech_art mix"><img src="images/events/320/tech_art/3_bob_the_builder.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.6s" width="" height=""/>
      <a href="tech_art.php" target="_blank"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Bob The Builder</h2>
        <p>Tech Art</p>
        <div class="hs_botom_part">
        </div>
      </div>
      </a>
    </div>


    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-2 col-sm-6  portfolio-item grand_arcanum mix"><img src="images/events/320/grand_arcanum/1_dalaal_street.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.7s" width="" height=""/>
      <a href="grand_arcanum.php" target="_blank"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Dalaal Street</h2>
        <p>Grand Arcanum</p>
        <div class="hs_botom_part">
          
        </div>
      </div>
      </a>
    </div>

    <div class="col-md-2 col-sm-6 portfolio-item grand_arcanum mix"><img src="images/events/320/grand_arcanum/2_mbm_hunt.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.5s" width="" height=""/>
      <a href="grand_arcanum.php"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">MBM Hunt</h2>
        <p>Grand Arcanum</p>
        <div class="hs_botom_part">
        </div>
      </div>
      </a>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-2 col-sm-6 portfolio-item grand_arcanum mix"><img src="images/events/320/grand_arcanum/3_pic_a_pic.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.5s" width="" height=""/>
      <a href="grand_arcanum.php"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Pick A Pic</h2>
        <p>Grand Arcanum</p>
        <div class="hs_botom_part">
        </div>
      </div>
      </a>
    </div>


    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-2 col-sm-6  portfolio-item code_fiesta  mix"><img src="images/events/320/code_fiesta/5_java_jumbos.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.6s" width="" height=""/>
      <a href="code_fiesta.php"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Java Jumbos</h2>
        <p>Code Fiesta</p>
        <div class="hs_botom_part">
        </div>
      </div>
      </a>
    </div>

    
  
    <div class="col-md-2 col-sm-6  portfolio-item ingenieur mix"><img src="images/events/320/ingenieur/1_junkyard_giants.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.6s" width="" height=""/>
      <a href="ingenieur.php"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">JunkyYard Giants</h2>
        <p>Ingenieur</p>
        <div class="hs_botom_part">
        </div>
      </div>
      </a>
    </div>


    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-2 col-sm-6  portfolio-item quizoticca mix"><img src="images/events/320/quizoticca/1_everything_under_the_sun.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.6s" width="" height=""/>
      <a href="quizoticca.php"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Everything Under D Sun</h2>
        <p>Quizoticca</p>
      </div>
      </a>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-2 col-sm-6  portfolio-item quizoticca mix"><img src="images/events/320/quizoticca/2_number_ninjas.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.7s" width="" height=""/>
      <a href="quizoticca.php"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Number Ninjas</h2>
        <p>Quizoticca</p>
      </div>
      </a>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-2 col-sm-6  portfolio-item quizoticca mix"><img src="images/events/320/quizoticca/3_labyrinth.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.7s" width="" height=""/>
      <a href="quizoticca.php"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Labyrinth</h2>
        <p>Quizoticca</p>
        <div class="hs_botom_part">
          
        </div>
      </div>
      </a>
    </div>


    <!-- /.col-md-4 portfolio-item mix -->
    <!--
    <div class="col-md-2 col-sm-6  portfolio-item gamezville mix"><img src="images/events/320/gamezville/1_counter_strike.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.7s" width="" height=""/>
      <a href="gamezville.php"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Counter Strike</h2>
        <p>GamezVille</p>
        <div class="hs_botom_part">
        </div>
      </div>
      </a>
    </div>-->
    <!-- /.col-md-4 portfolio-item mix -->
    <div class="col-md-2 col-sm-6  portfolio-item creatrix mix"><img src="images/events/320/creatrix/2_tech_traversity.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.6s" width="" height=""/>
      <a href="creatrix.php"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Tech Traversity</h2>
        <p>Creatrix</p>
        <div class="hs_botom_part">
        </div>
      </div>
      </a>
    </div>
    <!-- /.col-md-4 portfolio-item mix -->
 <!--
    <div class="col-md-2 col-sm-6  portfolio-item gamezville mix"><img src="images/events/320/gamezville/2_car_race.jpg" alt="" data-scrollreveal="enter from the bottom over 1s but wait 0.6s" width="" height=""/>
      <a href="gamezville.php"><div class="portfolio-details">
        <h2 style="font-family: 'Poiret One', cursive;">Car Race</h2>
        <p>GamezVille</p>
        <div class="hs_botom_part">
        </div>
      </div>
      </a>
    </div>
-->
  <!-- /#grid.row -->
  <div class="hs_margin_bottom"></div>
  <div class="hs_margin_bottom"></div>
</div>

<!-- Gallery   -->
<div class="hs_margin_bottom"></div>
  <div class="hs_heading">
    <h2 style="font-family: 'Poiret One', cursive;">Gallery</h2>
    <span> glimpses of previous years...</span>
    <span style="float:right;"><i class="fa fa-picture-o  fa-3x" style="float:right;"></i></span>
    <div class="clearfix"></div>
    <div class="hs_hr"></div>
  </div>
  <div class="hs_margin_bottom"></div>



<div id="home" class="tr_page_section"> 
  <!--Gallery Slider-->
  <div class="tr_gallery_slider" style="font-family: 'Poiret One', cursive;">
    <section id="photostack-1" class="photostack photostack-start">
      <div>
        <figure> <a href="javascript:void(0)" class="photostack-img"><img src="images/scattered/1.jpg" width="240" alt="img01" /></a>
          <figcaption>
            <h2 class="photostack-title">Robocons...</h2>
          </figcaption>
        </figure>
        <figure> <a href="javascript:void(0)" class="photostack-img"><img src="images/scattered/2.jpg" width="240" alt="img02"/></a>
          <figcaption>
            <h2 class="photostack-title">Code It...</h2>
          </figcaption>
        </figure>
        <figure> <a href="javascript:void(0)" class="photostack-img"><img src="images/scattered/3.jpg" width="240" alt="img03"/></a>
          <figcaption>
            <h2 class="photostack-  title">Visiting the Labs...</h2>
          </figcaption>
        </figure>
        <figure> <a href="javascript:void(0)" class="photostack-img"><img src="images/scattered/4.jpg" width="240" alt="img04"/></a>
          <figcaption>
            <h2 class="photostack-title">Battlefield...</h2>
          </figcaption>
        </figure>
        <figure> <a href="javascript:void(0)" class="photostack-img"><img src="images/scattered/5.jpg" width="240" alt="img05"/></a>
          <figcaption>
            <h2 class="photostack-title">The Encarta Team...</h2>
          </figcaption>
        </figure>
        <figure> <a href="javascript:void(0)" class="photostack-img"><img src="images/scattered/6.jpg" width="240" alt="img06"/></a>
          <figcaption>
            <h2 class="photostack-title">Ma'Rio...</h2>
          </figcaption>
        </figure>
        <figure> <a href="javascript:void(0)" class="photostack-img"><img src="images/scattered/7.jpg" width="240" alt="img07"/></a>
          <figcaption>
            <h2 class="photostack-title">Motivation...</h2>
          </figcaption>
        </figure>
        <figure> <a href="javascript:void(0)" class="photostack-img"><img src="images/scattered/8.jpg" width="240" alt="img08"/></a>
          <figcaption>
            <h2 class="photostack-title">Curious Faces...</h2>
          </figcaption>
        </figure>
        <!-- <figure> <a href="javascript:void(0)" class="photostack-img"><img src="images/scattered/3.jpg" width="240" alt="img09"/></a>
          <figcaption>
            <h2 class="photostack-title">Visiting the Labs...</h2>
          </figcaption>
        </figure>
        <figure> <a href="javascript:void(0)" class="photostack-img"><img src="images/scattered/2.jpg" width="240" alt="img10"/></a>
          <figcaption>
            <h2 class="photostack-title">The Coding Fun...</h2>
          </figcaption>
        </figure>
        <figure> <a href="javascript:void(0)" class="photostack-img"><img src="images/scattered/1.jpg" width="240" alt="img12"/></a>
          <figcaption>
            <h2 class="photostack-title">Robocon...</h2>
          </figcaption>
        </figure>
        <figure> <a href="javascript:void(0)" class="photostack-img"><img src="images/scattered/5.jpg" width="240" alt="img13"/></a>
          <figcaption>
            <h2 class="photostack-title">The Encarta Team...</h2>
          </figcaption>
        </figure>
        <figure> <a href="javascript:void(0)" class="photostack-img"><img src="images/scattered/8.jpg" width="240" alt="img14"/></a>
          <figcaption>
            <h2 class="photostack-title">Curious Faces...</h2>
          </figcaption>
        </figure>
        <figure> <a href="javascript:void(0)" class="photostack-img"><img src="images/scattered/3.jpg" width="240" alt="img15"/></a>
          <figcaption>
            <h2 class="photostack-title">Laboratory...</h2>
          </figcaption>
        </figure>
        <figure> <a href="javascript:void(0)" class="photostack-img"><img src="images/scattered/7.jpg" width="240" alt="img16"/></a>
          <figcaption>
            <h2 class="photostack-title">Motivation...</h2>
          </figcaption>
        </figure> -->
      </div>
    </section>
  </div>
  <!--Gallery Slider End--> 
</div>


  <div class="clearfix"></div>
   <div class="hs_margin_bottom"></div>
  <div class="hs_heading">
    <h2 style="font-family: 'Poiret One', cursive;">Get here</h2>
    <span> participate...</span>
    <span style="float:right;"><i class="fa fa-globe  fa-3x" style="float:right;"></i></span>
    <div class="clearfix"></div>
    <div class="hs_hr"></div>
  </div>
  <div class="hs_margin_bottom"></div>

   <div class="col-lg-12 col-md-12 col-sm-12" id="contact_detail">
      <div class="hs_contact_detail">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <h3 style="font-family: 'Poiret One', cursive;">Location</h3>
            <div class="clearfix"></div>
            <p class=""> <span><img src="images/flat-icon/contact_address.png" alt=""/></span> Department of Computer Science & Engineering,<br> M.B.M Engineering College, Jodhpur.<br> India. 342003. </p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <h3 style="font-family: 'Poiret One', cursive;">inquiries</h3>
            <div class="clearfix"></div>
            <p class="hs_inquirie_txt">For any queries regarding registeration or sponsoring us.</p>
            <p class="hs_inquirie_txt"> Drop a mail or call on the below given details</p>
            <a href="mailto:encarta@encartambm.in">encarta@encartambm.in</a> </div>
        </div>
      </div>
      <div class="hs_margin_bottom"></div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p><a href=""><span><img src="images/flat-icon/clock.png" alt="" /></span>&nbsp;&nbsp;09 : 00 AM to 08:00 PM ( India )</a></p>
          <p><a href="index.php"><span><img src="images/flat-icon/contact_global.png"  alt=""/></span>&nbsp;&nbsp;www.encartambm.in </a></p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p><a href="tel:8559930375"><span><img src="images/flat-icon/contact_phone.png"  alt=""/></span>&nbsp;&nbsp;+91.8559930375 </a></p>
          <p><a href="mailto:encarta@encartambm.in"><span><img src="images/flat-icon/contact_paper_plane.png"  alt=""/></span>&nbsp;&nbsp;encarta@encartambm.in </a></p>
        </div>
      </div>
    </div>
    <div class="hs_margin_bottom"></div>
    <div class="hs_margin_bottom"></div>
    <div class="hs_margin_bottom"></div>

 <!--  <div class="row" id="contact_map">

    <div id="mapdiv" style="width: 100%; background-color:#EEEEEE; height: 500px;"></div>
  </div>

<script type="text/javascript" src="js/map/ammap.js"></script> 
<script type="text/javascript" src="js/map/worldlow.js"></script> 
<script type="text/javascript">
      var map;

      function writeDevInfo(event) {
          document.getElementById("devInfo").innerHTML = event.str;
      }

      AmCharts.ready(function() {
          map = new AmCharts.AmMap();
          map.pathToImages = "images/ammap/images/";

          map.balloon.color = "#000000";

        var icon= "M22.095,0C9.893,0,0,9.796,0,21.875c0,3.989,1.084,7.719,2.968,10.938l19.126,32.813l19.125-32.813 c1.885-3.219,2.968-6.949,2.968-10.938C44.187,9.796,34.295,0,22.095,0z M22.095,29.532c-4.265,0-7.733-3.435-7.733-7.657 c0-4.219,3.469-7.654,7.733-7.654c4.263,0,7.731,3.435,7.731,7.654C29.826,26.098,26.357,29.532,22.095,29.532z";

        var dataProvider = {
            mapVar: AmCharts.maps.worldLow,
            images:[{latitude:26.2806, longitude:73.0158, svgPath:icon, color:"#FFF", scale:0.6, label:"Jodhpur", labelShiftY:2, zoomLevel:5, title:"Jodhpur", description:"Jodhpur is the culturally rich historic city of Rajasthan, India. M.B.M Engineering College stands here since 1951."}]
          
        };
        

          map.dataProvider = dataProvider;

          map.smallMap = new AmCharts.SmallMap();

          // developer mode related
          map.developerMode = true;
          map.addListener("writeDevInfo", writeDevInfo);

          map.write("mapdiv");

      });
       </script> 
     -->
     <div class="hs_margin_bottom"></div>
</div>
<!--main container end-->
<div class="clearfix"></div>
<!--footer start-->
<div class="hs_footer">
  <div class="container hs_footer_content">
    <div class="hs_footer_copyright index_footer_copyright">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 hs_footer_logo_div">
          <div class="hs_footer_logo" style="font-family: 'Poiret One', cursive;">Encarta<sup class="hs_footer_logo_num" >15</sup></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 hs_footer_copyright_div">
          <p><span>2015</span> C <span>Encarta, MBM</span> All Right Reserved. <span>Developed By: <a href="javascript:void(0)" style="font-size:1.2em;">Team Encarta </a> </span> </p>          
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 hs_footer_social_div">
          <div><a href="https://www.facebook.com/Encarta-2k15-1907469076144784/"><img src="images/flat-icon/facebook.png" alt=""  width="20" height="20"/></a></div>
          <div><a href="googleplus"><img src="images/flat-icon/google_plus.png" alt=""   width="20" height="20"/></a></div>
          <div class="hs_google_plus"><a href="http://www.mbm.ac.in"><img src="images/mbmlogo.png" alt="" width="20"/></a></div>

        </div>
      </div>
    </div>
  </div>
</div>
<!--footer end--> 

<!--js files start--> 
<!-- <script type="text/javascript" src="css/bxslider/jquery.bxslider.js"></script>  -->
<script type="text/javascript" src="css/bxslider/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/jquery.fancybox.js"></script> 

<!-- Portfolio Hover --> 
<script type="text/javascript" src="js/jquery.hoverdir.js"></script> 
<script type="text/javascript">
		$(document).ready(function() {
		$('.fancybox').fancybox();
		//color picker for body background
		$('#picker').colpick({
			layout:'hex',
			submit:0,
			colorScheme:'dark',
			onChange:function(hsb,hex,rgb,el,bySetColor) {
				$(el).css('border-color','#'+hex);
				$('body').css('background-color','#'+hex);
				//$(el).css('background-color','#'+hex);
				// Fill the text box just if the color was set using the picker, and not the colpickSetColor function.
				if(!bySetColor) $(el).val(hex);
			}
			}).keyup(function(){
				$(this).colpickSetColor(this.value);
    	  });
		});
	// portfolio Item Hover	
        	$(function() {
				$('.portfolio-item').each( function() { $(this).hoverdir(); } );
			});	
</script> 
<script type="text/javascript" src="js/animate.js"></script> 
<script type="text/javascript" src="js/custom.js"></script> 
<script type="text/javascript" src="css/colorpicker/js/colpick.js"  ></script> 


<!--js files end-->



<!-- VEDANT  -->
  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
  <!-- Gallery -->
  <link rel="stylesheet" type="text/css" href="css/gallery.css">
  <script type="text/javascript" src="js/gallery/jquery.prettyPhoto.js"></script>
  <script type="text/javascript" src="js/gallery/scattered/js/modernizr.min.js"></script>
  <script type="text/javascript" src="js/gallery/scattered/js/classie.js"></script>
  <script type="text/javascript" src="js/gallery/scattered/js/photostack.js"></script>
  <script type="text/javascript" src="js/gallery/custom.js"></script>


<!-- Go To Top -->
<a title="Go To Top" href="1" class="crunchify-top">↑</a>
<style type="text/css">
  .crunchify-top:hover {
  color: #fff !important;
  text-decoration: none;
  background-color: #e59400;
}
 
.crunchify-top {
  display: none;
  position: fixed;
  bottom: 1rem;
  right: 1rem;
  width: 5.2rem;
  height: 5.2rem;
  line-height: 4.2rem;
  font-size: 3.5rem;
  color: #fff;
  background-color: #008363;
  text-decoration: none;
  border-radius: 3.2rem;
  text-align: center;
  cursor: pointer;
}
</style>

<!-- Page overlay -->
<div id="loader2" style="z-index:2000;" class="pageload-overlay" data-opening="M20,15 50,30 50,30 30,30 Z;M0,0 80,0 50,30 20,45 Z;M0,0 80,0 60,45 0,60 Z;M0,0 80,0 80,60 0,60 Z" data-closing="M0,0 80,0 60,45 0,60 Z;M0,0 80,0 50,30 20,45 Z;M20,15 50,30 50,30 30,30 Z;M30,30 50,30 50,30 30,30 Z">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
          <path d="M30,30 50,30 50,30 30,30 Z"/>
        </svg>
</div><!-- /pageload-overlay -->

<link rel="stylesheet" type="text/css" href="css/overlay/component.css" />
<script src="js/overlay/snap.svg-min.js"></script>
<script src="js/overlay/svgLoader.js"></script>
<script>
      (function() {
        // var pageWrap = document.getElementById( 'pagewrap' ),
        //   pages = [].slice.call( pageWrap.querySelectorAll( 'div' ) ),
        //   currentPage = 0,
          // triggerLoading = [].slice.call( pageWrap.querySelectorAll( 'a' ) ),
          var triggerLoading = document.getElementsByTagName('a'),
          triggerLoading = Array.prototype.slice.call(triggerLoading),
          loader = new SVGLoader( document.getElementById( 'loader2' ), { speedIn : 100 } );

        function init() {
          triggerLoading.forEach( function( trigger ) {
            var link = trigger.getAttribute("href");
            if(link != "1" && link != "javascript:void(0)")
            {
            trigger.addEventListener( 'click', function( ev ) {
              ev.preventDefault();
              loader.show();
              // after some time hide loader
              setTimeout( function() {
                loader.hide();

                classie.removeClass( pages[ currentPage ], 'show' );
                // update..
                currentPage = currentPage ? 0 : 1;
                classie.addClass( pages[ currentPage ], 'show' );

              }, 2000 );
              setTimeout(function loadNextPage(){
                  window.location.href = link;
                  
              },1000);
              
            } );
          }
          } );  
        }
      
        init();
      })();
    </script>


    <!-- Timer  -->
    <link rel="stylesheet" type="text/css" href="css/timer/timer.css">
    <script type="text/javascript" src="js/timer/jquery.downCount.js"></script> 
    <script class="source" type="text/javascript">
        $('.countdown').downCount({
            date: '11/20/2015 12:00:00',
            offset: +10
        }, function () {
            alert('The Fest is ONNNNNN!!!!!!');
        });
    </script> 

    <!-- GA -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69217141-2', 'auto');
  ga('send', 'pageview');

</script>


</body>

</html>
