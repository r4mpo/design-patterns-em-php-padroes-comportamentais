<?php 

namespace Alura\DesignPatter;

use Alura\DesignPatter\EstadosOrcamento\EmAprovacao;
use Alura\DesignPatter\EstadosOrcamento\EstadosOrcamento;
use DomainException;

class Orcamento {
    public float $valor;
    public int $quantidadeItens;
    public EstadosOrcamento $estado;

    public function __construct() {
        $this->estado = new EmAprovacao();
    }

    public function aplicaDescontoExtra()
    {
        return $this->estado->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estado->aprova($this);
    }

    public function reprova()
    {
        $this->estado->reprova($this);
    }

    public function finaliza()
    {
        $this->estado->finaliza($this);
    }
}