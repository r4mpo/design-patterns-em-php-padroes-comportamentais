<?php

use Alura\DesignPatter\CalculadoraDescontos;
use Alura\DesignPatter\Impostos\Iss;
use Alura\DesignPatter\Orcamento;
use Alura\DesignPatter\CalculadoraImpostos;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->valor = 600;

$imposto = new Iss();

$calculadoraImpostos = new CalculadoraImpostos();
echo "Imposto: " . $calculadoraImpostos->calcula($orcamento, $imposto);

echo '<br>';

$orcamento->quantidadeItens = 1;
$calculadoraDescontos = new CalculadoraDescontos();
echo "Desconto: " . $calculadoraDescontos->calculaDescontos($orcamento);