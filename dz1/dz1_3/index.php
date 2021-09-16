<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
</head>
<body>
<main class="container">
<?php

echo '<h2>';
echo '3. Объяснить, как работает данный код:';
echo '</h2>';

echo '<pre>';
echo htmlspecialchars(<<<'COD'
<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true?
    var_dump((int)'012345');     // Почему 12345?
    var_dump((float)123.0 === (int)123.0); // Почему false?
    var_dump((int)0 === (int)'hello, world'); // Почему true?
?>
COD);
echo '</pre>';

$a = 5;
$b = '05';

echo '<div class="col-md-12 card">';
echo '<pre>';
echo htmlspecialchars(<<<'COD'
var_dump($a == $b);         // Почему true?
COD
);
echo '</pre>';
echo 'В соответствии с https://www.php.net/manual/ru/language.operators.comparison.php
происходит сравнение чисел, $b приведена к целому числу 5, а так как 5 = 5 получаем true';
echo '</div>';

echo '<div class="col-md-12 card">';
echo '<pre>';
echo htmlspecialchars(<<<'COD'
var_dump((int)'012345');     // Почему 12345?
COD
);
echo '</pre>';
echo 'В документации не удалось явно найти слова о том, что при приведении к int по умолчанию используется приведение по
основанию 10, вероятно используется intval, но в оф. документации я не нашел явной отсылки на использование
этой функции при приведении к целому из строки';
echo '</div>';

echo '<div class="col-md-12 card">';
echo '<pre>';
echo htmlspecialchars(<<<'COD'
var_dump((float)123.0 === (int)123.0); // Почему false?
COD
);
echo '</pre>';
echo 'Здесь строгое сравнение с учетом типов аперандов, типы не совпадают, потому false';
echo '</div>';

echo '<div class="col-md-12 card">';
echo '<pre>';
echo htmlspecialchars(<<<'COD'
var_dump((int)0 === (int)'hello, world'); // Почему true?
COD
);
echo '</pre>';
echo 'В соответствии с https://www.php.net/manual/ru/language.types.integer.php#language.types.integer.casting
"Если строка содержит числа или ведущая числовая, тогда она будет преобразована в соответствующее целочисленное
 значение, в противном случае она преобразуется в ноль (0)."
Таким образом, (int)"hello, world") преобразовано к 0, а так как 0 === 0, получаем true';
echo '</div>';
?>
</main>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>


