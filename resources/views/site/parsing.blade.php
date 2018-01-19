@extends('layouts.site')

@section('header')
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <div class="logo"><a href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a></div>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="#parsing">Вгору</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#footer">Вниз</a>
			</li>
		</ul>
    </div>
  </div>
</nav>
@endsection

@section('content')

<!-- Parsing Section -->
<div id="parsing" class="container">
	<hr/>
	
@if(isset($parsItems))

	<div class="row">
		<div class="col-lg-6 mb-6">
			<h2>Вакансії з зовнішнього ресурсу</h2>
		</div>
		<div class="col-lg-6 mb-6">Ваша реклама =)
			<!-- <a href="#" style="float: right;" class="btn btn-primary">Зберегти в базу</a> -->
		</div>
	</div>

@foreach($parsItems as $item)

	<div class="row">
		<div class="col-lg-12 mb-12">
			<div class="card h-100">
				<h4 class="card-header">{{ $item['name'] }}</h4>
				<div class="card-body">
					<div class="col-lg-12 col-sm-12 portfolio-item">
						<div class="row">
							<div class="col-lg-3">
								<a>
									<div class="card-img-top x-img" style="background-image: url({{ $item['imgUrl'] }});"></div>
								</a>
							</div>
							<div class="col-lg-9">
								<div class="card-body">
									<table width="100%">
										<tr>
											<td>zl/год</td>
											<td>{{ $item['pay'] }}</td>
										</tr>
										<tr>
											<td>місце роботи</td>
											<td>{{ $item['working'] }}</td>
										</tr>
										<tr>
											<td>Досвід роботи</td>
											<td>{{ $item['experience'] }}</td>
										</tr>
										<tr>
											<td>Знання мови</td>
											<td>{{ $item['language'] }}</td>
										</tr>
										<tr>
											<td>вік</td>
											<td>{{ $item['age'] }}</td>
										</tr>
									</table>
									<br/>
									<!-- <a href="#" class="btn btn-primary">Детальніше</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endforeach

<br/>
<br/>

@endif

</div>

@endsection

@section('footer')
	@include('site.footer')
@endsection