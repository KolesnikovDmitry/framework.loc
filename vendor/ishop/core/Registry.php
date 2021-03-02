<?php

namespace ishop;

//метод реестра
class Registry
{

    use TSingletone;

    //контейнер для свойств
    protected static $properties = [];

    //setter
    public function setProperty($name, $value): void
    {
        self::$properties[$name] = $value;
    }

    //getter
    public function getProperty($name)
    {
        if (isset(self::$properties[$name])) {
            return self::$properties[$name];
        }
        return null;
    }

    // метод, который будет распечатывать все доступные свойства, в основном будет использоваться для дебага
    public function getProperties()
    {
        return self::$properties;
    }

}
