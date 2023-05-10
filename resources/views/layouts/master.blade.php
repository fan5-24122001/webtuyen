<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
		<meta name="description" content="JobBoard - HTML Template" />
	<meta property="og:title" content="JobBoard - HTML Template" />
	<meta property="og:description" content="JobBoard - HTML Template" />
	<meta property="og:image" content="JobBoard - HTML Template" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>JobBoard - HTML Template</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('user1/css/plugins.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user1/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user1/css/templete.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('user1/css/skin/skin-1.css')}}">
	<link rel="stylesheet" href="{{asset('user1/plugins/datepicker/css/bootstrap-datetimepicker.min.css')}}"/>
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="{{asset('user1/plugins/revolution/revolution/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user1/plugins/revolution/revolution/css/settings.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user1/plugins/revolution/revolution/css/navigation.css')}}">
	<!-- Revolution Navigation Style -->
</head>

   <body>
    <!-- Preloader Start -->
    
    <!-- Preloader Start -->
   
    
    @include("layouts.elements.header")
	<!--/slider-->
	
		
	@yield('content')
				
	
	@include("layouts.elements.footer")


    <script>
        $(document).ready(function(){
          $('sort').on('change',function(){
            var url = $(this).val();
            alert(url);
          });
        });
     </script>

    
  <!-- JS here -->
	
<script src="{{asset('user1/js/jquery.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script src="{{asset('user1/plugins/wow/wow.js')}}"></script><!-- WOW JS -->
<script src="{{asset('user1/plugins/bootstrap/js/popper.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('user1/plugins/bootstrap/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{asset('user1/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
<script src="{{asset('user1/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script src="{{asset('user1/plugins/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{asset('user1/plugins/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('user1/plugins/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('user1/plugins/imagesloaded/imagesloaded.js')}}"></script><!-- IMAGESLOADED -->
<script src="{{asset('user1/plugins/masonry/masonry-3.1.4.js')}}"></script><!-- MASONRY -->
<script src="{{asset('user1/plugins/masonry/masonry.filter.js')}}"></script><!-- MASONRY -->
<script src="{{asset('user1/plugins/owl-carousel/owl.carousel.js')}}"></script><!-- OWL SLIDER -->
<script src="{{asset('user1/plugins/rangeslider/rangeslider.js')}}" ></script><!-- Rangeslider -->
<script src="{{asset('user1/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{asset('user1/js/dz.carousel.js')}}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{asset('user1/js/recaptcha/api.js')}}"></script> 
<script src="{{asset('user1/js/dz.ajax.js')}}"></script><!-- CONTACT JS  -->
<script src="{{asset('user1/plugins/paroller/skrollr.min.js')}}"></script><!-- PAROLLER -->
<!-- Go to www.addthis.com/dashboard to customize your tools --> 

</body>

</html>