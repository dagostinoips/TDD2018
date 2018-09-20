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

    public function testExiste() {
        $mazo = new Mazo;
        $this->assertTrue(isset($mazo));
    }

    public function testMezclable() {
        $mazo = new Mazo;
        $this->assertTrue($mazo->mezclar());
    }


}
