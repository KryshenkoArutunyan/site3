<?php
session_start();
$_SESSION=null;
session_unset();

//echo "CTCCBZ".$_SESSION['auth'];
//require_once "bd.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="shortcut icon" href="arena.ico" type="image/x-icon">
<meta charset="utf-8">
<title>Arena Water Instinct</title>
</head>
<body>
 <header class="header">
<img src="кор.jpg" class="kor">
<a href="#1"><input type="button" value="Товары" class="knopka1"></a>
<a href="index2.html"><input type="button" value="Профиль" class="knopka2"></a>
<a href="index3.html"><input type="button" value="О нас" class="knopka3" ></a>
<input type="button" value="Регистрация" class="reg" onclick="show('block')">
<input type="button" value="Вход" id="show" class="vhod">
<dialog>
<form align="center" method="POST" action="auth.php">
	<p>Логин:</p><input type="text" name="login" placeholder="Логин">
<p>Пароль:</p><input type="password" name="password" placeholder="Пароль">
<p><input type="submit" value="Вход" class="knopka10"></p>

</form>
<img class="knopka9" id="close" src="http://sergey-oganesyan.ru/wp-content/uploads/2014/01/close.png">
</dialog>

<h1 class="zag">Arena Water Instinct</h1>
</header>

<a name="1"><div class="container">
<input type="radio" name="slides" id="slide1" checked>
<input type="radio" name="slides" id="slide2">
<input type="radio" name="slides" id="slide3">
<input type="radio" name="slides" id="slide4">
<input type="radio" name="slides" id="slide5">
<input type="radio" name="slides" id="slide6">
	<div class="slider">
<div class="captions">
<div class="c2">Kup1</div>
<div class="c3">Kup2</div>
<div class="c4">Kup3</div>
<div class="c5">Kup4</div>
<div class="c6">Kup5</div>
</div>
<div class="img img1"> 
<div class="frag frag1"></div>
<div class="frag frag2"></div>
<div class="frag frag3"></div>
<div class="frag frag4"></div>
<div class="frag frag5"></div>
<div class="frag frag6"></div>
</div>
<div class="img img2">
<div class="frag frag1"></div>
<div class="frag frag2"></div>
<div class="frag frag3"></div>
<div class="frag frag4"></div>
<div class="frag frag5"></div>
<div class="frag frag6"></div>
</div>
<div class="img img3">
<div class="frag frag1"></div>
<div class="frag frag2"></div>
<div class="frag frag3"></div>
<div class="frag frag4"></div>
<div class="frag frag5"></div>
<div class="frag frag6"></div>
</div>
<div class="img img4">
<div class="frag frag1"></div>
<div class="frag frag2"></div>
<div class="frag frag3"></div>
<div class="frag frag4"></div>
<div class="frag frag5"></div>
<div class="frag frag6"></div>
</div>
<div class="img img5">
<div class="frag frag1"></div>
<div class="frag frag2"></div>
<div class="frag frag3"></div>
<div class="frag frag4"></div>
<div class="frag frag5"></div>
<div class="frag frag6"></div>
</div>
<div class="img img6">
<div class="frag frag1"></div>
<div class="frag frag2"></div>
<div class="frag frag3"></div>
<div class="frag frag4"></div>
<div class="frag frag5"></div>
<div class="frag frag6"></div>
</div>
</div>
<div class="side-controls">
<label for="slide1"></label>
<label for="slide2"></label>
<label for="slide3"></label>
<label for="slide4"></label>
<label for="slide5"></label>
<label for="slide6"></label>
</div>
<div class="controls">
<label for="slide1"></label>
<label for="slide2"></label>
<label for="slide3"></label>
<label for="slide4"></label>
<label for="slide5"></label>
<label for="slide6"></label>
</div>
</div>

</a>
<section class="opisan" id="uas">
<p>Фирма Арена, созданная более 40 лет назад Хорстом Дасслером (сыном знаменитого основателя Adidas Ади Дасслера), к настоящему времени стала одним из главных в мире производителей стартовых гидрошорт и гидрокостюмов, купальников и плавок, очков, шапочек, аксессуаров и тренировочного инвентаря, спортивной одежды, обуви и сумок. Все эти товары предлагает наш интернет-магазин. Arena предпочитают профессиональные пловцы, любители водных видов спорта, люди, заботящиеся о своем здоровье и здоровье своих детей.</p>
<p>Передовые технологии, современный дизайн, непрерывное совершенствование своей продукции, понимание потребностей спортсмена – аспекты, которым в Arena уделяют особенное внимание. Именно поэтому девиз компании и пловцов, которые ее выбирают – победа, и только победа!</p>
<p>Тем, кто хочет выгодно приобрести товары Арена для плавания, не найти более подходящего сайта, чем наш. </p>	
</section>
<section class="opisan" id="qaw">
<p>

1-3)Купальник: W SOLID LIGHTECH HIGH(Black,Red,Fresia rose)
<p>Цена:2 800р</p>

<p>4)Плавки:M ODENSE LOW WAIST SHORT</p>
<p>Цена:3 010р</p>

<p>5)Плавки:M BACKJUMP SHORT</p>
<p>Цена:2 665р</p>

<p>6)Плавки:M BACKJUMP BRIEF</p>
<p>Цена:2 275р</p>
</section>
<section>
	<input type="button" value="В корзину" class="knopka4">
<input type="button" value="Подробно" class="knopka5" id="sed">
<a href="javascript:PopUpShow()"><input type="button" value="Оставить отзыв" class="knopka6" ></a>
</section>

<div class="b-popup" id="popup1" >
    <div class="b-popup-content">
        <a href="javascript:PopUpHide()"><img class="knopka7" onclick="show('none')" src="http://sergey-oganesyan.ru/wp-content/uploads/2014/01/close.png"></a>
        <form action="reviews.php" method="POST">
    <input type="text" placeholder="ФИО" name="fio" />
    <textarea placeholder="Сообщение" name="message" rows="10" cols="47"></textarea>
    <input type="submit" value="Отправить" class="knopka8"/>
</form>
  
    </div>
</div>

					<!-- Задний прозрачный фон-->
		<div onclick="show('none')" id="wrap"></div>

					<!-- Само окно-->
			<div id="window">
						
						 <!-- Картинка крестика-->
				<img class="close" onclick="show('none')" src="http://sergey-oganesyan.ru/wp-content/uploads/2014/01/close.png">
				<form name="form" align="center" method="POST" action="send.php" >
<p>E-mail:</p><input type="email" id="E1" required placeholder="E-mail" name="email">
<p>ФИО:</p><input type="text" id="p1" placeholder="ФИО" name="fio">
<p>Телефон:</p><input type="phone" id="p2" placeholder="Телефон" name="phone">
<p>Логин:</p><input type="text" name="login" placeholder="Логин">
<p>Пароль:</p><input type="password" name="password" placeholder="Пароль">
 <p><input name="subm" type="submit" value="Зарегистрироваться" class="zareg" ></p>	
</div>
<footer><a>Arena Water Instinct ©2017.All Rights Reserved</a></footer>
	
		
		

<script src="index.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.6/prefixfree.min.js"></script>
<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>



<script>
    $(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        PopUpHide("#popup1");
    });
    //Функция отображения PopUp
    function PopUpShow(){
        $("#popup1").show();
    }
    //Функция скрытия PopUp
    function PopUpHide(){
        $("#popup1").hide();
    }
</script>


<script type="text/javascript">

					//Функция показа
			function show(state){

					document.getElementById('window').style.display = state;			
					document.getElementById('wrap').style.display = state; 			
			}
			


</script>


<script type = text/javascript>
var dialog = document.querySelector('dialog');
document.querySelector('#show').onclick = function() {
dialog.showModal();
};
document.querySelector('#close').onclick = function() {
dialog.close();
};
</script>
</body>
</html>