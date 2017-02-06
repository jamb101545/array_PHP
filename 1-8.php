<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 006 06.02.17
 * Time: 11:24
 */
echo "<hr>";
echo "Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик. <br>";

$arr = [
    'html',
    'css',
    'php',
    'js',
    'jq',

];

foreach ($arr as &$value) {
    echo $value."<br>";
};

echo "<hr>";
echo 'Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.<br>';

$arr = [
    1,
    20,
    15,
    17,
    24,
    35,

];
$result = 0;

foreach ($arr as &$value) {
    $result = $result + $value;
};
echo "$result.<br>";
echo "<hr>";
echo 'Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. 
Результат запишите переменную $result.<br>';


$arr = [
    26,
    17,
    136,
    12,
    79,
    15,

];
$result = 0;

foreach ($arr as &$value) {
    $result = $result + $value * $value;
};
echo "$result.<br>";
echo "<hr>";
echo 'Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов..<br>';

$arr = array(
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой'
);

foreach ($arr as $key => $value) {
    echo "Ключ - ".$key."<br>";
};

foreach ($arr as &$value) {
    echo "Значение - ".$value."<br>";
};
echo "<hr>";
echo 'Дан массив $arr с ключами \'Коля\', \'Вася\', \'Петя\' с элементами \'200\', \'300\', \'400\'. С помощью цикла
 foreach выведите на экран столбец строк такого формата: \'Коля — зарплата 200 долларов.'.'<br>';

$arr = [
    'Коля'=>200,
    'Вася'=>300,
    'Петя'=>400
];
foreach ($arr as $key => $value) {
    echo $key. ' —  зарплата '. $value.' долларов.<br>';
};
echo "<hr>";
echo 'Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru. $arr = array(\'green\'=>\'зеленый\', \'red\'=>\'красный\',\'blue\'=>\'голубой\');
 $en = array(\'green\', \'red\',\'blue\'); $ru = array(\'зеленый\', \'красный\', \'голубой\');';
$arr = [
    'green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой'
];
$i = 0;
foreach ($arr as $key => $value) {
    $i++;
    $en[$i] = $value;
    $ru[$i] = $key;
    };
echo "<pre>";
echo print_r($en)."<br>";
echo print_r($ru)."<br>";
echo "</pre>";
echo "<hr>";
echo "Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите 
на экран столбец тех элементов массива, которые больше 3х, но меньше 10.<br>";
$arr = [
    2,
    5,
    9,
    15,
    0,
    4,

];

foreach ($arr as  $value) {
    if (($value > 3) and ($value < 10) ) {
        echo  $value . ' между 3 и 10.<br>';
    }
};

echo "<hr>";
echo 'Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку \'123456789\'<br>';
$arr = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9
];
foreach ($arr as  $value) {
    echo  $value ;

};
echo '<br>';

