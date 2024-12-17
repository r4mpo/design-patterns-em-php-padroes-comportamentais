<?php

namespace Alura\DesignPatter\Descontos;

use Alura\DesignPatter\Orcamento;

class DescontoMaisDe500Reais extends Desconto {
    public function calcula(Orcamento $orcamento): float|int
    {
        if($orcamento->valor > 500){
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calcula($orcamento);
    }
}