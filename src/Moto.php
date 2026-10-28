<?php

require_once __DIR__ . '/Veiculo.php';

class Moto extends Veiculo
{
    private int $cilindradas;

    public function __construct(
        string $marca,
        string $modelo,
        int $ano,
        float $diaria,
        int $cilindradas
    ) {
        parent::__construct($marca, $modelo, $ano, $diaria);
        $this->cilindradas = $cilindradas;
    }

    public function getCilindradas(): int
    {
        return $this->cilindradas;
    }

    public function getCaracteristica(): string
    {
        return 'Cilindradas: ' . $this->cilindradas;
    }
}
