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
echo '5. *Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы 
получилось b = 1, a = 2. Дополнительные переменные использовать нельзя. Попробуйте использовать битовые операции и
 сделать в 1 строчку.';
echo '</h2>';

echo '<div class=" card">';
    echo '<pre>';
        echo htmlspecialchars(<<<'COD'
                Рассмотрим следующий код:
                **********************************
                $x = 1; $y = 2;
                $x .= $y .= $x .= $y; //var_dump($x, $y) вернет string(5) "12212" string(3) "212"
                **********************************
                Расставим приоритеты операций:
                $x = $x . ($y = $y . ($x = $x . $y)); 
                Итак, читаем справа на лево, как меняются значения операндов: x = 12, y = 212, x = 12212
                **********************************
                Теперь все тоже самое, но заменим оператор на ^
                $x = $x ^ ($y = $y ^ ($x = $x ^ $y));
                Читаем справа на лево, как и в предыдущем случае
                1 операция ($x = $x ^ $y), в x = мешанина из x и y,
                2 операция $y = $y ^ (мешанина из x и y), получаем в y будет значание x как результат применения 
                к мешанине из двух операндов оператора ^ с одним из этих операндов
                3 операция $x = (мешанина из x и y) ^ x, получаем в x находится y, точно также, при применении к мешанине 
                  из двух операндов оператора ^ с одним из этих операндов
                **********************************
                Уберем скобки:
                $x ^= $y ^= $x ^= $y;
                COD
                );
    echo '</pre>';
echo '</div>';
?>
    <h3>Итоговое решение:</h3>
    <?php
    echo '<div class=" card">';
    echo '<pre>';
    echo htmlspecialchars(<<<'COD'
                $x = 1; $y = 2;
                $x ^= $y ^= $x ^= $y;
                var_dump($x, $y); // вернет int(2) int(1)
                COD
    );
    echo '</pre>';
    echo '</div>';

    ?>

</main>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>


