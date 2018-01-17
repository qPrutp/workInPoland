<!-- Carousel Section -->
@if(isset($carousels))

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">

		@foreach($carousels as $k=>$carousel)
			<li data-target="#carouselExampleIndicators" data-slide-to="$k" class="{{ ($k == 0) ? 'active' : '' }}"></li>
		@endforeach
	  <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
	</ol>
	<div class="carousel-inner" role="listbox">

@foreach($carousels as $k=>$carousel)

	<div class="carousel-item {{ ($k == 0) ? 'active' : '' }}" style="background-image: url('assets/img/{{ $carousel['images'] }}')">
		<div class="carousel-caption d-none d-md-block">
			{!! $carousel->text !!}
		</div>
	</div>

@endforeach

	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
</div>

@endif
<!-- /.row -->


<!-- Vacantions Section -->
<div id="vacantions" class="container">
	<hr/>

@if(isset($parsItems))

	<h2>Вакансії</h2>

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
											<td>вік</td>
											<td>{{ $item['age'] }}</td>
										</tr>
									</table>
									<br/>
									<a href="#" class="btn btn-primary">Детальніше</a>
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
<!-- /.row -->


<!-- Documents Section -->
<div id="documents" class="row">
	<div class="col-lg-6">
		<h2>Документи</h2>
		<ul>
			<li>
				<strong>Закордонний паспорт</strong>
			</li>
			<li>Український паспорт</li>
			<li>Приписка</li>
			<li>Ідентифікаційний код</li>
		</ul>
		<p>Перелік необхідних документів. В окремих випадках інші документи.</p>
	</div>
	<div class="col-lg-6">
		<img class="img-fluid rounded" src="{{ asset('assets/img/documents.jpg') }}" alt="">
	</div>
</div>
<br/>
<br/>
<!-- /.row -->

<!-- Contact Section -->
<div  id="contact" class="row">
	<div class="col-lg-8 mb-4">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.3018042553285!2d28.481336815632865!3d49.232766929326004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472d5b6e7e4dc8d7%3A0x8b177ea12fca01fa!2z0J7RgdGC0YDRltCyINCa0LXQvNC_0LA!5e0!3m2!1suk!2sua!4v1515489086352" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="col-lg-4 mb-4">
		<h3>Контакти</h3>
		<h5>м. Вінниця<br/>
		вул.Заози Петросяновича 12 "Дім Гаврард" оф.23</h5>
		<hr/>
		<table width="100%">
			<tr>
				<td><abbr title="Phone"><i class="fa fa-phone" aria-hidden="true"></i></abbr> :</td>
				<td>097 000 00 00</td>
			</tr>
			<tr>
				<td></td>
				<td>093 000 00 00</td>
			</tr>
			<tr>
				<td></td>
				<td>067 000 00 00</td>
			</tr>
			<tr>
				<td></td>
				<td>050 000 00 00</td>
			</tr>
			<tr>
				<td></td>
				<td>098 000 00 00</td>
			</tr>
			<tr>
				<td><abbr title="Email"><i class="fa fa-envelope-o" aria-hidden="true"></i></abbr> :</td>
				<td>admin_sobaka@admin.com</td>
			</tr>
			<tr>
				<td><abbr title="Hours"><i class="fa fa-hourglass-half" aria-hidden="true"></i></abbr> :</td>
				<td>Понеділок - П'ятнийя: 8:00 до 14:00</td>
			</tr>
		</table>
	</div>
</div>
<br>
<br>
<!-- /.row -->


<!-- WriteUs Form -->
	<div id="write_us" class="row">
		<div class="col-lg-5">
			<h4>Заповніть заявку, вказавши Ваші контактні дані для зворотнього зв'язку. Ми зв'яжимось з Вами в накорочший термін.</h4>
			<form name="sentMessage" id="contactForm" novalidate action="{{ route('home') }}" method="post">
				<div class="control-group form-group">
					<div class="controls">
						<label><i class="fa fa-user" aria-hidden="true"></i> Як Вас звати?</label>
						<input type="text" class="form-control" id="name" name="name">
					</div>
				</div>
				<!-- <div class="control-group form-group">
					<div class="controls">
						<label><i class="fa fa-phone" aria-hidden="true"></i> Ваш контактний телефон:</label>
						<input type="tel" class="form-control" id="phone">
					</div>
				</div> -->
				<div class="control-group form-group">
					<div class="controls">
						<label><i class="fa fa-envelope" aria-hidden="true"></i> Email для звязку:</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
				</div>
				<div class="control-group form-group">
					<div class="controls">
						<label><i class="fa fa-pencil" aria-hidden="true"></i> Текст повідомлення:</label>
						<textarea rows="10" cols="100" class="form-control" id="message"  name="text" maxlength="999" style="resize:none"></textarea>
					</div>
				</div>
				<div id="success"></div>
				<button type="submit" class="btn btn-primary" id="sendMessageButton">Надіслати</button>

				{{ csrf_field() }}

			</form>
		</div>
	</div>
	<br/>
	<br/>
<!-- /.row -->



<!-- Reviews Section -->

	@if(isset($reviews))

	<h1 id="reviews" class="mt-4 mb-3">Відгуки
		<small>про нас</small>
	</h1>
	
	<div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">

		@foreach($reviews as $k=>$review)

			<div class="card">
				<div class="card-header spoiler_links" role="tab">
					<h5 class="mb-0">
						<a class=" {{ ($k == 0) ? '' : 'collapsed' }}" data-toggle="collapse" data-parent="#accordion" href="" aria-expanded="true">{{ $review['name'] }}</a>
					</h5>
				</div>
				<div class="spoiler_body" style='{{ ($k == 0) ? '' : 'display:none' }}' role="tabpanel">
					<div class="card-body">
						{{ $review['text'] }}
					</div>
				</div>
			</div>

		@endforeach

		<br>
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
			Додати відгук
		</button>
	</div>

	@endif

	<br>
	<br>
</div>
<!-- /.row -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Відгук про нас</h4>
			</div>
			<div class="modal-body">
				<!-- Comments Form -->
				<div class="card my-4">
					<div class="card-body">
						<form>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name">
							</div>
							<div class="form-group">
								<textarea class="form-control"
							placeholder="Description" rows="3"></textarea>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Закрити</button>
				<button type="button" class="btn btn-primary">Надіслати</button>
			</div>
		</div>
	</div>
</div>
<!-- /.row -->

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">
    	<span>
    		Vasjan &copy; 2018, Ras&Company 
    		<a href="http://intita.com//">SiteNaXalavu.com</a>. 
   		</span>
	</p>
  </div>
</footer>