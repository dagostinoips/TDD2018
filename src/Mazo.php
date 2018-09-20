<?php

namespace TDD;

class Mazo {

  protected $array = [];
  protected $cant = 0;
  protected $top;

  public function esVacio() {
    return empty($this->array);
  }

  public function agregar($element) {
    $this->array[] = $element;
    $this->cant += 1;
  }

  public function sacar() {
    if($this->cant > 0) {
      $this->top = $this->array[$this->cant-1];
      unset($this->array[$this->cant-1]);

      return $this->top;
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
