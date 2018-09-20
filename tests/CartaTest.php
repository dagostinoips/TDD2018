<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {

    public function testPalo() {
        $carta = New Carta(0, "Espada");
        $this->assertEquals($carta->palo(), "Espada");
    }

    public function testNumero() {
        $carta = New Carta(11, "Basto");
        $this->assertEquals($carta->numero(), 11);
    }

}