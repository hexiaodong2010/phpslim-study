<?php

namespace lib;

use Curl\Curl;
use models\System;

class Utils
{

    /**
     * get curl singleton
     * @param array $config
     * @return Curl
     */
    public static function curl($config = [])
    {
        static $singleton = null;
        if ($singleton instanceof Curl) {
            $singleton->reset();
        } else {
            $singleton = new Curl();
        }
        return $singleton;
    }
    //TODO OTC
}