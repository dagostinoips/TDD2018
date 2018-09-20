<?php

namespace TDD;

class Carta {

    protected $palo;

    public function __construct($palo) {
        $this->palo = $palo;
    }

    public function palo() {
        return $this->palo;
    }

}