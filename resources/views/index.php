<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EstateAgency</title>
	<link rel="icon" href="image/ic1.png">


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/styleIndex.css">




	<script src="js/vue.js" defer></script>
	<script src="js/index/mainVue.js" defer></script>
	<script src="js/index/main.js" defer></script>

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
							<span>Ждите</span>
            </span>
        </div>
        <!-- /.preloader__loader -->
    </div>
    <!-- /#preloader.preloader -->


		<div class="content" id="content"> <!-- контент в навигации -->
			<div class="top-bar">
				<a href="/"><img class="logo" id="logo" src="image/logo.png" alt="ой, картинка не найдена"></a>
				<div class="links" id="nav">
					<a class="first after choosen" href="/" >Главная</a>
					<a class="first after notchoosen" href="/purchase">Покупка</a>
					<a class="first after notchoosen" href="/rent">Аренда</a>
					<a class="first after notchoosen" href="/sale">Продажа</a>
					<a class="first after notchoosen" href="#contacts">Контакты</a>
				</div>
			</div>
		</div>
		<div class="allContent">

			<header>
				<div class="title">
					<p>
						EstateAgency - <span class="blue">профессионалы</span>, которым вы можете доверять
					</p>
					<img src="image/strelka.png" alt="">
				</div>
			</header>
			<section class="desc">
				<div class="title2">
					<p> Открывая двери в новую жизнь, доверьтесь Estate<span>Agency</span></p>
				</div>
				<div class="advantages">
					<div class="adv">
						<div class="block">
							<img src="image/lock.png" alt="">
							<p>Защита сделки</p>
						</div>
						<div class="block">
							<img src="image/bank.png" alt="">
							<p>Помощь в оформлении ипотеки</p>
						</div>
						<div class="block">
							<img src="image/hand.png" alt="">
							<p>Индивидуальный подход к каждому клиенту</p>
						</div>
						<div class="block">
							<img src="image/school.png" alt="">
							<p>Большая команда квалифициованных агентов</p>
						</div>
					</div>
					<img src="image/kv1.png" alt="">
				</div>
				<div class="numbers">
					<div class="block2">
						<span>143</span>
						<p>Купленных объектов недвижимости</p>
					</div>
					<div class="block2">
						<span>{{saleProperties}}</span>
						<p>Продаваемых объектов</p>
					</div>
					<div class="block2">
						<span>{{allProperties}}</span>
						<p>Всех объектов недвижимости</p>
					</div>
					<div class="block2">
						<span>23</span>
						<p>Агентов</p>
					</div>
				</div>
			</section>
			<section class="offer">
				<div class="title3">
					<p>Мы предлагаем</p>
				</div>
				<div class="button1">
					<p>Выгодные предложения</p>
					<a href="/purchase">Посмотреть все предложения</a>
				</div>
				<div class="cards">
					<div class="card" v-for="item in bestSale">
						<div class="info">
							<p class="price">{{item.price}}₽</p>
							<p class="address">{{item.address}}</p>
							<div class="sr">
								<p class="square">{{item.square}} м²</p>
								<p class="rooms">{{item.rooms}}-{{item.apartment}}</p>
							</div>	
						</div>
						<img :src="item.image" alt="">
					</div>
				</div>


				<div class="button1">
					<p>Лучшая недвижимость в аренду</p>
					<a href="/rent">Посмотреть все предложения</a>
				</div>
				<div class="cards">
					<div class="card" v-for="item in bestRent">
						<div class="info">
							<p class="price">{{item.price}}₽ в месяц</p>
							<p class="address">{{item.address}}</p>
							<div class="sr">
							<p class="square">{{item.square}} м²</p>
							<p class="rooms">{{item.rooms}}-{{item.apartment}}</p>
							</div>	
						</div>
						<img :src="item.image" alt="">
					</div>
				</div>
			</section>
			<section>
				<div class="title4">
					<p>Отзывы наших клиентов</p>
				</div>
				<div class="reviews">
					<div class="review">
						<img class="photos" src="image/people3 1.png" alt="">
						<img class="rating" src="image/Rating-Star-PNG-Clipart 1.png" alt="">
						<div class="review">
							<p class="name">Михаил Архангелов</p>
							<p>«Хочу выразить благодарность риелторам за грамотную и оперативную продажу квартиры.
								Компания проявила
								профессиональный подход, компетентность и отзывчивость. Сделка прошла в присутствии
								юриста и
								директора, всё было чётко и быстро. Огромное спасибо! Успехов Вам и процветания!»</p>
						</div>
					</div>

					<div class="review">
						<img class="photos" src="image/people2 1.png" alt="">
						<img class="rating" src="image/Rating-Star-PNG-Clipart 1.png" alt="">
						<div class="review">
							<p class="name">Людмила Фурса</p>
							<p>«Хочу выразить особую признательность риелтору за чуткое отношении, высокий профессионализм в
								своей работе и разъяснение некоторых вопросов. Сделка прошла
								успешно, в присутствии юриста и директора, им тоже огромное спасибо. Фирма отлично работает,
								процветания вам!»</p>
						</div>
					</div>

					<div class="review">
						<img class="photos" src="image/people4 2.png" alt="">
						<img class="rating" src="image/Rating-Star-PNG-Clipart 1.png" alt="">
						<div class="review">
							<p class="name">Игорь Дорохов</p>
							<p>«Хочу сказать огромное спасибо за проделанную работу, за то, что сопровождали и всегда были
								рядом, мы обратились за помощью и ни разу не пожалели. Спасибо вам огромное. Рекомендуем!»</p>
						</div>
					</div>

					<div class="review">
						<img class="photos" src="image/people1 1.png" alt="">
						<img class="rating" src="image/Rating-Star-PNG-Clipart 1.png" alt="">
						<div class="review">
							<p class="name">Юлия Логвинина</p>
							<p>«Отличная компания, покупали дочери квартиру. Предлагали много вариантов, было из чего
								выбрать. Сделка прошла отлично, все документы подготовлены в срок. Ключи получены, дочь
								довольна. Спасибо большое»</p>
						</div>
					</div>
				</div>
			</section>


			<section class="credit-card">
				<h1 class="title3">Ипотека</h1>
				<div class="credit">
					<iframe id="calculator-iframe" src="https://ipoteka.domclick.ru/calc-reg/calculator.html" frameborder="no" scrolling="yes" width="100%" height="1400"></iframe>
					<script type="application/javascript" src="https://ipoteka.domclick.ru/calc-reg/calculator-injector.js"></script>

				</div>
			</section>

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
	</div>


</body>

</html>