<?php

/*7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты*/

function getHourAppend($h)
{
    $hour = [1, 21];
    $hourA  = [2,3,4,22,23];
    $hourV = [0,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

    $arrHours = [$hour, $hourA, $hourV];
    foreach ($arrHours as $hours) {
        if (in_array($h, $hours)) {
            if ($hours === $hour) {
                return $h . ' час';
            } elseif ($hours === $hourA) {
                return $h . ' часа';
            }
        }
    }
    return $h . ' часов';
}
$hour = date('H');
$hour = getHourAppend($hour);

function getMinAppend($i)
{
    $minA = [1,21,31,41,51];
    $minS = [2,3,4,22,23,24,32,33,34,42,43,44,52,53,54];
    $min = [0,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,25,26,27,28,29,30,35,36,37,38,39,40,45,46,47,48,49,50,55,56,57,58,59];

    $arrMins = [$minA, $minS, $min];
    foreach ($arrMins as $value) {
        if (in_array($i, $value)) {
            if ($value === $minA) {
                return $i . ' минута';
            } elseif ($value === $minS) {
                return $i . ' минуты';
            }
        }
    }

    return $i . ' минут';
}

$min = date('i');
$min = getMinAppend($min);

print $hour . ' ' . $min . PHP_EOL;



/*6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow),
где $val – заданное число, $pow – степень.*/

function power($val, $pow)
{
    if (1 == $pow) {
        return $val;
    } elseif (0 == $pow) {
        return 1;
    }

    if (1 == $val) {
        return 1;
    } elseif (0 == $val) {
        return 0;
    }

    return $val * power($val, $pow - 1);
}
echo power(2, 3) . PHP_EOL;



/*5. Собрать страницу с меню и контентом, зарендерить как минимум 2 подшаблона через renderTemplate. ВАЖНОЕ*/

$menu = renderTemplate('menu');
$mainContent = renderTemplate('maincontent', '', '/*5. Собрать страницу с меню и контентом, зарендерить как минимум 2 
подшаблона через renderTemplate. ВАЖНОЕ*/');
$about = renderTemplate('about', '',777333);

echo renderTemplate('layout', $menu, $mainContent . $about);


function renderTemplate($page, $menu = '', $content = ''): string
{
    ob_start();
    include __DIR__ . '/' . $page . ".php";
    return ob_get_clean();
}


/*4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 –
значения аргументов, $operation – строка с названием операции . В зависимости от переданного значения операции
выполнить одну из арифметических операций(использовать функции из пункта 3) и вернуть полученное
значение(использовать switch).*/

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'getAdd':
            return $operation($arg1, $arg2) .  " - операция getAdd({$arg1}, {$arg2})" . PHP_EOL;
            break;
        case 'getDiv':
            return $operation($arg1, $arg2) .  " - операция getDiv({$arg1}, {$arg2})" . PHP_EOL;
            break;
        case 'getMult':
            return $operation($arg1, $arg2) .  " - операция getMult({$arg1}, {$arg2})" . PHP_EOL;
            break;
        case 'getDiff':
            return $operation($arg1, $arg2) .  " - операция getDiff({$arg1}, {$arg2})" . PHP_EOL;
            break;
            break;
        default:
            return 'UndefinedFunction' . PHP_EOL;
    }
}

echo mathOperation(1, 2, 'UndefinedFunction');
echo mathOperation(1, 2, 'getAdd');
echo mathOperation(4, 2, 'getDiv');
echo mathOperation(5, 2, 'getMult');
echo mathOperation(7, 2, 'getDiff');

/*3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать
оператор return. В делении проверьте деление на 0 и верните текст ошибки.*/

function getAdd($a, $b)
{
    return $a + $b;
}

function getDiff($a, $b)
{
    return $a - $b;
}

function getMult($a, $b)
{
    return $a * $b;
}

function getDiv($a, $b)
{
    if (0 === $b) {
        print 'Деление на ноль!';
        return false;
    }
    return $a / $b;
}

print getDiv(1, 0) . PHP_EOL;
print getDiv(4, 2) . PHP_EOL;
print getAdd(1, 2) . PHP_EOL;
print getDiff(1, 2) . PHP_EOL;
print getMult(4, 2) . PHP_EOL;

/*2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать
вывод чисел от $a до 15. При желании сделайте это задание через рекурсию.*/

$a = rand(0, 15);

$rangeTo15 = function ($n) use (&$rangeTo15) {
    if (15 === $n) {
        return 15;
    }
    return $n . ', ' . $rangeTo15($n + 1);
};
print $rangeTo15($a) . PHP_EOL;

switch ($a) {
    case 0:
        print $a++  . ', ';
    case 1:
        print $a++  . ', ';
    case 2:
        print $a++  . ', ';
    case 3:
        print $a++  . ', ';
    case 4:
        print $a++  . ', ';
    case 5:
        print $a++  . ', ';
    case 6:
        print $a++  . ', ';
    case 7:
        print $a++  . ', ';
    case 8:
        print $a++  . ', ';
    case 9:
        print $a++  . ', ';
    case 10:
        print $a++  . ', ';
    case 11:
        print $a++  . ', ';
    case 12:
        print $a++  . ', ';
    case 13:
        print $a++  . ', ';
    case 14:
        print $a++  . ', ';
    case 15:
        print $a++;
}
print PHP_EOL;

/*1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт,
 который работает по следующему принципу:
если $a и $b положительные, вывести а и б положительные;
если $а и $b отрицательные, вывести а и б отрицательные;
если $а и $b разных знаков, вывести а и б разных знаков;
Ноль можно считать положительным числом.*/

function compareInt(int $x, int $y): string
{
    if ($x >= 0 && $y >= 0) {
        return '$а и $б положительные' . PHP_EOL;
    } elseif ($x < 0 && $y < 0) {
        return '$а и $б отрицательные' . PHP_EOL;
    }
    return '$а и $б разных знаков' . PHP_EOL;
}

$a = $b = 1;
echo compareInt($a, $b);

$a = $b = -1;
echo compareInt($a, $b);

$a = -1;
$b = 1;
echo compareInt($a, $b);