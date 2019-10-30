<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Каталог продукции</title>
	<link rel="stylesheet" href="css/style.css">
	<title>	</title>
</head>
<body>
	<?php
	 include_once ("php/db_conect.php");
?>
	<header>	
		<div class="container">	
				<div class="heding clearfix">
				<img src="../../img/logo.png" alt="Torto-Mash" class="logo">
				<nav>
				<ul class="menu">
					<li>
						<a href="../../index.html">Главная</a>
					</li>
					<li>
						<a href="../index.php">Каталог Продукции</a>
					</li>
					<li>
						<a href="../../filling/index.html">Начинки</a>
					</li>
					<li>
						<a href="../../contact/index.html">Контакты</a>
					</li>
					<li>
						<a href="../../aboutme/index.html">О себе</a>
					</li>
				</ul>
				</nav>
				<div class="social">
				<a href="https://www.instagram.com/torto_mash/">
					<img src="../../img/instogram.png" alt="Инстаграм">
				</a>
				<!--<a href="#">
					<img src="../../img/vk.png" alt="Вконтакте">
				</a>-->
			</div>
			</div>
		</div>
	</header>
	<section class="clearfix">	
		<div class="container">	
			<div id="mainmenu">
				<ul>
					<li>
						<a href="../index.php">На праздник</a>
					</li>
					<li>
						<a href="../childs/index.php">Детские</a>
					</li>
					<li>
						<a href="../foroneyears/index.php">На один годик</a>
					</li>
					<li>
						<a href="../corporates/index.php">Корпоративные</a>
					</li>
					<li>
						<a href="../womens/index.php">Женщинам</a>
					</li>
					<li>
						<a href="index.php">Мужчинам</a>
					</li>
					<li>
						<a href="../cupcakes/index.php">Капкейки</a>
					</li>
				</ul>
				</div>
				<div class="goods">
					<?php
						$result = mysql_query("SELECT * FROM mens", $link);
					if (mysql_num_rows($result)>0) 
					{
						$row =mysql_fetch_array($result);

						do {
							
							echo '
								<div class="single-goods">
								<img class="razmer" src="../img/goods/men/'.$row["img"].'" alt="">
								<div class="overlei">
									<p>'.$row["number"].'</P>
									<a data-id="'.$row["id"].'" class="zakaz-card" onclick="text_out()" href="#openModal">Оформить заказ</a>
									<div class="lain"></div>
								</div>
								</div>
							';
						} 
						while ( $row =mysql_fetch_array($result));
					}
					?>
				</div>


				<div id="openModal" class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3  class="modal-title">Номер торта -</h3>
        <p id="text_change"> </p>
        <a href="#close" title="Close" class="close">×</a>
      </div>
      <div class="modal-body">    
        
      <img name="img" class="img_forma" src=" " alt="">
			<h4>Хотите заказать похожий торт или рассчитать его стоимость?</h4>
			<p class="text">Оставьте свои контакты, чтобы утвердить дизайн, начинку, вес и цену торта с нашим менеджером.</p>
		<form method="POST"  action="https://formfor.site/send/J8Saah9fgH13gyZPumlclx2biJ2EeM">
		<input type="hidden" name="article" id="input1" value="">
 		<input class="input_width" type="telefon" name="telefon"  placeholder="Введите ваш телефон"/>
 		<input class="input_width" name="name"  placeholder="Введите ваше имя"/>  <br>
 		<button class="botn_stil pozicia" href="../trade/index.html" type="submit" onClick="alert('Спасибо за проявленный интерес! Мы свяжемся с вами в ближайшее время.')">Перезвоните мне</button>
 		<div class="centr">
 		 <p class="soglasie">
			Нажимая на кнопку "Перезвоните мне",
вы даёте своё согласие на <a class="ssilka-color" id="go" href="">обработку персональных данных.</a>
	</p>
	 
	<p class="p_text">Или просто позвоните по номеру</p>
		<p class="namder">+7 (961) 993-50-42</p>
		</div>
		</form>
			<div id="modal_form"><!-- Сaмo oкнo --> 
      <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть --> 
      Согласие на обработку персональных данных. <br>
<br>
Пользователь, отправляя заявку на интернет-сайте Torto-Mash.ru, обязуется принять настоящее Согласие на обработку персональных данных (далее — Согласие), размещенное по адресу https://Torto-Mash.ru. Принятием (акцептом) оферты Согласия является подтверждение факта согласия Пользователя со всеми пунктами Согласия. Пользователь дает свое согласие ИП Панина М.С. (далее по тексту – Оператор), которому принадлежит сайт Torto-Mash.ru, на обработку своих персональных данных с условиями, прописанными в данном Соглашении.<br>
<br>
Персональные данные – любая информация, относящаяся к определенному или определяемому на основании такой информации физическому лицу. Настоящее Соглашение выдано мною на обработку следующих персональных данных:<br>
<br>
Персональные данные - это информация, относящаяся к субъекту персональных данных, то есть, к потенциальному покупателю. В частности, это фамилия, имя и отчество, дата рождения, адрес, контактные реквизиты (телефон, адрес электронной почты), семейное, имущественное положение и иные данные, относимые Федеральным законом от 27 июля 2006 года № 152-ФЗ «О персональных данных» (далее – «Закон») к категории персональных данных.<br>
<br>
- Имя;<br>
<br>
- Номер телефона;<br>
<br>
- E-mail.<br>
<br>
Согласие дано Оператору для совершения следующих действий с моими персональными данными с использованием средств автоматизации и/или без использования таковых средств: сбор, систематизация, накопление, хранение, уточнение (обновление, изменение), использование, обезличивание, а также осуществление любых иных действий, предусмотренных действующим законодательством РФ как неавтоматизированными, так и автоматизированными способами.<br>
<br>
Данное Согласие дается Оператору для обработки моих персональных данных в следующих целях:<br>
<br>
- предоставление мне услуг/работ;<br>
<br>
- направление в мой адрес уведомлений, касающихся предоставляемых работ/услуг;<br>

- подготовка и направление ответов на мои запросы;<br>

- направление в мой адрес информации, в том числе рекламной, о мероприятиях/товарах/работах Оператора.<br>
<br>
Настоящее согласие действует до момента его отзыва путем направления соответствующего уведомления на электронный адрес zakaz@yatort.ru В случае отзыва мною согласия на обработку персональных данных Оператор вправе продолжить обработку персональных данных без моего согласия при наличии оснований, указанных в пунктах 2-11 части 1 статьи 6, части 2 статьи 11 Федерального закона №152-ФЗ «О персональных данных» от 26.06.2006г.<br>
</div>
<div id="overlay"></div><!-- Пoдлoжкa -->


      </div>
    </div>
  </div>
</div>


		</div>
	</section>
	<footer class="footer">
		<div class="container padingi">
			<p>© TORTO-MASH 2019   • Г. Барнаул •   Тел: +7 (961) 993-50-42 </p>
			<a class="condition_of_use" href="">УСЛОВИЯ ПОЛЬЗОВАНИЯ САЙТОМ И АВТОРСКИЕ ПРАВА</a>
		</div>
	</footer>

	<script src="http://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/tovar.js"></script>
  <script src="../slick/slick.min.js"></script>
</body>
</html>