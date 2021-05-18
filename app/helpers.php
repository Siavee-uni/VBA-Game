<?php

if (!function_exists('shuffle_array')) {
    function shuffle_array($array): array
    {
        if (!is_array($array)) return $array;

        $keys = array_keys($array);
        shuffle($keys);
        $random = [];
        foreach ($keys as $key) {
            $random[$key] = $array[$key];
        }
        return array_values($random);
    }
}

if (!function_exists('tolowerRemoveSpace')) {
    function tolowerRemoveSpace($data): array
    {
        $trimmedData = [];

        foreach ($data as $value) {
            $value = str_replace(" ", "", $value);
            $value = strtolower($value);
            $trimmedData[] = $value;
        }
        return $trimmedData;
    }
}

if (!function_exists('stringToArray')) {
    function stringToArray($string): array
    {
        return explode("\n", str_replace("\r", "", $string));
    }
}
