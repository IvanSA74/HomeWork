<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="cycle_style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Циклы</title>
</head>
<body>
<?
for ($i = 5; $i <= 13; $i++){
    echo $i . "<br><br>" ;}
?>
<?php
$num = 1000;
$i = 0;
while ($num >= 50) {
    $num /= 2;
    $i++;
}
echo "Получилось число: $num <br>";
echo "Итераций вышло: $i <br> <br>";
?>
<?php
$i = 0;
for ($num =1000; $num /=2; $i++) {
    if ($num <= 50)
        break;

}
echo "Число от for: $num <br>";
echo "Итерации от for: $i <br><br>";
?>
<?php
$i = ['0' =>'0,1,2,3,4,5,6,7,8,9,10' ,
    '1' => '0,1,2,3,4,5,6,7,8,9',
    '2' => '0,1,2,3,4,5,6,7,8',
    '3' => '0,1,2,3,4,5,6,7',
    '4' => '0,1,2,3,4,5,6',
    '5' => '0,1,2,3,4,5',
    '6' => '0,1,2,3,4',
    '7' => '0,1,2,3',
    '8' => '0,1,2',
    '9' => '0,1',
    '10' => '0'];
foreach ($i as $value){
    echo "$value <br>";
}
?>
</body>
</html>