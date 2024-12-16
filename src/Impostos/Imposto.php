<?php

namespace Alura\DesignPatter\Impostos;

use Alura\DesignPatter\Orcamento;

interface Imposto {
    public function calculaImposto(Orcamento $orcamento): float;
}