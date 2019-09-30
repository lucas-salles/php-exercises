<?php
namespace HighestFrequency;

class HighestFrequency {
    public static function highestFrequency($array) {
        foreach (array_count_values($array) as $key => $value)
            if($value == max(array_count_values($array)))
                return $key;
    }
}