
@if(isset($menu))

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <div class="logo"><a href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a></div>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">

			@foreach($menu as $item)
				<li class="nav-item">
					<a class="nav-link" href="#{{ $item['alias'] }}">{{ $item['title'] }}</a>
				</li>
			@endforeach

			<li><a class="nav-link" href="#write_us">
				<abbr title="Email"><i class="fa fa-envelope-o" aria-hidden="true"></i></abbr></a>
			</li>
		</ul>
    </div>
  </div>
</nav>

@endif