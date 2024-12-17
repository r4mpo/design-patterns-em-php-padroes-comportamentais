<?php

namespace Alura\DesignPatter;

use Alura\DesignPatter\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPatter\Descontos\DescontoQuantidadeItensMaiorQue5;
use Alura\DesignPatter\Descontos\SemDesconto;

class CalculadoraDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float|int
    {

        $cadeiaDescontos = new DescontoMaisDe500Reais(
            new DescontoQuantidadeItensMaiorQue5(
                new SemDesconto()
            )
        );

        return $cadeiaDescontos->calcula($orcamento);
    }
}
