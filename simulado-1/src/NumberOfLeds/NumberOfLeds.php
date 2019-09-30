<?php
namespace NumberOfLeds;

class NumberOfLeds {
    public static function numberOfLeds($number) {
        $result = 0;
        $leds = [6, 2, 5, 5, 4, 5, 6, 3, 7, 6];
        foreach (str_split($number) as $value) {
            $result += $leds[(int)$value];
        }
        return $result;
    }
}