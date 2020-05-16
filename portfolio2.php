<?php

$connection = new PDO ('mysql:host=localhost; dbname=a0263496_lesson1; charser=utf8',
    'a0263496_lesson1', '123');

$dataAbout = $connection->query("SELECT * FROM about");
$dataAbout = $dataAbout->fetch();

$dataEducation = $connection->query("SELECT * FROM education");
$dataEducation = $dataEducation->fetch();

$dataInterest = $connection->query("SELECT * FROM interest");
$dataInterest = $dataInterest->fetch();

$dataWorks = $connection->query("SELECT * FROM work");
$dataWorks = $dataWorks->fetch();

?>

<h3>Имя:</h3><p><?php echo $dataAbout['name']; ?></p>
<h3>Должность:</h3><p><?php echo $dataAbout['post']; ?></p>
<h3>Почта:</h3><p><?php echo $dataAbout['email']; ?></p>
<h3>Телефон:</h3><p><?php echo $dataAbout['phone']; ?></p>
<h3>Сайт:</h3><p><?php echo $dataAbout['site']; ?></p>

<h3>Образование:</h3>
<?php foreach ($dataEducation as $edu)
    {
        echo $edu['faculty'] . $edu['univercity'] . $edu['yeatStart'] . $edu['yearEnd'] . '<br>';
    } ?>

<h3>Увлечения:</h3>
<?php foreach ($dataInterest as $int)
    {
        echo $int['title'] . ', ' ;
    } ?>

<h3>Места работы:</h3>
<?php foreach ($dataWorks as $work)
    {
        echo $work['title'] . ', ';
    } ?>
