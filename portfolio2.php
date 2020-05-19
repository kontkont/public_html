<?php

$connection = new PDO ('mysql:host=localhost; dbname=a0263496_lesson1; charser=utf8',
    'a0263496_lesson1', '123');

$dataAbout = $connection->query("SELECT * FROM about");
$dataAbout = $dataAbout->fetch();

$dataEducation = $connection->query("SELECT * FROM education");
$dataEducation = $dataEducation->fetchAll();

$dataInterest = $connection->query("SELECT * FROM interest");
$dataInterest = $dataInterest->fetchAll();

$dataWorks = $connection->query("SELECT * FROM work");
$dataWorks = $dataWorks->fetchAll();

?>

<details> <summary>Общие данные</summary>
<p>Имя: <?php echo $dataAbout['name']; ?></p>
<p>Должность: <?php echo $dataAbout['post']; ?></p>
<p>Почта: <?php echo $dataAbout['email']; ?></p>
<p>Телефон: <?php echo $dataAbout['phone']; ?></p>
<p>Сайт: <?php echo $dataAbout['site']; ?></p>
</details>

<details> <summary>Образование</summary>
<?php foreach ($dataEducation as $eduKey => $edu)
    {
        echo $edu['faculty'] .' '.
             $edu['univercity'] .' '.
             $edu['yearStart'] .' '.
             $edu['yearEnd'] . '<br>';
    } ?>
</details>

<details> <summary>Интересы</summary>
<?php foreach ($dataInterest as $int)
    {
        echo $int['title'] . ', ' ;
    } ?>
</details>

<details> <summary>Места работы</summary>
<?php foreach ($dataWorks as $work)
    {
        echo $work['title'] . ', ';
    } ?>
</details>
