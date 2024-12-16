<?php

namespace Alura\DesignPatter;

use Alura\DesignPatter\Impostos\Imposto;

class CalculadoraImpostos {
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}