<?php

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value) //fun to validate email - currently not used, but it works properly
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}