<?php
namespace RotLeft;

class RotLeft {
    public static function rotLeft($array, $salto) {
        for($i = 0; $i < $salto; $i++) {
            array_push($array, array_shift($array));
        }
        return $array;
    }
}