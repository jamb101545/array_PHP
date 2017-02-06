<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 006 06.02.17
 * Time: 15:18
 */
echo "<hr>";
echo '   Вам нужно разработать программу, которая считала бы количество вхождений какойнибуть выбранной 
   вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза <br>';
$chislo = 44215875555745;
$count = 0;
settype($chislo, "string");
for ($i=0; $i<strlen($chislo);){
    if ($chislo[$i]=='5'){
        $count++;
    }

    $i++;

};
echo 'Наше число '.$chislo.'<br>';
echo 'Число вхождений '.$count.'<br>';

echo "<hr>";
echo '  Ваше задание создать массив, наполнить это случайными значениями (функция rand), 
  найти максимальное и минимальное значение и поменять их местами. <br>';

$count = 20;
$arr = [];
for ($i=0; $i  <$count;){
    $arr[] =rand(1,100);
    $i++;
};

echo "<pre>";
    print_r($arr);
echo "</pre>";
    $min = min(array_values($arr));
    $max = max(array_values($arr));
    echo 'MIN - '.$min.'<br>';
    echo 'MAX - '.$max.'<br>';
    $kMin = array_search($min, $arr);
    $kMax = array_search($max, $arr);
    $arr[$kMin] = $max;
    $arr[$kMax] = $min;
echo "<pre>";
print_r($arr);
echo "</pre>";

echo "<hr>";
echo '  Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (фя rand). 
  Далее, вычислить произведение тех элементов, которые больше ноля 
  и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс. <br>';
$count = 10;
$arr = [];
for ($i=0; $i  <$count;){
    $arr[] =rand(1,100);
    $i++;
};

echo "<pre>";
print_r($arr);
echo "</pre>";

$proiz = 1;
foreach ($arr as $key => $value) {
    if (($value > 0)and ($key%2 == 0) and ($key <>0))  {
        $proiz = $value * $proiz;
        echo $key.'<br>';
    }
};
echo  'Произведение пол. элементов = '.$proiz . ' .<br>';
echo  ' которые больше ноля и у которых не парный индекс <br>';
foreach ($arr as $key => $value) {
    if (($value > 0)and ($key%2 <> 0))  {

        echo $key.' =>. '.$value. '<br>';
    }
};

echo "<hr>";
echo '  Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, 
  $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: 
  $colors = array(\'red\',\'yellow\',\'blue\',\'gray\',\'maroon\',\'brown\',\'green\'). Необходимо создать 
  скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки 
  будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.. <br>';

$colors = array('red','yellow','blue','gray','maroon','brown','green');
$rows = rand(3,5);
$cols = rand(3,5);

echo '<table border="2" >';
for ($r = 0;$r < $rows; ) {
    $r++;
    echo '<tr>';
    for ($c = 0; $c < $cols;) {
        $c++;
        echo '<td bgcolor='. $colors[array_rand($colors,1)].'>'.rand(10,500);
    }
}
echo '</table>';


echo "<hr>";
echo '   Вывести таблицу умножения с помощью двух циклов for. <br>';
for ($i = 1; $i<=10; $i++){
    for ($y = 1; $y<=10; $y++){

        echo $y.'*'.$i." =" . $i*$y."<br>";
    }

};



