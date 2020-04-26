
<?php
    $data = include ('data1.php');
    $dataAbout = $data['about'];
    $dataInterest = $data['interest'];
    $dataWorks = $data['works'];
    ?>

<h3>Имя:</h3><p><?php echo $data['about']['name']; ?></p>
<h3>Должность:</h3><p><?php echo $data['about']['post']; ?></p>
<h3>Почта:</h3><p><?php echo $dataAbout['email']; ?></p>
<h3>Телефон:</h3><p><?php echo $dataAbout['phone']; ?></p>
<h3>Сайт:</h3><p><?php echo $dataAbout['site']; ?></p>

<h3>Увлечения:</h3>
<?php foreach ($dataInterest as $int) { ?>
    <?php echo "$int, " ?>
<?php } ?>

<h3>Места работы:</h3>
<?php foreach ($dataWorks as $work) { ?>
    <?php echo "$work, " ?>
<?php } ?>
