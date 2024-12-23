<?php

namespace Alura\DesignPatter\EstadosOrcamento;

use Alura\DesignPatter\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException('Estado de orçamento consta como finalizado. Logo, é não pode receber desconto extra.');
    }
}