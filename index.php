<!DOCTYPE html>
<html lang='ru'>
<head>

    <meta charset='UTF-8'>
    <title>test1project</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="style.css" />

</head>
<div class="blockMain">

   <div class="blockTop">
    <?php include("6clock.php"); ?>
</div>

   <div class="blockLeft">
        <p>Гитхаб данного сайта <a href="https://github.com/kontkont/public_html"
                              target="_blank">github.com/kontkont/public_html</a></p>

       <p>Проект "stena" <a href="http://test1project.pzdk.ru/stena/"
                           target="_blank">test1project.pzdk.ru/stena/</a>
           <br>Гитхаб "stena" <a href="https://github.com/kontkont/stena"
                               target="_blank">github.com/kontkont/stena </a> </p>

        <p>Гитхаб Тихона <a href="https://github.com/Syseka"
                              target="_blank">github.com/Syseka</a>
        <br> Сайт Тихона <a href="https://jodd5344.000webhostapp.com"
                        target="_blank">jodd5344.000webhostapp.com </a> </p>

           </div>

    <div class="blockRight">

        <?php include("portfolio2.php"); ?>

    </div>

    <div class="blockLeft">
        <a href="3load/3load.php">Пример 7.16 из Никсона, загрузка файла</a>
        <br>
        <a href="3load/4file.php">Чекаем загруженные файлы в /3load</a>
        <br>
    </div>

    <div class="blockLeft">
        <?php include("5post.php"); ?>
    </div>

    <div class="blockLeft">
        <?php include("13comments.php"); ?>
    </div>

    <div class="blockRight">
        <?php include("14comments_form.php"); ?>
    </div>

</div>
</body>
</html>

