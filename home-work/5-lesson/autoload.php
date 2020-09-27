<?php

/**
 * PSR0 стандарт автозагрузки файлов PHP
 */

spl_autoload_register(function ($className) {

    //Удаляет \\ символы из начала строки
    $className = ltrim($className, '\\');

    $fileName = '';

    $namespace = '';

    //$lastNsPos - записывается количество строк до первого вхождения символа \ - т.е. если будет Src\Order,. она вернет 3 т.к. после трех символов идет символ \
    if ($lastNsPos = strrpos($className, '\\')) {
        //Удаем все символы в $classname - начиная от 0 до первого вхождения символа \ получаем  - Src в нашем случаи
        $namespace = substr($className, 0, $lastNsPos);
        //Удаляем все симполы начиная от первого вхождения символа / включая сам символ / поэтому тут +1 - получаем в нашем случаи название класса это Order
        $className = substr($className, $lastNsPos + 1);
        //Формируем путь до файла т.е. берем namespace - заменяем в нем все символы \ на константу DIRECTORY_SEPARATOR зависит от ОС + в конце тоже добавляем DIRECTORY_SEPARATOR
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }

    //Формируем полный путь к файлу
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';


    //Подключаем файл
    require $fileName;

});