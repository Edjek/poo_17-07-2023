<?php

namespace App\namespace;

require_once './Engine.php';

class Renault extends Vehicule implements Engine
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
        return "diesel";
    }

    /**
     * @return int
     */
    public function nbTest(): int
    {
        return parent::nbTest() + 30;
    }

    /**
     * @param User $user
     *
     * @return string
     */
    public function start(User $user): string
    {
        return $user->getPseudo(). 'a demarré la Renault';
    }
}
