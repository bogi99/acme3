<?php
class dd {

    public function __construct($var)
    {
        echo "<pre>" ; print_r ($var); echo "</pre>";
        self::dd($var);
        //exit;
    }

    static function dd($var) {
        if(PHP_SAPI === 'cli'){
            echo print_r($var);
        } else {
            echo "<pre>" ; print_r ($var); echo "</pre>";
        }
        
    }
}