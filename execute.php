<?php

use Alura\DesignPatter\Impostos\Iss;
use Alura\DesignPatter\Orcamento;
use Alura\DesignPatter\CalculadoraImpostos;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->valor = 100;

$imposto = new Iss();

$calculadora = new CalculadoraImpostos();
echo $calculadora->calcula($orcamento, $imposto);