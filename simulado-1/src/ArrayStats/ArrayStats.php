<?php
namespace ArrayStats;

class ArrayStats {
    public static function arrayStats($numbers) {
        $menor = array_filter($numbers, function($numbers) {
            return $numbers < 0;
        });
        $igual = array_filter($numbers, function($numbers) {
            return $numbers == 0;
        });
        $maior = array_filter($numbers, function($numbers) {
            return $numbers > 0;
        });
        $menor = number_format(count($menor) / sizeof($numbers), 6);
        $igual = number_format(count($igual) / sizeof($numbers), 6);
        $maior = number_format(count($maior) / sizeof($numbers), 6);
        return [$menor, $igual, $maior];
    }
}