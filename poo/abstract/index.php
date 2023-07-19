<?php

require_once './Player.php';
require_once './Warrior.php';

$guerrier = new Warrior('Ken', 23);
echo $guerrier->getName();
echo $guerrier->getSCore();
echo $guerrier->getArrow();
// creer une class Player
    // name;
    // life par defaut à 100
    // score par defaut à 0
    // constructor
        // initialise le name
    // getter et setter
    // method hit(), elle enleve 10 point life

// creer une class Warrior qui herite de player
    // arrow (nombre de fleche)
    // constructor
    // getter et setter
    // method hit(), elle enleve 15 point life


// creer une class Mage qui herite de Player
    // mana un entier
    // constructor
    // getter et setter
    // method hit(), elle enleve 30 point life

