<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аренда - EstateAgency</title>
		<link rel="icon" href="image/ic1.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styleRent.css">

		<script src="js/Vue.js" defer></script>
		<script src="js/rentEstate/mainVue.js" defer></script>

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
                    <a href="/purchase" class="notchoosen">Покупка</a>
                    <a href="/rent" class="choosen">Аренда</a>
                    <a href="/sale" class="notchoosen">Продажа</a>
                    <a href="#contacts" class="notchoosen">Контакты</a>
                </div>
            </div>
        </header>
        <div id="rent_content">
            <div id="rent_form">
                    <div class="up-line">
                        <span>Площадь:</span>
                        <div id="square">
                            <input class="min-square" type="number" min="30" max="400" v-model="minSquare" placeholder="от 30 м²">
                            <input class="max-square" type="number" min="30" max="400" v-model="maxSquare" placeholder="до 400 м²">
                        </div>
                        <span class="pr">Цена:</span>
                        <div id="price">
                            <input class="min-price" type="number" min="100000" max="1200000" v-model="minPrice" placeholder="от 100000₽">
                            <input class="max-price" type="number" min="100000" max="1200000" v-model="maxPrice" placeholder="до 1200000₽">
                        </div>
                    </div>
                    <div class="bottom-line">
                        <div id="type-estate">
                            <select name="" id="" v-model="typeEstate">
                                <option value="null" selected>Тип недвижимости</option>
                                <option value="1">Квартира</option>
                                <option value="0">Дом</option>
                            </select>
                            <select name="" id="" v-model="rooms">
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
                        </div>
                        <input type="submit" @Click="sort" value="Применить">
                        <input type="reset" @Click="clear" value="Сбросить">
                    </div>
            </div>
        </div>

        <section>
                <div class="cards">
                    <div class="card" v-for="item in rentEstate">
                        <div class="info">
                            <p class="price">{{item.price}}</p>
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