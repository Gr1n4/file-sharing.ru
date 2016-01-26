<?php

class Listing {
  
  public static function get_list() {
    $dir = scandir(dir . '/data/' . $_SESSION['user']);

    return $dir;
  }
}