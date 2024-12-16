<?php

namespace Alura\DesignPatter\Impostos;

use Alura\DesignPatter\Orcamento;

class Iss implements Imposto {
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;            
    }
}