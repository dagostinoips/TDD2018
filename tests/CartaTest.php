<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {

    public function testPalo() {
        $carta = New Carta("Espada");
        $this->assertEquals($carta->palo(), "Espada");
    }

}