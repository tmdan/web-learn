<?php

/**
 * Класс для работы с куками
 * Class Cookie
 */
class Cookie
{
    /**
     * Устанавливаем ячейку по имени $name c содержимым $value.
     * @param string $name - имя ячейки
     * @param string $value - значение (массив либо строка)
     * @return string - возращается установленное значение
     */
    public static function set(string $name, string $value, string $time): string
    {
        if (is_array($value))
        {
            $str = serialize($value);
            setcookie($name, $str, time() +  intval($time));
        }
        else {
            setcookie($name, $value, time() +  intval($time));
        }
        return $_COOKIE[$name];
    }

    /**
        Получаем ячейку по имени $name из куков.
        @param $name
     */
    public static function get($name)
    {
        $value = $_COOKIE[$name];
        if (is_array($value))
        {
            $result = unserialize($_COOKIE[$name]);
            return $result;
        }
        else {
            return $_COOKIE[$name];
        }
    }

    /**
     * Удаляем ячейку по имени $name из куков.
     * @param $name
     * @return bool
     */
    public static function delete($name): bool
    {
        setcookie($name, '', time() - 3600);
        return true;
    }
}
