<?php

namespace TDD;

class Mazo {

  protected $array = [];

  public function esVacio() {
    return empty($array);
  }

  public function mezclar() {
    return TRUE;
  }
}
