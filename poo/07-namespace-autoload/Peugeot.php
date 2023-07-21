<?php

namespace App\namespace;

class Peugeot extends Vehicule implements Engine
{
    /**
     * @var string
     */
    private string $carburant;

    /**
     * @return string
     */
    public function carburant(): string
    {
        return "essence";
    }

    /**
     * @return int
     */
    public function nbTest(): int
    {
        return parent::nbTest() + 70;
    }

    /**
     * @param User $a
     *
     * @return string
     */
    public function start(User $a): string
    {
        return $a->getPseudo(). 'a demarré la Peugeot';
    }
}