<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    header class="header">
    <div class="container header-content">
        <div class="logo">Мой сайт</div>

        <nav class="menu">
            <a href="/">Главная</a>
            <a href="/arrays">Массивы</a>
        </nav>
    </div>
</header>

<main class="content">
    <div class="container">
        <h1>Главная страница</h1>

        <img src="{{ Vite::asset('resources/images/images.jpg') }}" alt="">

        <p>
            Добро пожаловать на мой сайт! Здесь представлена информация
            о работе c массивами и основах программирования.
        </p>

        <p>
            На странице «Массивы» можно ознакомиться с примерами работы
            с массивами и различными операциями над ними.
        </p>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <p>© 2006 Грибунова Виктория Евгеньевна</p>
    </div>
</footer>
</body>
</html>