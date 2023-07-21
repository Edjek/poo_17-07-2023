<?php

namespace App\namespace;

class Peugeot extends Vehicule implements Engine
{
    private string $carburant;

    /**
     *
     * @return string
     * 
     */
    public function carburant(): string
    {
        return "essence";
    }

    public function nbTest(): int
    {
        return parent::nbTest() + 70;
    }

    // method start prendra en parametre une variable de type User
        // retournera XXX a démarré la Peugeot

    public function start(User $a)
    {
        return $a->getPseudo(). 'a demarré la Peugeot';
    }
}