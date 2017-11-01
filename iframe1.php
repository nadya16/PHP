<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/styleForReg.css" type="text/css" media="screen, projection">
</head>

<body>
<meta charset="utf-8">
<title>Запись в сервис</title>

<div class="container">
	<section id="content">
		<form action="check.php" method="post">

			<h1>Запись в сервис</h1>
Чтобы записаться в автосервис просто заполните поля информации и наши администраторы обязательно свяжутся с Вами!
<br>
<br>
			<div>
				<input placeholder="Имя" maxlength =50 required="" id="username" name="name" type="text">
			</div>
			<div>
				<input placeholder="Телефон" required="" name="telefon" type="text">
			</div>
				<p><select placeholder="Выберите сервис" required="" size="0" name="address">
                                        <option value="Выберите сервис" disabled>Выберите сервис</option>
 					<option value="пр. Филатова, 90">пр. Филатова, 90</option>
 					<option value="ул. Баумана, 40">ул. Баумана, 40</option>
 					<option value="ул. Ленина, 99/1">ул. Ленина, 99/1</option>
 					<option value="пер. Маяковского, 24">пер. Маяковского, 24</option>
   				</select></p>

				<p><textarea placeholder="Комментарий (необязательно):" name="message" cols="30" rows="5"></textarea></p>
			<div>
				<input value="Отправить" type="submit">
			</div>
                            
		</form><!-- form -->
	</section><!-- content -->
</div><!-- container -->

</body></html>
