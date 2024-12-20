<?php

namespace Alura\DesignPatter\EstadosOrcamento;

use Alura\DesignPatter\Orcamento;
use DomainException;

abstract class EstadosOrcamento
{
    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento)
    {
        new DomainException('Este orçamento não pode ser aprovado.');
    }

    public function reprova(Orcamento $orcamento)
    {
        new DomainException('Este orçamento não pode ser reprovado.');
    }

    public function finaliza(Orcamento $orcamento)
    {
        new DomainException('Este orçamento não pode ser finalizado.');
    }
}
