<?php

namespace App\interface;

// Une interface est un contrat qui permet de définir des méthodes que les classes qui implémentent cette interface doivent implémenter.
interface SavageAnimal
{
    /**
     * Retourne je viens de dévorer un animal
     *
     * @return string
     */
    public function devore(): string;

    /**
     * Retourne je viens de dévorer un XXX (nom de l'oiseau)
     *
     * @param Bird $bird
     *
     * @return string
     */
    public function eatSomeOne(Bird $bird): string;
}
