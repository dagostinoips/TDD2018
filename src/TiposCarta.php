<?php

namespace TDD;


abstract class TiposCarta {
    const E_ORO = "eo";
    const E_COPA = "ec";
    const E_ESPADA = "ee";
    const E_BASTO = "eb";

    const P_TREBOL = "pt";
    const P_PICA = "pp";
    const P_CORAZON = "pc";
    const P_DIAMANTE = "pd";

    public static function hash(string $tipo): int {
        $result = 31;
        $result = 31 * $result + $tipo[0];
        $result = 31 * $result + $tipo[1];
        return $result;
    }
}