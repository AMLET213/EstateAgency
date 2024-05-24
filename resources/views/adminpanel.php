<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявки - EstateAgency</title>
    <link rel="icon" href="image/ic1.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styleAdminPanel.css">

    <script src="/js/Vue.js" defer></script>
    <script src="/js/adminPanel/mainVue.js" defer></script>

</head>

<body>
    <div id="app">
        <header>
            <div class="content"> <!-- контент в навигации -->
                <a href="/"><img class="logo" src="image/logo.png" alt=""></a>
                <div class="links">
                    <a href="/" class="notchoosen">Главная</a>
                    <a href="/allEstateAdmin" class="notchoosen">Все объявления</a>
                    <a href="/adminPanel" class="choosen">Заявки</a>
                    <a href="/adminLogout" class="notchoosen">Выход</a>
                </div>
            </div>
        </header>
				<div id="sale_title">
						<p>
								Заявки
						</p>
				</div>
        <div id="sale_content">
            <div id="sale_form" v-for="item in offers">
                <!-- <form action=""> -->
                    <div class="column" id="left_column">
                        <p><span>Тип недвижимости: </span><span>{{item.apartment}}</span></p><br>
                        <p><span>Тип сделки: </span><span>{{item.buy}}</span></p><br>
                        <p><span>Адрес: </span><span>{{item.address}}</span></p><br>
                        <p><span>Количество комнат: </span><span>{{item.rooms}}</span></p><br>
                        <p><span>Площадь: </span><span>{{item.square}} м²</span></p><br>
                        <p><span>Цена: </span><span>{{item.price}}₽</span></p><br>
                        <p><span>Номер телефона: </span><span>{{item.number_phone}}</span></p><br>
                        <div class="submit">
                            <input type="submit" @click="add(item)" value="Одобрить">
                            <input type="submit" @click="destroy(item)" value="Отклонить">
                        </div>

                    </div>
                    <div class="column" id="right_column">
                        <img :src="item.image" id="photo_area" alt="" srcset="">
                    </div>
                <!-- </form> -->
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
    </div>
</body>

</html>