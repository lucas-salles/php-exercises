<?php
namespace MirrorSequence;

class MirrorSequence {
    public static function mirrorSequence($a, $b) {
        $result;
        for($i = $a; $i <= $b; $i++) {
            $result .= (string)$i;
        }
        $aux = array_reverse(str_split($result));
        foreach ($aux as $value) {
            $result .= $value;
        }
        return $result;
    }
}