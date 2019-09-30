<?php
namespace ZeroMeansZero;

class ZeroMeansZero {
    public static function zeroMeansZero($a, $b) {
        $result;
        foreach (str_split($a + $b) as $number) {
            if ($number != "0")
                $result .= $number;
        }
        return (int)$result;
    }
}