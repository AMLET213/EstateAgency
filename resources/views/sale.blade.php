<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Продажа - EstateAgency</title>
	<link rel="icon" href="image/ic1.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/styleSale.css">

	<script src="js/sale/main.js" defer></script>

</head>

<body>
	<header>
		<div class="content"> <!-- контент в навигации -->
			<a href="/"><img class="logo" src="image/logo.png" alt=""></a>
			<div class="links">
				<a href="/" class="notchoosen">Главная</a>
				<a href="/purchase" class="notchoosen">Покупка</a>
				<a href="/rent" class="notchoosen">Аренда</a>
				<a href="/sale" class="choosen">Продажа</a>
				<a href="#contacts" class="notchoosen">Контакты</a>
			</div>
		</div>
	</header>
	<div id="sale_content">
		<div id="sale_title">
			<p>
				Если хотите оставить своё объявление в Estate<span id="logo_color">Agency</span>, то заполните форму
			</p>
		</div>
		<div id="sale_form">
			<form action="/newOffer" method="post" enctype="multipart/form-data">
				@csrf
				<div class="column" id="left_column">
					<p>Тип недвижимости</p>
					<select name="type-estate" id="" required>
						<option value="1" selected>Квартира</option>
						<option value="0">Дом</option>
					</select>
					<p>Тип передачи имущества</p>
					<select name="buy-rent" id="" aria-placeholder="Тип передачи имущества" required>
						<option value="1" selected>Продать</option>
						<option value="0">Сдать в аренду</option>
					</select>
					<input type="text" name="address" id="address" placeholder="Адрес" maxlength="40" required>
					<input type="number" name="price" id="price" placeholder="Цена" min="1" required>
					<div class="room-square">
						<input type="number" min="1" name="rooms" id="" placeholder="Количество комнат" max="10" required class="number rooms">
						<input type="number" min="1" name="square" id="" placeholder="Площадь" max="700" required class="number square">
					</div>
					<input type="tel" name="number-phone" id="tel" placeholder="Номер телефона" min="2" maxlength="12" required>
					@if(\Session::has('message'))
					<p>{{Session::get('message')}}</p>
					@endif
					<input type="submit" placeholder="Отправить">
				</div>
				<div class="column" id="right_column">
					<input type="file" accept="image/*" id="upload_photo" name="image" required>
					<div id="file_area">
						<label for="upload_photo" id="label">
							<img src="image/upload_logo.png" alt="" id="test">
							<span id="span">Нажмите, чтобы загрузить фото</span></label>
					</div>
				</div>
			</form>
		</div>
	</div>

	<footer>
		<div class="footer">
			<div class="text">
				<div class="time">
					<p class="pad">Время работы:</p>
					<p>Пн-Пт
					<p class="pad">9:00-18:00</p>
					<p>Cб</p>
					<p class="pad">9:00-16:00</p>
					<p>Вс - выходной</p>
				</div>
				<div class="contact">
					<p id="contacts">Контакты:</p>
					<p>+7 (123) 456-78-99</p>
					<a href="" class="social"><img src="image/telegram.png" alt=""></a>
					<a href="" class="social"><img src="image/email.png" alt=""></a>
					<a href="" class="social"><img src="image/vk.png" alt=""></a>
					<a href="" class="social"><img src="image/inst.png" alt=""></a>
				</div>
				<div class="adres">
					<p>105318, г.Москва, ул Щербаковская, 3</p>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>