<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Work in Poland</title>
  <link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/png">
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

  <!-- Таблица стилей CSS -->
<style type="text/css">
.carousel .item{
  background: #333;    
  text-align: center;
  height: 250px !important;
}
.carousel h2{
  color: #fff;
  margin: 0;
  padding-top: 20px;
  font-size: 48px;
}
.carousel h3{
  color: #fff;
  font-size: 40px;
}
.carousel p{
  color: #fff;
  font-weight: bold;
  font-size: 30px;
  margin-top: 30px;
  margin-bottom: 40px;
}
</style>

<style>
@font-face {
 font-family: 'Lobster';
 font-style: normal;
 font-weight: 400;
 src: local('Lobster'), local('Lobster-Regular'),
 url(http://bootstraptema.ru/snippets/font/2016/lobster/Lobster.woff) format('woff'),
 url(http://bootstraptema.ru/snippets/font/2016/lobster/Lobster.ttf) format('truetype');
}
#map {
width: 100%; /* Ширина карты */
height: 400px; /* Высота карты */ 
}
.info-window h3 {
font-family: 'Lobster'; /* Шрифт заголовка описания */
color: #694198; /* Цвет заголовка описания */
}
.info-content {
color: #777; /* Цвет контента описания */
}
</style>

</head>
<body>

<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo"><a href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a></div>
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
      <div id="main-nav" class="collapse navbar-collapse navStyle">
      <ul class="nav navbar-nav" id="mainNav">
        <li class="active"><a href="#testCarousel" class="scroll-link">головна</a></li>
        <li><a href="#vacancys" class="scroll-link">вакансії</a></li>
        <li><a href="#documents" class="scroll-link">документи</a></li>
        <li><a href="#contacts" class="scroll-link">контакти</a></li>
        <li><a href="#reviews" class="scroll-link">відгуки</a></li>
        <li><a href="#write_us" class="scroll-link">написати нам</a></li>
        <li><a href="#map" class="scroll-link">карта</a></li>
      </ul>
      </div>
   </nav>
    </div>
  </div>
</header>
<!--/Header_section--> 

<!--Carousel_section-->
<div id="testCarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
  <div class="carousel-inner">
    <div class="item active" style="background-image: url(assets/img/vizu1.jpg);">
      <h2>ОФОРМЛЕННЯ</h2>
      <p>БЕЗ ПІДБОРУ ВАКАНСІЙ</p>
      <h3>3000 грн</h3>
    </div>
    <div class="item" style="background-image: url(assets/img/vizu2.jpeg);">
      <h2>ПРАЦЕВЛАШТУВАННЯ</h2>
      <p>ПО БІОМЕТРИЧНОМУ ПАСПОРТУ</p>
      <h3>2000 грн</h3>
    </div>
    <div class="item" style="background-image: url(assets/img/vizu3.jpg);">
      <h2>Оформлення повного</h2>
      <p>пакету документів:</p>
      <h3>3000 грн</h3>
    </div>
  </div>

  <a class="left carousel-control" href="#testCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#testCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
<!--/Carousel_section-->

<!--Vacancys_section-->
<section id="vacancys">
  <div class="inner_wrapper">
    <div class="container">
      <h2>вакансії</h2>
      <div class="inner_section">
        <div class="row">
          <ul>
            <li> Інжінєр 2к євро<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="{{ asset('assets/img/vizu2.jpeg') }}" class="img-circle delay-03s animated wow zoomIn" alt="">  </div></li>
            <li>Не інжінєр 3к євро<div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="{{ asset('assets/img/vizu3.jpg') }}" class="img-circle delay-03s animated wow zoomIn" alt="">  </div></li>
          </ul>  
        </div>  
      </div>
    </div> 
  </div>
</section>
<!--/Vacancys_section-->

<!--Documents_section-->
<section id="documents" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated"> 
              <h2>ПРОЦЕСС ОФОРМЛЕНИЯ <strong>РАБОЧЕЙ ВИЗЫ</strong> И ТРУДОУСТРОЙСТВА В ПОЛЬШУ</h2>
              <p>Наша компания Work in Poland уже как семь лет является одной из ведущих компаний по трудоустройству за границей. Основная наша задача – помощь с оформлением рабочей визы и с выбором вакансии.</p>
              <p>Кроме того, мы поможем Вам оформить загранпаспорт, приглашения 180/365, медицинское страхование и регистрацию в визовом центре Польши, анкету для подачи.</p>
              <p>Наши менеджера подберут вакансию в Польше, как хорошим специалистам, так и неквалифицированным соискателям возрастом от 18-ти лет в любой сфере (строительной, инженерной, транспортной, промышленной и т.д.)</p>
            </div>
          </div>
          <div class="col-lg-7 col-sm-5">
            <img src="{{ asset('assets/img/vizu3.jpg') }}" class="zoomIn wow animated" alt="" />
          </div>
          <div>
<div>
<p>Комплект документов:</p>
<ul>
<li>Гражданский паспорт.</li>
<li>Загранпаспорт.</li>
<li>ИНН.</li>
<li>Первая предоплата 2250 грн.</li>
<li>Фото 3,5 на 4,5 см.</li>
</ul>
</div>
<div>
<p>Оформление полного пакета документов стоит 4500 грн + оплата визового сбора 18,5 евро. В него входит:</p>
<ul>
<li>приглашение от польского работодателя (180/365)</li>
<li>перевод необходимых документов на язык работодателя</li>
<li>заполнение визовой анкеты</li>
<li>медицинское страхование</li>
<li>>подбор вакансии в Польше</li>
<li>помощь на протяжении всего срока действия визы</li>
</ul>
</div>
<div>
<p>При заключении договора предоплата составляет 2250 грн., после когда все документы будут готовы и перейдут к Вам, с актом выполненных услуг Вы вносите остальную сумму.</p>
<p>Примерный срок оформления занимает от 1го месяца до 2,5 в зависимости от вашей прописки.</p>
</div>
</div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Documents_section-->

<!--Contacts_section-->
<section id="contacts">
<div class="inner_wrapper">
  <div class="container">
    <h2>Контакти</h2>
    <div class="inner_section">
  <div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="{{ asset('assets/img/vizu2.jpeg') }}" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
        <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
          <div class=" delay-01s animated fadeInDown wow animated">
            <h3>м. Вінниця, вул.Заози Петросяновича 12 "Дім Гаврард" оф.23</h3>  
            <div>
               <p>тел.:</p>
               <ul>
                <li>097 000 00 00</li>
                <li>093 000 00 00</li>
                <li>067 000 00 00</li>
                <li>050 000 00 00</li>
                <li>098 000 00 00</li>
              </ul>
              <p>email: admin_sobaka@admin.com</p>
            </div>         
          </div>
          <div class="work_bottom"> <span>Подивитись на карті місце розташування офісу</span> <a href="#map" class="contact_btn">На карті</a> </div>       
          </div> 
      </div>  
    </div>
  </div> 
  </div>
</section>
<!--/Contacts_section-->

<!--Reviews_section-->
<section id="reviews">
  <div class="inner_wrapper">
    <div class="container">
      <h2>відгуки</h2>
      <div class="inner_section">
        <div class="row">
          <ul>
            <li>Ваше нарнамальна така фірма дуже понравилось.</li>
            <li>Відповідальні і взагалі якісно та швидко.</li>
          </ul>  
        </div>  
      </div>
    </div> 
  </div>
</section>
<!--/Reviews_section-->

<!--Write_us_section-->
  <div id="write_us" class="container">
    <section class="page_section contact">
      <div class="inner_wrapper">
        <h2>звяжіться з нами</h2>
        <div class="row">
          <div class="col-lg-4">
            
          </div>
          <div class="col-lg-4">
           
          </div>
          <div class="col-lg-4">
          
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft"> 
     <div class="contact_info">
                            <div class="detail">
                                <h4>Бро, ім'я</h4>
                                <p>104, Some street, NewYork, USA</p>
                            </div>
                            <div class="detail">
                                <h4>call us</h4>
                                <p>+1 234 567890</p>
                            </div>
                            <div class="detail">
                                <h4>Email us</h4>
                                <p>support@sitename.com</p>
                            </div> 
                        </div>
            
        
          
          <ul class="social_links">
            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li> 
          </ul>
        </div>
        <div class="col-lg-8 wow fadeInLeft delay-06s">
          <div class="form">
            <input class="input-text" type="text" name="" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <input class="input-text" type="text" name="" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <textarea class="input-text text-area" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
            <input class="input-btn" type="submit" value="send message">
          </div>
        </div>
      </div>
    </section>
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
<footer class="footer_wrapper">
  <div class="container">
    <div class="footer_bottom"><span>Vasjan © 2018, Ras&Company <a href="http://intita.com//">SiteNaXalavu.com</a>. </span> </div>
  </div>
</footer>
<!--/Footer_section-->

<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


<script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery-scrolltofixed.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>