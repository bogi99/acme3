<?php

class RandomGen {

    public static function bytes($len = 8){
        return bin2hex(random_bytes($len));
    }
}