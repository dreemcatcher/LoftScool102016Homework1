<?php
if (defined('GRAVITY')) {      // Проверьте, существует ли константа, которую Вы хотите использовать
    define('GRAVITY', '9.8');  // Создайте константу и присвойте ей значение. | здесь не вижу обходимости в двойных кавычках
    echo 'GRAVITY = ', GRAVITY, "<br>"; // Выведите значение созданной константы
}
define('GRAVITY', 'Новое значение');  // Попытайтесь изменить значение созданной константы. | здесь не вижу обходимости в двойных кавычках
echo 'GRAVITY = ', GRAVITY, "<br>";