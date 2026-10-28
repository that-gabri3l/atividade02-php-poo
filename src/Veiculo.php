<?php

abstract class Veiculo
{
    private string $marca;
    private string $modelo;
    private int $ano;
    private float $diaria;

    public function __construct(string $marca, string $modelo, int $ano, float $diaria)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->diaria = $diaria;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    public function getDiaria(): float
    {
        return $this->diaria;
    }

    abstract public function getCaracteristica(): string;
}