<?php

namespace PG\Algos;

class Str
{
    public static function reverse($value)
    {
        $result = [];

        for ($i = strlen($value) - 1; $i >= 0; $i--) {

            $result[] = $value[$i];
        }

        return implode($result);
    }
}