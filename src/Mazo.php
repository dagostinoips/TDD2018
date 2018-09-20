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

  public function buscar($element) {
    if($element <= $this->cantidad) {
      return $this->array[$element];
    }
    else {
      return False;
    }
  }

  public function cantidad() {
    return $this->cant;
  }

  public function mezclar() {
    return TRUE;
  }
}
