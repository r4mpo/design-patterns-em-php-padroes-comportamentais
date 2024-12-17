<?php

namespace Alura\DesignPatter\Descontos;

use Alura\DesignPatter\Orcamento;

class DescontoQuantidadeItensMaiorQue5 extends Desconto {
    public function calcula(Orcamento $orcamento): float|int
    {
        if($orcamento->quantidadeItens > 5)
        {
            return  $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calcula($orcamento);
    }
}