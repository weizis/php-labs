<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// 1 задание
try {
    $file = fopen("nofile.txt", "r");
    if (!$file) {
        throw new Exception("Файл не существует");
    }
    fclose($file);
} catch (Exception $ex) {
    echo "Исключение: " . $ex->getMessage() . "<br>";
}

// 2 задание
try {
    $a = 10;
    $b = 0;
    if ($b == 0) {
        throw new Exception("Деление на ноль невозможно");
    }
    $result = $a / $b;
    echo "Результат: $result<br>";
} catch (Exception $ex) {
    echo "Исключение: " . $ex->getMessage() . "<br>";
    $log = fopen("log.txt", "a");
    fwrite($log, date("Y-m-d H:i:s") . " - " . $ex->getMessage() . "\n");
    fclose($log);
}

// 3 задание
$countries = ['Spain' => 'Madrid', 'Russia' => 'Moscow'];
try {
    $country = 'Germany';
    if (!array_key_exists($country, $countries)) {
        throw new Exception("Страна $country не найдена в массиве");
    }
    echo "Столица: " . $countries[$country] . "<br>";
} catch (Exception $ex) {
    echo "Исключение: " . $ex->getMessage() . "<br>";
}
//2 часть
// 1 задание
$timestamp = mktime(10, 25, 0, 3, 15, 2025);
echo "Timestamp: $timestamp<br>";

// 2 задание
$date1 = mktime(8, 5, 59, 10, 2, 1990);
$date2 = time();
$diff = $date2 - $date1;
echo "Разница в секундах: $diff<br>";
echo "Разница в днях: " . floor($diff / 86400) . " дней<br>";

// 3 задание
echo "Текущая дата: " . date("Y.m.d H:i:s") . "<br>";
// 4 задание
$september = mktime(0, 0, 0, 9, 1);
echo "1 сентября: " . date("Y.m.d", $september) . "<br>";

// 5 задание
$week = ["воскресенье", "понедельник", "вторник", "среда", "четверг", 
"пятница", "суббота"];
$day_number = date("w", mktime(0, 0, 0, 2, 2, 2000));
echo "2 февраля 2000 года был " . $week[$day_number] . "<br>";

// 6 задание
$current_day = date("w");
echo "Сегодня " . $week[$current_day] . "<br>";

// 7 задание
$birth_day = date("w", mktime(0, 0, 0, 6, 12, 2016));
echo "12 июня 2016 года был " . $week[$birth_day] . "<br>";

// 8 задание
if (isset($_POST['date1']) && isset($_POST['date2'])) {
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $timestamp1 = strtotime($date1);
    $timestamp2 = strtotime($date2);
    
    if ($timestamp1 > $timestamp2) {
        echo "Дата $date1 больше, чем $date2<br>";
    } elseif ($timestamp2 > $timestamp1) {
        echo "Дата $date2 больше, чем $date1<br>";
    } else {
        echo "Даты равны<br>";
    }
}
?>
<form method="POST">
    <input type="date" name="date1" required>
    <input type="date" name="date2" required>
    <button type="submit">Сравнить</button>
</form>
<?php

// 9 задание
$date_str = "2025-12-31";
$timestamp = strtotime($date_str);
$new_format = date("d-m-Y", $timestamp);
echo "Исходная дата: $date_str<br>";
echo "Преобразованная: $new_format<br>";

// 10 задание
$date = date_create("2000-02-03");
echo "Исходная дата: " . date_format($date, "d.m.Y") . "<br>";

date_modify($date, "2 days");
echo "+2 дня: " . date_format($date, "d.m.Y") . "<br>";

date_modify($date, "1 month");
echo "+1 месяц: " . date_format($date, "d.m.Y") . "<br>";

date_modify($date, "3 days");
echo "+3 дня: " . date_format($date, "d.m.Y") . "<br>";

date_modify($date, "1 year");
echo "+1 год: " . date_format($date, "d.m.Y") . "<br>";

date_modify($date, "-3 days");
echo "-3 дня: " . date_format($date, "d.m.Y") . "<br>";

// 11 задание
$now = time();
$new_year = mktime(0, 0, 0, 1, 1, date("Y") + 1);
$days_left = ceil(($new_year - $now) / 86400);
echo "До Нового Года осталось $days_left дней<br>";

?>
