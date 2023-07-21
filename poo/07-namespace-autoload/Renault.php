<?php

namespace App\namespace;

require_once './Engine.php';

class Renault extends Vehicule implements Engine
{
    private string $carburant;

    /**
     *
     * @return string
     * 
     */
    public function carburant(): string
    {
        return "diesel";
    }

    public function nbTest(): int
    {
        return parent::nbTest() + 30;
    }

    public function start(User $user)
    {
        return $user->getPseudo(). 'a demarré la Renault';
    }
}
