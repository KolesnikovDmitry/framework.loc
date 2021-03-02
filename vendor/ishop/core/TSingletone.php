<?php

namespace ishop;

trait TSingletone
{

    private static $instance;

    //Если свойство пусто , то мы положим в него обьект, и его вернем
    //Если свойство не пусто, то мы просто вернем этот обьект
    public static function instance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }

}
