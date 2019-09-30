<?php
namespace MinMaxSum;

class MinMaxSum {
    public static function minMaxSum($array) {
        $aux = $array;
        $min = 0;
        $max = 0;
        for($i = 0; $i < 4; $i++) {
            $min += min($aux);
            unset($aux[array_search(min($aux), $aux)]);
        }
        $aux = $array;
        for($i = 0; $i < 4; $i++) {
            $max += max($aux);
            unset($aux[array_search(max($aux), $aux)]);
        }
        return [$min, $max];
    }
}