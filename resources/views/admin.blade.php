<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/ic1.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styleadmin.css">
    <title>EstateAgency</title>
</head>
<body>
    <div class="content" id="content"> <!-- контент в навигации -->
        <div class="top-bar">
            <a href="/"><img class="logo" id="logo" src="image/logo.png" alt=""></a>
            <div class="links" id="nav">
                <a class="first after" href="/">Главная</a>
                <a class="first after" href="/purchase">Покупка</a>
                <a class="first after" href="/rent">Аренда</a>
                <a class="first after" href="/sale">Продажа</a>
                <a class="first after" href="#contacts">Контакты</a>
            </div>
        </div>
    </div>

    <section class="admin-vhod">
        <form action="/admin" method="post" class="vhod">
            @csrf
            <h1>Вход в систему</h1>
            <input type="text" placeholder="Логин" name="login"> <br><br>
            <input type="password" placeholder="Пароль" name="pass"> <br><br>
            @if(isset($message))
                <p>{{$message}}</p>
            @endif
            <input type="submit" value="Войти">
        </form>
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
</body>
</html>      