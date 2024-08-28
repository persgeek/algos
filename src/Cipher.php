<?php

namespace PG\Algos;

class Cipher
{
    public static function atbash($value)
    {
        $result = [];

        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $reversed = Str::reverse($chars);

        for ($i = 0; $i < strlen($value); $i++) {

            $position = strpos($chars, $value[$i]);

            $result[] = $reversed[$position];
        }

        return implode($result);
    }
}