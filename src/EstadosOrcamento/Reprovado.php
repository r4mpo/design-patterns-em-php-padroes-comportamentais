<?php

namespace Alura\DesignPatter\EstadosOrcamento;

use Alura\DesignPatter\Orcamento;
use DomainException;

class Reprovado extends EstadosOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException('Estado de orçamento consta como reprovado. Logo, é não pode receber desconto extra.');
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estado = new Finalizado();
    }
}
