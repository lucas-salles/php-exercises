<?php
namespace Date;

class Format {
  public static function long($date) {
    $pattern = '/\d{2}\/\d{2}\/\d{4}/';
    if (!preg_match($pattern, $date))
      return "Invalid data input";
    $month = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];
    $result = explode("/", $date);
    return $result[0] . " de " . $month[$result[1] - 1] . " de " . $result[2];
  }
}