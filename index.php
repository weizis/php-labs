<?php

// 1 задание
$file = fopen("test.txt", "w");
fwrite($file, "Привет, мир!");
fclose($file);
echo "Файл test.txt создан и записана фраза 'Привет, мир!'<br>";

// 2 задание
$file = fopen("test.txt", "r");
$content = fgets($file, 1024);
fclose($file);
echo "Содержимое: $content<br>";

// 3 задание
rename("test.txt", "mir.txt");
echo "Файл переименован в mir.txt<br>";

// 4 задание
mkdir("folder");
rename("mir.txt", "folder/mir.txt");
echo "Папка folder создана, файл перемещен<br>";

// 5 задание
copy("folder/mir.txt", "world.txt");
echo "Создана копия world.txt<br>";

// 6 задание
$bytes = filesize("world.txt");
echo "Байты: $bytes<br>";
echo "МБ: " . ($bytes / 1024 / 1024) . "<br>";
echo "ГБ: " . ($bytes / 1024 / 1024 / 1024) . "<br>";

// 7 задание
unlink("world.txt");
echo "Файл world.txt удален<br>";

// 8 задание
if (file_exists("world.txt") == true) {
    echo "world.txt: существует<br>";
} else {
    echo "world.txt: не существует<br>";
}
if (file_exists("folder/mir.txt") == true) {
    echo "folder/mir.txt: существует<br>";
} else {
    echo "folder/mir.txt: не существует<br>";
}

// 9 задание
mkdir("test");
echo "Папка test создана<br>";

// 10 задание
rename("test", "www");
echo "Папка переименована в www<br>";

// 11 задание
rmdir("www");
echo "Папка www удалена<br>";

// 12 задание
mkdir("test");
$folders = ["папка1", "папка2", "папка3", "документы", "изображения"];
foreach ($folders as $folder) {
    mkdir("test/" . $folder);
    echo "Создана test/$folder<br>";
}

// 13 задание
$jpg_files = glob("*.jpg");
if (count($jpg_files) > 0) {
    foreach ($jpg_files as $file) {
        echo "$file (размер: " . filesize($file) . " байт)<br>";
    }
} else {
    echo "JPG файлы не найдены<br>";
}

?>
