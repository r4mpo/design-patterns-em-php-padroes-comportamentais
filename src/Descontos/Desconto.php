<?php

namespace Alura\DesignPatter\Descontos;

use Alura\DesignPatter\Orcamento;

abstract class Desconto {
    protected ? Desconto $proximoDesconto;

    public function __construct(? Desconto $proximoDesconto){
        $this->proximoDesconto = $proximoDesconto;
    }
    abstract public function calcula(Orcamento $orcamento): float|int;
}