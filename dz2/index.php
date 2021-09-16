<?php

/*4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 –
значения аргументов, $operation – строка с названием операции . В зависимости от переданного значения операции
выполнить одну из арифметических операций(использовать функции из пункта 3) и вернуть полученное
значение(использовать switch).*/





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