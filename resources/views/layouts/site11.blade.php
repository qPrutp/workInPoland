<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Work in Poland</title>
  	<link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/png">

	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

  	<!-- carousel -->
	<link rel="stylesheet" href="css/media.css" media="all and (max-width: 900px)"> 

</head>
<body>
	<!--Header_section-->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">PR<i class="fa fa-circle"></i>GER</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#dws-slider">головна</a></li>
			        <li><a href="#vacancys">вакансії</a></li>
			        <li><a href="#documents">документи</a></li>
			        <li><a href="#contacts">контакти</a></li>
			        <li><a href="#reviews">відгуки</a></li>
			        <li><a href="#map">карта</a></li>
			        <li><a href="#write_us"><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<h1>Робота в Польщі</h1>
					<h2>ми вам допоможемо</h2>
				</div>
			</div>
		</div>
	</div>
	<!--/Header_section-->

	<!--Carousel_section-->
<!-- slider -->
<div id="slider" class="carousel slide" data-ride="carousel">
<!-- controls -->
<ol class="carousel-indicators">
<li data-target="#slider" data-slide-to="0" class="active"></li>
<li data-target="#slider" data-slide-to="1"></li>
<li data-target="#slider" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<!-- slides -->
<div class="item active">
<div class="container">
<div class="carousel-caption">
<h1>Lorem ipsum - 1</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet tempus massa. Nam quis purus sit amet augue iaculis dapibus non in nisi.<br />Sed sed volutpat neque. Nulla posuere.</p>
<p><a class="btn btn-lg btn-default" href="#" role="button">Button 1</a></p>
</div>
</div>
</div>
<div class="item">
<div class="container">
<div class="carousel-caption">
<h1>Lorem ipsum - 2</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet tempus massa. Nam quis purus sit amet augue iaculis dapibus non in nisi.<br />Sed sed volutpat neque. Nulla posuere.</p>
<p><a class="btn btn-lg btn-primary" href="#" role="button">Button 2</a></p>
</div>
</div>
</div>
<div class="item">
<div class="container">
<div class="carousel-caption">
<h1>Lorem ipsum - 3</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet tempus massa. Nam quis purus sit amet augue iaculis dapibus non in nisi.<br />Sed sed volutpat neque. Nulla posuere.</p>
<p><a class="btn btn-lg btn-warning" href="#" role="button">Button 3</a></p>
</div>
</div>
</div>
</div>
<!-- left-right controls -->
<a class="left carousel-control" href="#slider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
<a class="right carousel-control" href="#slider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->




	<div id="dws-slider" class="carousel slide" data-interval="5000" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
		   <div class="item active"><img src="assets/img/vizu1.jpg" alt="Картинка 1">
		      <div class="carousel-caption">
		         <h2 class="text-uppercase">ОФОРМЛЕННЯ</h2>
		         <p>БЕЗ ПІДБОРУ ВАКАНСІЙ</p>
		         <h2>3000 грн</h2>
		      </div>
		   </div>
		   <div class="item"><img src="assets/img/vizu2.jpeg" alt="Картинка 2">
		      <div class="carousel-caption">
		         <h2 class="text-uppercase">ПРАЦЕВЛАШТУВАННЯ</h2>
				<p>ПО БІОМЕТРИЧНОМУ ПАСПОРТУ</p>
				<h2>2000 грн</h2>
		      </div>
		   </div>
		   <div class="item"><img src="assets/img/vizu3.jpg" alt="Картинка 3">
		      <div class="carousel-caption">
		         <h2 class="text-uppercase">Оформлення повного</h2>
				<p>пакету документів:</p>
				<h2>3000 грн</h2>
		      </div>
		   </div>
		</div>
		<a class="left carousel-control" href="#dws-slider" role="button" data-slide="prev">
		   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		   <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#dws-slider" role="button" data-slide="next">
		   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		   <span class="sr-only">Next</span>
		</a>
		<ol class="carousel-indicators">
		   <li data-target="#dws-slider" data-slide-to="0" class="active"></li>
		   <li data-target="#dws-slider" data-slide-to="1"></li>
		   <li data-target="#dws-slider" data-slide-to="2"></li>
		</ol>
	</div>
	<script>
    	$('.carousel').carousel({
        	interval: false
    	})
	</script>
	<!--/Carousel_section-->

	<!--Vacancys_section-->
	<div id="vacancys">
		<div class="container">
			<div class="row centered">
				<br>
				<div class="col-lg-3">
					<table class="table table-striped">
					    <caption>Пакування свічок, сортування на брак/не брак</caption>
					    <thead>
					        <tr>
								<th>zl/год</th>
								<th>місце роботи</th>
								<th>проживання</th>
								<th>досвід роботи</th>
								<th>вік</th>
								<th>знання мови</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td>Европа</td>
					            <td>Франция</td>
					            <td>Париж</td>
					        </tr>
					        <tr>
					            <td>Азия</td>
					            <td>Камбоджа</td>
					            <td>Пном-Пень</td>
					        </tr>
					        <tr>
					            <td>Северная америка</td>
					            <td>США</td>
					            <td>Вашингтон</td>
					        </tr>
					    </tbody>
					</table>
				</div>

				<!-- <div class="col-lg-3">
					<table>
					  <caption>
					    Пакування свічок, сортування на брак/не брак
					  </caption>
				  	</table>
					<ul>
						<il>з/п в zl/год</il>
						<il>місце роботи</il>
						<il>проживання</il>
						<il>досвід роботи</il>
						<il>вік</il>
						<il>знання мови</il>
					</ul>
				</div>
				<div class="col-lg-3">
					<h4>LG ELECTRONIX</h4>
					<ul>
						<il>з/п в zl/год</il>
						<il>місце роботи</il>
						<il>проживання</il>
						<il>досвід роботи</il>
						<il>вік</il>
						<il>знання мови</il>
					</ul>
				</div>
				<div class="col-lg-3">
					<h4>Автомобільний завод CENTRUM-BMW</h4>
					<ul>
						<il>з/п в zl/год</il>
						<il>місце роботи</il>
						<il>проживання</il>
						<il>досвід роботи</il>
						<il>вік</il>
						<il>знання мови</il>
					</ul>
				</div> -->					
			</div>
		</div>
	</div>
	<!--/Vacancys_section-->

	<!--Contacts_section-->
	<div id="contacts">
		<div class="container">
			<div class="row centered">
				<br>
				<div class="col-lg-12">
					<div class="col-lg-6">
						<div class="">
							<h3>м. Вінниця, вул.Заози Петросяновича 12 "Дім Гаврард" оф.23</h3>  
							<p><i class="fa fa-phone" aria-hidden="true"></i> тел.:</p>
							<ul>
								<li>097 000 00 00</li>
								<li>093 000 00 00</li>
								<li>067 000 00 00</li>
								<li>050 000 00 00</li>
								<li>098 000 00 00</li>
							</ul>
							<p><i class="fa fa-envelope-o" aria-hidden="true"></i> email: admin_sobaka@admin.com</p>
						</div>
						<div class=""><button type="button" class="btn btn-info btn-md"><a href="#map">На карті</a></button></div><br>       
					</div>
					<div class=" col-lg-6"><img src="{{ asset('assets/img/office.jpg') }}" class="img-rounded center-block" alt=""></div>
				</div>
			</div>
		</div>
	</div>
	<!--/Contacts_section-->

	<!--Write_us_section-->
	<h1 class="h2 page-header text-center">Звяжіться з нами за допомогою електронної пошчи</h1> 
	 
	  <div id="write_us" class="container">
	    <div class="row">
	      <div class="col-sm-6 col-sm-offset-3">
	        <!-- Контейнер, содержащий форму обратной связи -->
	        <div class="panel panel-info">
	          <!-- Заголовок контейнера -->
	          <div class="panel-heading">
	            <h3 class="panel-title">Форма зворотнього звязку</h3>
	          </div>
	          <!-- Содержимое контейнера -->
	          <div class="panel-body">
	 
	            <!-- Сообщение, отображаемое в случае успешной отправки данных -->
	            <div class="alert alert-success hidden" role="alert" id="successMessage">
	              <strong>Внимание!</strong> Ваше сообщение успешно отправлено.
	            </div>
	 
	            <!-- Форма обратной связи -->
	            <form id="contactForm">
	              <div class="row">
	 
	                
	                <div id="error" class="col-sm-12" style="color: #ff0000; margin-top: 5px; margin-bottom: 5px;"></div>
	                
	                <!-- Имя и email пользователя -->                
	                <div class="col-sm-6">
	                  <!-- Имя пользователя -->
	                  <div class="form-group has-feedback">
	                    <label for="name" class="control-label">Введите ваше имя:</label>
	                    <input type="text" id="name" name="name" class="form-control" required="required" value="" placeholder="Например, Иван Иванович" minlength="2" maxlength="30">
	                    <span class="glyphicon form-control-feedback"></span>
	                  </div>
	                </div>
	                <div class="col-sm-6">
	                  <!-- Email пользователя -->
	                  <div class="form-group has-feedback">
	                    <label for="email" class="control-label">Введите адрес email:</label>
	                    <input type="email" id="email" name="email" class="form-control" required="required"  value="" placeholder="Например, ivan@mail.ru" maxlength="30">
	                    <span class="glyphicon form-control-feedback"></span>
	                  </div>
	                </div>
	              </div>
	 
	              <!-- Сообщение пользователя -->
	              <div class="form-group has-feedback">
	                <label for="message" class="control-label">Введите сообщение:</label>
	                <textarea id="message" class="form-control" rows="3" placeholder="Введите сообщение от 20 до 500 символов" minlength="20" maxlength="500" required="required"></textarea>
	              </div>
	 
	              <hr>
	              <!-- Изображение, содержащее код капчи -->		  
		            <img id="img-captcha" src="/feedback/captcha.php">
	              <!-- Элемент, обновляющий код капчи -->
		            <div id="reload-captcha" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> Обновить</div>
		            <!-- Блок для ввода кода капчи -->
		            <div class="form-group has-feedback">
	                <label id="label-captcha" for="captcha" class="control-label">Пожалуйста, введите указанный на изображении код:</label>
		              <input id="text-captcha" name="captcha" type="text" class="form-control" required="required" value="" autocomplete="off" minlength="6" maxlength="6">
		              <span class="glyphicon form-control-feedback"></span>
	              </div>
	 
	              <!-- Кнопка, отправляющая форму -->  
	              <button type="submit" class="btn btn-primary pull-right">Отправить сообщение</button>
	            </form><!-- Конец формы -->
	 
	          </div>
	        </div><!-- Конец контейнера -->
	 
	      </div>
	    </div>
	  </div>
	<!--/Write_us_section-->

	<!--Map_section-->
	<section id="map">
	  <div class="inner_wrapper">
	    <div class="container">
	      <h2>як до нас добратись</h2>
	      <div class="inner_section">
	        <div class="row">
	          <p>Проезд от автовокзала на маршрутном такси № 295, 293 до остановки "Цирк" переходите дорогу к стороне цирка и по правой стороне 9-ти этажные дома, наш офис находится на против "Дворца молодежи и студентов".До автовокзала от железнодорожного вокзала можно доехать на маршрутном такси № 306,204. Наш адрес: Виталия Матусевича 6, офис 75.</p>
	          <h2>А ТУТ КАРТА ГУГЛ!</h2>
	        </div>  
	      </div>
	    </div> 
	  </div>
	</section>
	<!--/Map_section-->

	<!--Footer_section-->
	<footer class="container" style="width: 970px;
	margin: 0 auto;
	box-shadow: 0 0 0,1px 1px 1px #d5d5d5,-1px 1px 1px #d5d5d5;
	-moz-box-shadow: 0 0 0  ,1px 1px 1px #d5d5d5,-1px 1px 1px #d5d5d5;
	-webkit-box-shadow: 0 0 0  ,1px 1px 1px #d5d5d5,-1px 1px 1px #d5d5d5;">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="footer-inner">
					<span>Vasjan © 2018, Ras&Company <a href="http://intita.com//">SiteNaXalavu.com</a>. </span>
				</div>
			</div>
		</div>
	</footer>
	<!--/Footer_section-->

	<script src="https://code.jquery.com/jquery.min.js"></script>
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>