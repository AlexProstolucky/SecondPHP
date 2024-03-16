<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$variable1 = 10;
$variable2 = 5;

if ($variable1 % $variable2 == 0) {
    echo "$variable1 є кратним $variable2";
} else {
    echo "$variable1 не є кратним $variable2";
}

echo "<br>";

echo "Квадрат більшого числа: " . max($variable1, $variable2) ** 2;

echo "<br>";

$monthNumber = 2;
echo match($monthNumber) {
    1, 3, 5, 7, 8, 10, 12 => "31 день",
    4, 6, 9, 11 => "30 днів",
    2 => "28 або 29 днів, залежно від високосного року",
    default => "Неправильно введений номер місяця",
};
echo "<br>";


$year = 2024;

if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
    echo "$year є високосним роком.";
} else {
    echo "$year не є високосним роком.";
}

echo "<br>";
?>
</body>
</html>
