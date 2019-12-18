<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlmodern.justthemevalley.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 May 2018 04:23:49 GMT -->
<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Modern - Multi Purpose eCommerce Website Template</title>
<meta name="description" content="Explore the live preview of the professional Modern - Multi Purpose eCommerce Website Template get yourself knowledgeable about this theme prior to buying it. Browse through the pages, check out the images, click the buttons, explore the features.">
<meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>
<!-- Mobile specific metas  , -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet' type='text/css'>

<!-- CSS Style -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets-client-ecom/css/bootstrap.min.css') }}">

<!-- font-awesome & simple line icons CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets-client-ecom/css/font-awesome.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets-client-ecom/css/simple-line-icons.css') }}" media="all">

<!-- owl.carousel CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets-client-ecom/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets-client-ecom/css/owl.theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets-client-ecom/css/owl.transitions.css') }}">

<!-- animate CSS  -->
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets-client-ecom/css/animate.css') }}" media="all">

<!-- flexslider CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets-client-ecom/css/flexslider.css') }}" >

<!-- jquery-ui.min CSS  -->
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets-client-ecom/css/jquery-ui.css') }}">

<!-- Revolution Slider CSS -->
<link href="{{ asset('bower_components/assets-client-ecom/css/revolution-slider.css') }}" rel="stylesheet">

<!-- style CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/assets-client-ecom/css/style.css') }}" media="all">
</head>

<body class="cms-index-index cms-home-page">

<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]--> 

<!-- mobile menu -->
{{-- @include('client.layouts.menu') --}}
<!-- end mobile menu -->
<div id="page"> 
 
  
  <!-- Header -->
@include('client.layouts.header')
  <!-- end header --> 
  
  <!-- Navbar -->
@include('client.layouts.sidebar')
  <!-- end nav --> 
  
  <!-- Home Slider Start -->
@include('client.layouts.slider')
  
  <!-- main container -->
  @yield('content')
  
  <!-- Footer -->
  
@include('client.layouts.footer')
  <a href="#" class="totop"> </a> 
  <!-- End Footer --> 
  <!--Newsletter Popup Start--> 
{{-- <div id="myModal" class="modal fade">
    <div class="modal-dialog newsletter-popup">
        <div class="modal-content"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        
            <div class="modal-body"> 
            <h4 class="modal-title">NEWSLETTER SIGNUP</h4>
                 <form id="newsletter-form" method="post" action="#">
          <div class="content-subscribe">
            <div class="form-subscribe-header">
              <label>Subscribe to be the first to know about Sales, Events, and Exclusive Offers!</label>
            </div>
            <div class="input-box">
              <input type="text" class="input-text newsletter-subscribe" title="Sign up for our newsletter" name="email" placeholder="Enter your email address">
            </div>
            <div class="actions">
              <button class="button-subscribe" title="Subscribe" type="submit">Subscribe</button>
            </div>
          </div>
        </form>
        <div class="subscribe-bottom">
          <input name="notshowpopup" id="notshowpopup" type="checkbox">
          Don’t show this popup again </div>
            </div>
            
        </div>
    </div>
</div> --}}
 <!--End of Newsletter Popup-->   
  </div>


<!-- JS --> 

<!-- jquery js --> 
<script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/jquery.min.js') }}"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/bootstrap.min.js') }}"></script> 


<!-- owl.carousel.min js --> 
<script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/owl.carousel.min.js') }}"></script> 

<!-- bxslider js --> 
<script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/jquery.bxslider.js') }}"></script> 

<!-- Slider Js --> 
<script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/revolution-slider.js') }}"></script> 

<!-- megamenu js --> 
<script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/megamenu.js') }}"></script> 
<script type="text/javascript">
  /* <![CDATA[ */   
  var mega_menu = '0';
  
  /* ]]> */
  </script> 

<!-- jquery.mobile-menu js --> 
<script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/mobile-menu.js') }}"></script> 

<!--jquery-ui.min js --> 
<script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/jquery-ui.js') }}"></script> 

<!-- main js --> 
<script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/main.js') }}"></script> 

<!-- countdown js --> 
<script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/countdown.js') }}"></script> 
<script type="text/javascript" src="{{ asset('bower_components/assets-client-ecom/js/cloud-zoom.js') }}"></script> 

<!-- Revolution Slider --> 
<script type="text/javascript">
          jQuery(document).ready(function() {
                 jQuery('.tp-banner').revolution(
                  {
                      delay:9000,
                      startwidth:1170,
                      startheight:530,
                      hideThumbs:10,

                      navigationType:"bullet",							
                      navigationStyle:"preview1",

                      hideArrowsOnMobile:"on",
                      
                      touchenabled:"on",
                      onHoverStop:"on",
                      spinner:"spinner4"
                  });
          });
</script> 

<!-- Hot Deals Timer 1--> 
<script type="text/javascript">
      var dthen1 = new Date("12/25/16 11:59:00 PM");
      start = "08/04/15 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if(CountStepper>0)
          ddiff= new Date((dnow1)-(dthen1));
      else
          ddiff = new Date((dthen1)-(dnow1));
      gsecs1 = Math.floor(ddiff.valueOf()/1000);
      
      var iid1 = "countbox_1";
      CountBack_slider(gsecs1,"countbox_1", 1);
  </script>

    
</body>

<!-- Mirrored from htmlmodern.justthemevalley.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 May 2018 04:27:04 GMT -->
</html>
