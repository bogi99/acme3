<?php

class readEnv
{

    public static function get($var)
    {

        if (file_exists('./.env')) {

            $envcontent = explode(PHP_EOL, file_get_contents('./.env'));

            foreach ($envcontent as $line) {

                $lineKeyValuepair = explode("=", $line);

                if ($lineKeyValuepair[0] == $var) {

                    return $lineKeyValuepair[1];
                }
            }

            return null;
        } else {

            return null;
        }
    }
}
