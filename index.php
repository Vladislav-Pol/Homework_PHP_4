<?php
//1. Дана строка 'london is the capital of great britain'. Сделайте из нее
//строку 'London Is The Capital Of Great Britain'.
echo "<hr> Задание 1 <br/><br/>";

$string = 'london is the capital of great britain';

echo ucwords($string);

//2. Дана строка 'html <b>css</b> php'. Удалите теги из этой строки. С
//помощью функции explode запишите каждое слово этой строки в отдельный
//элемент массива.
echo "<hr> Задание 2 <br/>";

$string = 'html <b>css</b> php';
$string = strip_tags($string);
$arr = explode(" ", $string);

echo "<pre>";
print_r($arr);
echo "</pre>";

//3. Дана строка. Перемешайте символы этой строки в случайном порядке.
echo "<hr> Задание 3 <br/><br/>";

$string = "1234567890abcdefghijklmnopqrstuvwxyz";

echo str_shuffle($string);

//4. Найдите количество дней в текущем месяце. Скрипт должен работать
//независимо от месяца, в котором он запущен.
echo "<hr> Задание 4 <br/><br/>";

$date = date("d", strtotime("last day of this month"));

echo "Дней в текущем месяце - $date";

//5. Выведите текущую дату-время в форматах
//'2025-12-31', '31.12.2025', '31.12.13', '12:59:59', timestamp.
echo "<hr> Задание 5 <br/><br/>";

echo date("Y-m-d") . "<br/>";
echo date("d.m.Y") . "<br/>";
echo date("d.m.y") . "<br/>";
echo date("H.i.s") . "<br/>";
echo time();

//6. В переменной $date лежит дата в формате '2025-12-31'. Прибавьте к этой
//дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.
echo "<hr> Задание 6 <br/><br/>";

$date = new DateTime('2025-12-31');
echo $date->format("Y-m-d") . " - исходная дата<br/>";

$interval = new DateInterval("P2D");
$date_new = clone $date;
$date_new->add($interval);
echo $date_new->format("Y-m-d") . " - добавлено 2 дня<br/>";

$interval = new DateInterval("P1M3D");
$date_new = clone $date;
$date_new->add($interval);
echo $date_new->format("Y-m-d") . " - добавлен 1 месяц и 3 дня<br/>";

$interval = new DateInterval("P1Y");
$date_new = clone $date;
$date_new->add($interval);
echo $date_new->format("Y-m-d") . " - добавлен 1год<br/>";

$interval = new DateInterval("P3D");
$date_new = clone $date;
$date_new->sub($interval);
echo $date_new->format("Y-m-d") . " - отнято 3 дня<br/>";


//7. Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'.
//Удалите из нее все цифры. То есть в нашем случае должна получится строка
//'abcbdefgh'.
echo "<hr> Задание 7 <br/><br/>";

$string = '1a2b3c4b5d6e7f8g9h0';
$string = str_replace(range(0, 9), "", $string);

echo $string;

//8. Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное
//число.
echo "<hr> Задание 8 <br/><br/>";

$arr = array(4, -2, 5, 19, -130, 0, 10);

echo min($arr) . "<br/>";
echo max($arr);

//9. Выведите на экран случайное число от 1 до 100.
echo "<hr> Задание 9 <br/><br/>";

echo rand(1, 100);

//10. Создайте ассоциативный массив дней недели. Ключами в нем должны
//служить номера дней от начала недели (понедельник - должен иметь ключ 1,
//вторник - 2 и т.д.). Выведите на экран текущий день недели.
echo "<hr> Задание 10 <br/><br/>";

$arDays = array(
    1 => "понедельник",
    2 => "вторник",
    3 => "среда",
    4 => "четверг",
    5 => "пятница",
    6 => "суббота",
    7 => "воскресенье",
);

echo $arDays[date("N")];

//11. Дан двухмерный массив с числами, например [[1, 2, 3], [4, 5], [6]].
//Найдите сумму элементов этого массива. Массив, конечно же, может быть
//произвольным.
echo "<hr> Задание 11 <br/><br/>";

$arr = [[1, 2, 3], [4, 5], [6]];

function getSumArrayElements($arr){
    $sum = 0;
    foreach ($arr as $item) {
        if(is_array($item)) {
            $sum += getSumArrayElements($item);
            continue;
        }
        $sum += $item;
    }
    return $sum;
}

echo "Сумма элементов массива равна - " . getSumArrayElements($arr);

//12. Есть массив $array = array(1,1,1,2,2,2,2,3), необходимо вывести 1,2,3, то
//есть вывести без дублей при помощи лишь одного цикла и без использования
//функций PHP.
echo "<hr> Задание 12 <br/><br/>";

$array = array(1,1,1,2,2,2,2,3);
//todo

//13. Используя ассоциативный массив, добавить на страницу навигационное
//меню вида:
//<ul>
//<li><a href="index.php">Home</a></li>
//<li><a href="about.php">About</a></li>
//<li><a href="services.php">Services</a></li>
//<li><a href="catalog.php">Catalog</a></li>
//<li><a href="contacts.php">Contacts</a></li>
//</ul>
//Заполните массив соблюдая сл. условия: название индексов являются именем
//файла (без расширения), на который ссылается меню; значения массива явл.
//названиями пунктов меню.
echo "<hr> Задание 13 <br/><br/>";

$arMenu = array(
    "index" => "Home",
    "about" => "About",
    "services" => "Services",
    "catalog" => "Catalog",
    "contacts" => "Contacts",
);?>

<ul>
    <? foreach($arMenu as $file => $name): ?>
    <li><a href="<?= $file?>.php"><?= $name?></a></li>
    <? endforeach; ?>
</ul>

<?php

//14. Вывести на черном фоне n красных квадратов случайного размера в
//случайной позиции в браузере.
echo "<hr> Задание 14 <br/><br/>";

$n = 5;
?>
<style>
.black_square{
    width: 600px;
    height: 800px;
    background-color: #000;
    position: relative;
}
.red_square{
    background-color: #f00;
    position: absolute;
}
</style>
<div class="black_square">
    <? for (; $n > 0; $n--): ?>
    <div class="red_square" style="width: <?= $size = rand(1, 300)?>px; height: <?= $size?>px; top: <?= rand(1, (800 - $size))?>px; left: <?= rand(1, (600 - $size))?>px"></div>
    <? endfor; ?>
</div>
<?php

//15. Дана строка с любыми символами. Для примера пусть будет '1234567890'.
//Нужно разбить эту строку в массив таким образом: array('1', '23', '456', '7890')
//и так далее пока символы в строке не закончатся.
echo "<hr> Задание 15 <br/><br/>";

$string = '12345678901234567890123456789012345678901234567890';
$arr = [];
for($i = 1; strlen($string) > 0;){
    $arr[] = substr($string, 0, $i);
    $string = substr($string, $i++);
}

print_r($arr);

//16. Найдите сумму элементов массива между двумя нулями (первым и
//последним нулями в массиве). Если двух нулей нет в массиве, то выведите
//ноль. В массиве может быть более 2х нулей. Пример массива:
//[48,9,0,4,21,2,1,0,8,84,76,8,4,13,2] или [1,8,0,13,76,8,7,0,22,0,2,3,2]
echo "<hr> Задание 16 <br/><br/>";

$arr = [48,9,0,4,21,2,1,0,8,84,76,8,4,13,2];
$firstPos = array_search(0, $arr);
$lastPos = 0;
//todo

//17. Сделайте функцию, которая будет генерировать случайный цвет в hex
//(dechex) формате (типа #ffffff).
echo "<hr> Задание 17 <br/><br/>";

$maxNum = 16 ** 6;
$color = dechex(rand(0, $maxNum));

echo "#$color";

//18. Дана строка '332 441 550'. Найдите все места, где есть два одинаковых
//идущих подряд цифры и замените их на '!'.
echo "<hr> Задание 18 <br/><br/>";

$string = '332 441 550';

echo preg_replace('/(.)\1{1,}/', "!", $string);

//19. Напишите ф-цию строгой проверки ввода номер телефона в
//международном формате (<код страны> <код города или сети> <номер
//телефона>) и упрощенной проверки ввода простого номера с кодом и без
//него. Функция должна возвращать true или false.
echo "<hr> Задание 19 <br/><br/>";

//todo



//20. Напишите ф-цию, которая должна проверить правильность ввода адреса
//эл. почты. Почта верна при условии:
//a. весь адрес не должен содержать русские буквы и спецсимволы, кроме
//одной «собачки», знака подчеркивания, дефиса и точки, причем они не могут
//быть первыми и последними в адресе, и идти подряд, например: «..», «@.»,
//«.@» или «@@», «_@», «@-», «--» и т.п.
//b. имя эл. почты (до знака @) должно быть длиной более 2 символов, причем
//имя может содержать только буквы, цифры, но не быть первыми и
//единственными в имени, и точку;
//c. после последней точки и после @, домен верхнего уровня (ru, by, com и
//т.п.) не может быть длиной менее 2 и более 11 символов.
echo "<hr> Задание 20 <br/><br/>";

$reg = '/^[A-Za-z]([A-Za-z0-9]*[-_.]?[A-Za-z0-9]+)+@[A-Za-z0-9]([A-Za-z0-9]*[-_.]?[A-Za-z0-9]+)+\.[A-Za-z]{2,11}$/';
$email = "test.29883Test-TEST@test.com";

var_dump(preg_match($reg, $email));