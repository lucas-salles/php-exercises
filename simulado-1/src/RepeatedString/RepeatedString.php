<?php
namespace RepeatedString;

class RepeatedString {
    public static function repeatedString($expressao, $limite) {
        $result;
        $array = str_split($expressao);
        for($i = 0; $i < $limite; $i++) {
            $result .= $array[$i%sizeof($array)];
        }
        $result = str_split($result);
        foreach (array_count_values($result) as $key => $value)
            if($key == "a")
                return $value;
        return 0;
    }
}