<html>
<head>
</head>

<body>
<form method='post' action='/3load/3load.php' enctype='multipart/form-data'>
    Выбирите файлы следующих форматов: JPG, GIF, PNG, PDF, TXT
    <input type='file' name='filename' size='10'>
    <input type='submit' value='Upload'></form>

<a href="/index.php">MAIN MENU</a>
<br>

<?php
//весь файл немного переписал, а то весь хтмл был запихнут в пхп через echo
if ($_FILES) {
    $name = $_FILES['filename']['name'];
//Тут разрешаем файлы с каким расширением можно загружать
    switch ($_FILES['filename']['type']) {
        case 'image/jpeg':
            $ext = 'jpg';
            break;
        case 'image/gif':
            $ext = 'gif';
            break;
        case 'image/png':
            $ext = 'png';
            break;
        case 'image/pdf':
            $ext = 'pdf';
            break;
        default:
            $ext = '';
            break;
    }
    if ($ext) {
        $n = "image.$ext";
        move_uploaded_file($_FILES['filename']['tmp_name'], $n);
        echo "Загружен файл '$name'':<br>";
        echo "<img src='$n'>";
    } else echo "'$name' файл не в том формате";
} else echo "ничего не загружено";
?>

<br>
<a href="/3load/4file.php">Чекаем загруженные файлы в /3load</a>

</body>
</html>