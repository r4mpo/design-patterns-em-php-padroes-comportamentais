<?php 

namespace Alura\DesignPatter;

class Pedido {
    public string $nomeCliente;
    public \DateTimeInterface $dataFinalizacao;
    public Orcamento $orcamento;
}