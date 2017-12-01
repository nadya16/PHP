<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="title" content="" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="js/up.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
</script>

</head>
<!-- основной блок -->
<div id="wrapper">
 <div id="middle">
  <div id="container">
  <div id="content">
      <?php require 'bloks/header.php';?>
<!-- между метками AAA и BBB будем писать все наполнение сайта -->
<?php require 'bloks/header_menu.php'; ?>
<br>
    
<div class="carusel1">
<?php require 'bloks/carusel.php';?>
    
</div>
  <script>
var controls = document.querySelectorAll('.controls'); 
for(var i=0; i<controls.length; i++){ 
controls[i].style.display = 'inline-block'; 
} 

var slides = document.querySelectorAll('#slides .slide'); 
var currentSlide = 0; 
var slideInterval = setInterval(nextSlide,3000); 

function nextSlide(){ 
goToSlide(currentSlide+1); 
} 

function previousSlide(){ 
goToSlide(currentSlide-1); 
} 

function goToSlide(n){ 
slides[currentSlide].className = 'slide'; 
currentSlide = (n+slides.length)%slides.length; 
slides[currentSlide].className = 'slide showing'; 
} 

</script> 

<br>
<br>
<section id="Контакты">	
<?php require 'bloks/header_servises.php'; ?>
<br>	
    
<table>
  <tr>
<td><p class="p_adress">пр. Филатова, 90</p></td>
<td><p class="p_adress">ул. Баумана, 40</p></td>
<td><p class="p_adress">ул. Ленина, 99/1</p></td>
<td><p class="p_adress">пер. Маяковского, 24</p></td>
</tr>
<tr>
 <td><img src="img/auto1.jpg"></td>
<td><img src="img/auto2.jpg" ></td>
<td><img src="img/auto3.jpg"></td>
<td><img src="img/auto4.jpg"></td>
</tr>
</table>
	</section>
<br>
<p class="p_h">
Ваш автосервис в Ульяновске -
сервис "Автосеть Гараж"
</p>
<br>
<p class="p_text" >
«Автосеть Гараж» предлагает полный спектр услуг в плане обслуживания и ремонта автомобилей,
а также осуществляет продажу запчастей.
 </p>
<br>
    <section id="Услуги">
<p class="p_h1">Услуги автосервиса"Автосеть Гараж"</p>
<br>


<table>
  <tr>
<td ><p class="p_h1">Ремонт автомобилей</p></td><td><p class="p_h1">Автомойка</p></td>
  </tr>
<tr>
<td >
<p class="p_text">К нам можно обратиться за ремонтом двигателя, трансмиссии, автоэлектрики, ходовой части, кузова, а также заменой стекол, масел, фильтров и т.д.</p>
</td>
<td>
<p class="p_text">Вы можете заказать в нашем автосервисе и услуги по мойке и полировке кузова, химчистке салона.</p>
</td>
</tr>
 <tr>
<td ><p class="p_h1"><img src="img/remont_avto.jpg"></p></td><td><p class="p_h1"><img src="img/avtomojka.jpg"></p></td>
  </tr>
  <tr>
<td ><p class="p_h1">Шиномонтаж</p></td><td><p class="p_h1">Тонировка</p></td>
  </tr>
<tr>
<td>
<p class="p_text">Автосервис «Гараж» оказывает все услуги, связанные с заменой и балансировкой шин.</p>
</td>
<td>
<p class="p_text">Мы предлагаем профессиональное тонирование стекол автомобилей высококачественными пленками всех видов.</p>
</td>
</tr>
</table>

    </section>

<p class="p_h1">
Преимущества услуг нашего автосервиса для ВАЗ и других авто<br><br>
</p>
<p class="p_text" >
Есть несколько причин, почему, сравнивая разные автосервисы с «Автосеть Гараж»,многие автолюбители отдают предпочтение именно нам.<br>
<p class="p_list" >
    1.Наши мастера являются специалистами в своем деле. Они выполняют все работы не только быстро,но и максимально профессионально. <br>
<p class="p_list" >
     2.Мы практикуем индивидуальный подход к каждому клиенту. За какими бы услугами вы ни решили обратиться в автосервис – на ВАЗ или другие отечественные либо зарубежные автомобили, ­– вы всегда можете рассчитывать на качественное обслуживание.<br>
<p class="p_list" >
    3.У нас действует гибкая ценовая политика, предусматривающая скидки для постоянных заказчиков.
</p></p></p>
<br>
<p class="p_text" >
Все это позволяет нам с уверенностью утверждать, что в следующий раз, когда у вас возникнет необходимость в услугах автосервиса, вы обратитесь именно в «Автосеть Гараж».
</p>
<br>
<p class="p_h1">
Оптимальные цены на услуги автосервиса и запчасти
</p>
<p class="p_text">
Мы рады отметить, что на все услуги и детали, которые предлагает наш автосервис, цены остаются доступными как для крупных организаций, так и простых автовладельцев.
</p>
<p class ="p_h">Ждём Вас! <a href="if.php"><input value="Записаться в сервис" type="button"></a>
</p>

<div id="upbutton"></div>

<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            if ($('#upbutton').is(':hidden')) {
                $('#upbutton').css({opacity : 1}).fadeIn('slow');
            }
        } else { $('#upbutton').stop(true, false).fadeOut('fast'); }
    });
    $('#upbutton').click(function() {
        $('html, body').stop().animate({scrollTop : 0}, 300);
    });
</script>

<style>
  #upbutton {
    background: url("img/up.png") no-repeat top left;
    height: 60px;
    width: 60px;
    bottom: 30px;
    right: 30px;
    cursor: pointer;
    display: none;
    position: fixed;
    z-index: 999;
  }
</style>


<!-- BBB -->
<!-- наполнение сайта - наш контент -->
  </div><!-- #content-->
</div><!-- #container-->
   
</div>
 
<?php require 'bloks/footer.php'; ?>
</div>
