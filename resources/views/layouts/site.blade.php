<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Work in Poland</title>
	<link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/png">
	<!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/modern-business.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
</head>
<body>
	
	<!-- Navigation -->
	<header>
		@yield('header')
	</header>

	<!-- Content Section -->
	@yield('content')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    
<!--     <script type="text/javascript">
    	function Anchor(active){
    		if(active == true){
    			var hash = window.location.hash;
    			if(hash){
    				$("#menu a").removeClass("active");
    				$("a[href="+hash+"]").addClass("active");
    			}
    		}
    		function AnchorHref(){
    			var anchor = $(this);
    			if(hash){
    				$("#menu a").removeClass("active");
    				anchor.addClass("active");
    			}
    			$("html, body").animate({
    				scrollTop: $(anchor.attr("href")).offset().top
    			},500);
    		}
    		$("a[href*=#]").click(AnchorHref);
    	}
    	Anchor(false);
    </script> -->
</body>
</html>
