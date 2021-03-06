<?php
require 'php/core.inc.php';
require 'php/connect.inc.php';

if(loggedin()){
	$name=getfield('name');
	$sid=getfield('sid');
}else{
header('Location:register.php');
}

?>

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
<script type='text/javascript'>
window.__wtw_lucky_site_id = 22049;

 (function() {
  var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
  wa.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://cdn') + '.luckyorange.com/w.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
   })();
 </script>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-35935151-8', 'auto');
  ga('send', 'pageview');

</script>

<!-- Smooth Scroll -->
<script src="js/jquery.min.js" type="text/javascript"></script> 
<script src="js/jquery.mousewheel.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/smoothScroll.js"></script>
<script type="text/javascript">
   $(function () {
      $.srSmoothscroll()
    })
</script>

<!-- Preloader -->
<link rel="stylesheet" type="text/css" href="css/preloader/main.css">
<link rel="stylesheet" type="text/css" href="css/preloader/jpreloader.css">
<script type="text/javascript" src="js/preloader/jpreLoader.min.js"></script>
<script>
<!-- jPreLoader script -->

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
 <div class="container-fluid">
  <div class="hs_menu_wraper">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12"> 
          <!-- logo start-->
          <div class="col-lg-2 col-md-2 col-sm-2"> <a href="http://encartambm.in">
            <div class="hs_logo"><img src="images/encarta_logo.png" width="100"><sup class="hs_logo_num"></sup></div>
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
                    <li><a href="ingenieur.php">Ingenieur</a></li>
                    <li><a href="quizzotica.php">Quizzotica</a></li>
                    <li><a href="gamezville.php">Gamezville</a></li>
                    <li><a href="prelims.php">Prelims</a></li>
                  </ul>
                </li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
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
  
  <!--main slider end-->
<!--heder end-->
<div class="hs_margin_bottom_100"></div>
<!--main container start-->
<div class="container">
  <div class="hs_heading" id="contact_weare_heading">
    <h2 style="font-family: 'Poiret One', cursive;">Welcome</h2>
    <span><?php echo $name;?></span>
    <div class="hs_pager">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li>/</li>
        <li><a href="account.php"><?php echo $name ?></a></li>
      </ul>
    </div>
    <div class="clearfix"></div>
    <div class="hs_hr"></div>
  </div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="hs_contact_form_div" style="font-size:1.2em; text-align:center;">
        Hello <?php echo $name;?>, You are registered to <span style="font-size:1.2em;">Encarta 2K15</span>'s Official Website.<br>
        You have successfully verified your email and we will keep you updated. Keep checking your email for mail from us.<br>
        In case of queries, bother us at <span style="color:#636; font-size:1.2em;">encarta@encartambm.in</span> or Whatsapp/call at <span style="color:#636;font-size:1.2em;">+91-85599-30375.</span>
        <br>Goto the Prelims page and download the prelims and upload them <a href="files/upload_prelims.php" style="color:#636; font-size:1.2em;"> here </a>.
      </div>
    </div>
  </div>

	<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="hs_contact_form_div" style="font-size:1.2em; text-align:center; padding-bottom:20px;">
        Produce Your Student ID at the Registeration Desks and you are done. We will take care of everything else.
        <div class="hs_contact_form">
            <form class="form-horizontal col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-xs-offset-4" role="form">
            <div class="form-group">
              <div class="col-sm-5">
              <p style="color:#fff; text-align:center; margin-top:20px; margin-bottom:0; border:2px solid white; padding:5px;">SID : <?php echo strtoupper($sid);?></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6" id="contact_contact_form" >
      <div class="hs_contact_form_div" style="padding:20px 0 5px 0;">
        <div class="hs_contact_form">
            <form class="form-horizontal col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-xs-offset-4" role="form">
            <div class="form-group">
              <div class="col-sm-10">
                <button id="" type="submit"><a style="color:white;" href="files/prelims.pdf" download>Download Prelims</a></button>
        <p id="err"></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6" id="contact_contact_form">
      <div class="hs_contact_form_div" style="padding:20px 0 5px 0;">
        <div class="hs_contact_form">
            <form class="form-horizontal col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-xs-offset-4" role="form">
            <div class="form-group">
              <div class="col-sm-10">
                <button id="" type="submit"><a style="color:white;" href="files/prelims.pdf" download>Upload Prelims</a></button>
        <p id="err"></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
    <div class="hs_margin_bottom"></div>
    <div class="hs_margin_bottom"></div>
    <div class="hs_margin_bottom"></div>
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
<!--main js start--> 
<script type="text/javascript" src="css/bxslider/jquery.bxslider.js"></script> 
<script type="text/javascript" src="css/bxslider/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/custom.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/jquery.fancybox.js"></script> 
<script type="text/javascript">
    $(document).ready(function() {
    $('.fancybox').fancybox();
      });
</script> 
<script type="text/javascript" src="js/animate.js"></script> 

<!--main js end-->

<!-- VEDANT  -->
  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">
 <!-- Gallery -->

  <script type="text/javascript" src="js/gallery/scattered/js/modernizr.min.js"></script>
  <script type="text/javascript" src="js/gallery/scattered/js/classie.js"></script>



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


<!-- Page overlay -->
<div id="loader2" class="pageload-overlay" data-opening="M20,15 50,30 50,30 30,30 Z;M0,0 80,0 50,30 20,45 Z;M0,0 80,0 60,45 0,60 Z;M0,0 80,0 80,60 0,60 Z" data-closing="M0,0 80,0 60,45 0,60 Z;M0,0 80,0 50,30 20,45 Z;M20,15 50,30 50,30 30,30 Z;M30,30 50,30 50,30 30,30 Z">
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
            if(link != "1")
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

</body>
</html>
