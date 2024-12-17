<?php

namespace Alura\DesignPatter\Descontos;

use Alura\DesignPatter\Orcamento;

class SemDesconto extends Desconto
{
    public function __construct()
    {
        parent::__construct(null);
    }
    public function calcula(Orcamento $orcamento): float|int
    {
        return 0;
    }
}
