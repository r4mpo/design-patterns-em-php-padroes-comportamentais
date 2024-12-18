<?php

namespace Alura\DesignPatter\Impostos;

use Alura\DesignPatter\Orcamento;

class Ikcv extends ImpostoCom2Aliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
    }

    protected function calculaTaxaMaxima($orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    protected function calculaTaxaMinima($orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}