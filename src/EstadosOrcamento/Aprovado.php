<?php

namespace Alura\DesignPatter\EstadosOrcamento;

use Alura\DesignPatter\Orcamento;

class Aprovado extends EstadosOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estado = new Finalizado();
    }
}
