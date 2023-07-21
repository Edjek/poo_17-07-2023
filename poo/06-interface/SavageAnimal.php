<?php

namespace App\interface;

// Une interface est un contrat qui permet de définir des méthodes que les classes qui implémentent cette interface doivent implémenter.

interface SavageAnimal
{
    // retourne je viens de dévorer un animal
    public function devore();

    // retourne je viens de dévorer un XXX (nom de l'oiseau)
    public function eatSomeOne(Bird $bird);
}
