
<form action="index.php" method="post">
    <input type="text" name="name"/>
    <input type="text" name="email"/>
    <input type="text" name="phone"/>
    <input type="submit"/>
</form>


<?php
echo 'POST';
echo "<pre>";
    print_r($_POST);
echo "</pre>";


?>

<form action="index.php" method="get">
    <input type="text" name="username"/>
    <input type="text" name="email"/>
    <input type="text" name="message"/>
    <input type="submit"/>
</form>


<?php

echo "<pre>";
    print_r($_GET);
echo "</pre>";

echo "<hr>";
?>

<form action="index.php" method="post">
    <input type="text" name="username"/>
    <input type="text" name="email"/>
    <input type="text" name="message"/>
    <input type="submit"/>
</form>

<?php

echo "<pre>";
    print_r($_POST);
echo "</pre>";

echo "serialize data"."<br>";
    $dataSer = serialize($_POST);

echo $dataSer."<br>";
echo "<hr>";
echo "Вычислить количество секунд в году и присвоить это значение переменной. Вычислить остаток от деления этого значения на 2
"."<br>";
$secYear = 60*60*24*365 ;
$ostatok =  $secYear % 2;

echo "В году ".$secYear. "секунд"."<br>" ;
echo "Остаток от деления   на 2 - ".$ostatok ;
echo "<hr>";
echo "Создать строку, содержащую число 12345 используя лишь отдельные цифры 1,2,3,4,5 и операцию конкатенации
"."<br>";
$f1 = '1';
$f2 = '2';
$f3 = '3';
$f4 = '4';
$f5 = '5';

$f12345 = $f1 . $f2 . $f3 . $f4 . $f5;
echo  $f12345 . "<br>";
echo "<hr>";
echo "Вычислить значение выражения: false && true || false && true || !false && true
"."<br>";

$log_oper = false && true || false && true || !false && true;

echo $log_oper."<br>";
echo "<hr>";
echo 'Вывести на экран true/false в зависимости о того, делится переменная $x на 2 или нет'."<br>";
?>

<form action="index.php" method="get">
    <input type="text" name="var"/>
    <input type="submit"/>
</form>
<?php

echo "<pre>";
    print_r($_GET);
echo "</pre>";

$x = $_GET ['var'];
echo "Переменная $x <br>";

if (($x % 2) == 0)
{
    echo $x." делится на 2<br>";
}

else
{
    echo $x." не делится на 2<br>";
}
echo "<hr>";
echo "Создать алгоритм обмена значениями двух переменных не используя третьей. <br>";

$a = 61;
$b = 87;
echo "Переменная  a - $a, переменная b - $b ДО <br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "Переменная  a - $a, переменная b - $b ПОСЛЕ <br>";
echo "<hr>";
echo "Создать алгоритм вычисления максимального значения двух заданных переменных. <br>";
$a = 23;
$b = 3;
echo 'a='.$a .'<br>' .'b='.$b. '<br>';

if ($a==$b){
    echo "Равно";
}
else {
    if ($a>$b){
        echo "Больше a";
    }
    else {

        echo "Больше b";
    }
}


echo "<hr>";
echo "Создать алгоритм вычисления максимального значения двух заданных переменных при помощи тернарного оператора. <br>";


$a = 3;
$b = 33;
echo 'a='.$a .'<br>' .'b='.$b. '<br>';


$res= ($a>$b) ? "a больше " : "b больше";
echo $res;


echo "<hr>";
echo "Создать алгоритм вычисления максимального значения двух заданных переменных при помощи switch. <br>";


$a = 33;
$b = 35;
$res = $a-$b;


switch ($a) {
    case ($res>0): echo 'a больше <br>'; break;
    case ($res<0): echo 'b больше <br>'; break;

}

echo "<hr>";
echo "Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи for. Простое число 
- это число которое делится только на себя и на 1. <br>";

for ($i = 1; $i <= 100; $i++) {
    if ($i%2 == 0) {echo "{$i} - не простое <br>";
    }
    else {
        echo "{$i} - простое <br>";    }
    };


echo "<hr>";
echo "Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи while. Простое число 
- это число которое делится только на себя и на 1. <br>";
$i=1;
while ( $i <= 100 ) {
    if ($i%2 == 0) {echo "{$i} - не простое <br>";
    }
    else {
        echo "{$i} - простое <br>";    }
    $i++;
};

echo "<hr>";
echo "Создать массив из 10 любых числовых значений. При помощи foreach вывести на экран те значения, которые делятся на 3. <br>";


$arr = [
    15,
    28,
    35,
    14,
    55,
    66,
    74,
    81,
    91,
    103
];

foreach ($arr as $item) {
    if ($item%3 == 0) {echo "{$item} - делится на 3 <br>";
    }
    else {
        echo "{$item} - не делится на 3 <br>";    }


};

echo "<hr>";
echo "Создать алгоритм для определения первого найденного простого числа в промежутке от 200 до 400.. <br>";

for ($i = 200; $i <= 400; $i++) {
    if ($i%2 == 0) {echo "{$i} - не простое <br>";
    }
    else {
        echo "{$i} 1 - e простое <br>";
    break;}
};
