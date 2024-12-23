<?php

require_once 'vendor/autoload.php';

use Alura\DesignPatter\{GerarPedido}; // duas classes com o mesmo caminho

# $argv = variável que vem preenchida automaticamente
# pelo php quando rodamos linhas de comando. Os valores
# variam de acordo com aquilo que executamos no terminal:
$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);
$gerarPedido->execute();