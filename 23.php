<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 006 06.02.17
 * Time: 14:40
 */
echo "<hr>";
echo '  Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. 
  Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6 <br>';

?>

    <form action="23.php" method="post">
        <input type="text" name="chislo"/>
        <input type="submit"/>
    </form>

<?php
$val = $_POST['chislo'];
settype($val, "string");
$summa = 0;
echo 'POST';
echo "<pre>";
print_r($_POST);
echo "</pre>";

for ($i=0; $i<strlen($val);){
    $summa = $summa + $val[$i];
    $i++;

}
echo 'Сумма - '.$summa;
