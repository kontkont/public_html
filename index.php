<html>
<head>
    <style>

        body {
            background: url(images/background.jpg);
            background-size: cover;
            margin-top: 5%;
            margin-left: 12%;
            margin-right: 10%;

        }

        .block1 {
            /* Выравнивание блока по стороне */
            float: right;
            /* Выравнивание текста по стороне */
            text-align: left;
            /* Ширина блока */
            width: 100%;
            /* Высота блока */
            height: 100%;
            /* Граница: ширина тип цвет */
            border: 3px solid white;
            /* Цвет фона и его прозрачность*/
            background-color: rgba(0, 0, 0, 0.3);
            /* Отступы текста от краев блока */
            padding: 20px;
            /* Закругление углов */
            border-radius: 10px;
            /* Шрифт текста */
            font-family: Impact;
            /* Размер текста */
            font-size: 20pt;
            /* Цвет текста */
            color: white;
        }

        /* Цвет ссылок */
        .block1 a {
            color: white;
        }
        /* Цвет посещенных ссылок */
        .block1 a:visited {
            color: white;
        }
        /* Цвет активных ссылок */
        .block1 a:active {
            color: white;
        }

    </style>
</head>
<body>

<div class="block1">
    <p>Гитхаб данной хуйни <a href="https://github.com/kontkont/public_html"
                              target="_blank">github.com/kontkont/public_html</a></p>
    <p>Гитхаб Тихона <a href="https://github.com/Syseka"
                              target="_blank">github.com/Syseka</a></p>
    <br>
    <a href="1post.php">Упражнение - представься щенок</a>
    <br>
    <a href="3load/3load.php">Пример 7.16 из Никсона, загрузка файла</a>
    <br>
    <a href="3load/4file.php">Чекаем загруженные файлы в /3load</a>
    <br>
    <a href="5.php">Страница 5</a>
    <br>

</div>

</body>
</html>


