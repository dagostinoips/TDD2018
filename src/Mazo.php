<?php

namespace TDD;

class Mazo {

  protected $array = [];
  protected $cant = 0;

  public function esVacio() {
    return empty($this->array);
  }

  public function agregar($element) {
    $this->array[] = $element;
    $this->cant += 1;
  }

  public function cantidad() {
    return $this->cant;
  }

  public function mezclar() {
    return TRUE;
  }
}
