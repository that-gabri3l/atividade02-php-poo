<?php

require_once __DIR__ . '/Veiculo.php';

class Carro extends Veiculo
{
    private int $portas;

    public function __construct(
        string $marca,
        string $modelo,
        int $ano,
        float $diaria,
        int $portas
    ) {
        parent::__construct($marca, $modelo, $ano, $diaria);
        $this->portas = $portas;
    }

    public function getPortas(): int
    {
        return $this->portas;
    }

    public function getCaracteristica(): string
    {
        return 'Portas: ' . $this->portas;
    }
}
