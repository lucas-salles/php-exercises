<?php
namespace SockMerchant;

class SockMerchant {
  public static function sockMerchant($socks): int {
    /*
    $cont;
    foreach(array_count_values($socks) as $sock) {
      $cont += intdiv($sock, 2);
    }
    return $cont;
    */
    return array_reduce(array_count_values($socks), function($result, $sock) {
      return $result += intdiv($sock, 2);
    });
  }
}