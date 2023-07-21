<?php

namespace App\namespace;

abstract class Vehicule
{
    /**
     * @var int
     */
    protected int $nbTest = 100;

    /**
     * @return string
     */
    public abstract function carburant(): string;
    /**
     * @return string
     */
    final public function demarrer(): string
    {
        return "Je suis démarrer!";
    }

    /**
     * @return int
     */
    public function nbTest(): int
    {
        return $this->nbTest;
    }
}
