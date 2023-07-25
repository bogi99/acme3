<?php

    class listRandomizer
    {
        public static function getList($thelistname)
        {
           $list = explode("|" ,file_get_contents($thelistname));
           $countitems = sizeof($list)-2;
           $selectedIndex = rand(0, $countitems);

           return $list[$selectedIndex];


        }

    }
