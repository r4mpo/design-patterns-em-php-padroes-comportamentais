<?php

namespace Alura\DesignPatter\Impostos;

use Alura\DesignPatter\Orcamento;

class Icpp extends ImpostoCom2Aliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }

    protected function calculaTaxaMaxima($orcamento): float
    {
        return $orcamento->valor * 0.03;
    }

    protected function calculaTaxaMinima($orcamento): float
    {
        return $orcamento->valor * 0.5;
    }
}