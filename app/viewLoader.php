<?php

class viewLoader 
{
    private static $path = './view/';
    private static $postfix = '.view.php';

    public static function load($name)
    {
        include (self::$path.$name.self::$postfix);

        // echo eval(file_get_contents(self::$path.$name.self::$postfix));
    }
}