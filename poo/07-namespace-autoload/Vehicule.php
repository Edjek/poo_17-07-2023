<?php

namespace App\namespace;

abstract class Vehicule
{
    /**
     *
     * @var int
     */
    protected int $nbTest = 100;

    /**
     *
     * @return string
     *
     */
    final public function demarrer(): string
    {
        return "Je suis démarrer!";
    }

    public abstract function carburant();

    /**
     *
     * @return int
     * 
     */
    public function nbTest(): int
    {
        return $this->nbTest;
    }
}