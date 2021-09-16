<?php
$title = 'Главная страница - страница обо мне';
$charset = 'UTF-8';
$h1 = 'Информация обо мне';
$content = <<<"CONTENT"
Краткая биография обо мне
Родился в 1985 году в городе Москва. Закончил в 2008 году МАИ.
На данный момент работаю ведущим инженером в крупной авиакомпании.
Поскольку я люблю авиацию, то хотел бы поделиться несколькими интересными
фотографиями на эту тему
CONTENT;
$imgSrc = 'img.png';
$cr = '2018';
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="<?php echo $charset; ?>">
</head>
<body>
<h1><?php echo $h1; ?></h1>
<?php echo $content; ?>
<br><br>
<img src="<?php echo $imgSrc; ?>" alt="Тут можете поместить картинку">
<br><br>
<br><br>
<b>Просто пример жирного текста</b>
<br><br>
<?php echo $cr; ?>
</body>
</html>