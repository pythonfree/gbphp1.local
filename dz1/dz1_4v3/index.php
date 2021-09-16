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

$indexPage = file_get_contents(__DIR__ . '/templates/index.php');

$indexPage = str_replace('{{title}}', $title, $indexPage);
$indexPage = str_replace('{{charset}}', $charset, $indexPage);
$indexPage = str_replace('{{h1}}', $h1, $indexPage);
$indexPage = str_replace('{{content}}', $content, $indexPage);
$indexPage = str_replace('{{imgSrc}}', $imgSrc, $indexPage);
$indexPage = str_replace('{{cr}}', $cr, $indexPage);

echo $indexPage;