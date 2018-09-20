<?php

namespace TDD;

class Mazo {

  protected $array = [];

  public function esVacio() {
    return empty($array);
  }

  public function agregar($element) {
    $this->array[] = $element;
  }

  public function mezclar() {
    return TRUE;
  }
}
