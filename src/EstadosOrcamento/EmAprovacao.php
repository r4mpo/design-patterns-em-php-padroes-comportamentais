<?php

namespace Alura\DesignPatter\EstadosOrcamento;

use Alura\DesignPatter\Orcamento;

class EmAprovacao extends EstadosOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.05;
    }

    public function aprova(Orcamento $orcamento)
    {
        $orcamento->estado = new Aprovado();
    }

    public function reprova(Orcamento $orcamento)
    {
        $orcamento->estado = new Reprovado();
    }
}
