<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Объявления - EstateAgency</title>
	<link rel="icon" href="image/ic1.png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/styleAllEstate.css">

	<script src="js/vue.js" defer></script>
	<script src="js/allEstate/mainVue.js" defer></script>
</head>

<body>
	<div id="app">

		<div id="preloader" class="preloader">
			<div class="preloader__loader">
				<div class="loadingio-spinner-rolling-wopxwk46ahe">
					<div class="ldio-zgxx64th47">
						<div></div>
					</div>
				</div>

				<span class="preloader__percents">
					<span class="preloader__span">Ждите</span>
				</span>
			</div>
			<!-- /.preloader__loader -->
		</div>
		<!-- /#preloader.preloader -->


		<header>
			<div class="content"> <!-- контент в навигации -->
				<a href="/"><img class="logo" src="image/logo.png" alt=""></a>
				<div class="links">
					<a href="/" class="notchoosen">Главная</a>
					<a href="/allEstateAdmin" class="choosen">Все объявления</a>
					<a href="/adminPanel" class="notchoosen">Заявки</a>
					<a href="/adminLogout" class="notchoosen">Выход</a>
				</div>
			</div>
		</header>
		<div id="allestate_content">
			<div id="allestate_form">
				<div class="up-line">
					<span>Площадь:</span>
					<div id="square">
						<input class="min-square" type="number" min="30" max="400" v-model="minSquare" placeholder="от 30 м²">
						<input class="max-square" type="number" min="30" max="400" v-model="maxSquare" placeholder="до 400 м²">
					</div>
					<span class="cena">Цена:</span>
					<div id="price">
						<input class="min-price" type="number" min="100000" max="40000000" v-model="minPrice" placeholder="от 100000₽">
						<input class="max-price" type="number" min="100000" max="40000000" v-model="maxPrice" placeholder="до 40000000₽">
					</div>
				</div>
				<div class="bottom-line">
					<div id="type-estate">
						<select name="" id="" v-model="typeEstate">
							<option value="null" selected>Тип недвижимости</option>
							<option value="1">Квартира</option>
							<option value="0">Дом</option>
						</select>
						<select name="rooms" id="" v-model="rooms">
							<option value="null" selected>Количество комнат</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
						</select>
						<select name="" id="" v-model="typeTransaction">
							<option value="null" selected>Тип сделки</option>
							<option value="1">Продажа</option>
							<option value="0">Аренда</option>
						</select>
					</div>
					<input type="submit" @Click="sort" value="Применить">
					<input type="reset" @Click="clear" value="Сбросить">
				</div>
			</div>

			<section>
				<div class="cards">
					<div class="card" id="card" v-for="(item, index) in allEstate">
						<div  v-bind:id="'card-del' + index" @click="cardClick(index)">
						<div class="info">
							<p class="price">{{item.price}}</p>
							<p class="address">{{item.address}}</p>
							<div class="sr">
								<p class="square">{{item.square}} м²</p>
								<p class="rooms">{{item.rooms}}-{{item.apartment}}</p>
							</div>
							<div class="pb">
								<p class="phonenumber">{{item.number_phone}}</p>
								<p class="buy">{{item.buy}}</p>
							</div>
						</div>
						<img :src="item.image" alt="">
						</div>
						<button v-bind:id="'del'+index" style="display: none;" @click="cardDel(item,index)">Удалить</button>
					</div>
				</div>
			</section>
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
	</div>
</body>

</html>