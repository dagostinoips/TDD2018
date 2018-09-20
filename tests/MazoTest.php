<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    public function testEsVacio() {
        $mazo = new Mazo;
        $this->assertTrue($mazo->esVacio());
        $mazo->agregar("carta1");
        $this->assertFalse($mazo->esVacio());
    }

    public function testCantidad() {
        $mazo = new Mazo;
        $this->assertEquals($mazo->cantidad(), 0);
        $mazo->agregar("carta1");
        $mazo->agregar("carta2");
        $mazo->agregar("carta3");
        $mazo->agregar("carta4");
        $this->assertEquals($mazo->cantidad(), 4);
    }

    public function testSacar() {
        $mazo = new Mazo;
        $this->assertFalse($mazo->sacar());
        $mazo->agregar("carta1");
        $mazo->agregar("carta2");
        $mazo->agregar("carta3");
        $mazo->agregar("carta4");
        $this->assertEquals($mazo->sacar(), "carta4");
    }

    public function testMezclar() {
        $mazo = new Mazo;
        $mazo->agregar("carta1");
        $mazo->agregar("carta2");
        $mazo->agregar("carta3");
        $mazo->agregar("carta4");
        $this->assertTrue($mazo->mezclar());
        #$this->assertNotEquals($mazo->sacar(), "carta4");
    }

    public function testExiste() {
        $mazo = new Mazo;
        $this->assertTrue(isset($mazo));
    }
}
