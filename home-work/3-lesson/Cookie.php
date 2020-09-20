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
    public static function set(string $name, string $value): string
    {
        if (is_array($value))
        {
            $str = serialize($value);
            setcookie($name, $str, time() + 3600);
        }
        else {
            setcookie($name, $value, time() + 3600);
        }
        return $_COOKIE[$name];
    }

    /**
        Получаем ячейку по имени $name из куков.
        @param $name
     */
    public static function get($name)
    {
        $str = $_COOKIE[$name];
        $result = unserialize($str);
        return $_COOKIE[$result];
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
