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

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

    <!-- Bootstrap core JavaScript -->
    <!-- <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script> -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


	<script type="text/javascript">
		$('a[href^="#"]').on('click', function(event) {

		    var target = $( $(this).attr('href') );

		    if( target.length ) {
		        event.preventDefault();
		        $('html, body').animate({
		            scrollTop: target.offset().top-54
		        }, 1000);
		    }

		});
	</script>

</body>
</html>
