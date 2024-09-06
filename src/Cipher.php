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

            if ($position !== false) {
                $result[] = $reversed[$position];
            } else {
                $result[] = $value[$i];
            }
        }

        return implode($result);
    }
}