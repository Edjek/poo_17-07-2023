<?php

namespace App\interface;

require_once './Animal.php';
require_once './SavageAnimal.php';

class Dog extends Animal implements SavageAnimal
{
    private string $pedigree;

    public function __construct(string $name, int $age, int $nbPattes, array $listAliment, string $pedigree)
    {
        parent::__construct($name, $age, $nbPattes, $listAliment);
        $this->pedigree = $pedigree;
        // $this->name = $name;
        // $this->age = $age;
        // $this->nbPattes = $nbPattes;
        // $this->listAliment = $listAliment;
    }

    public function getEat()
    {
    }

    public function devore()
    {
        return 'je viens de dévorer un animal';
    }

    public function eatSomeOne(Bird $x)
    {
        return 'je viens de dévorer :' . $x->getName();
    }

    /**
     * Get the value of pedigree
     */
    public function getPedigree()
    {
        return $this->pedigree;
    }

    /**
     * Set the value of pedigree
     *
     * @return  self
     */
    public function setPedigree($pedigree)
    {
        $this->pedigree = $pedigree;

        return $this;
    }

    public function description()
    {
        return "Je m'appelle : $this->name et j'ai $this->age ans et mon pedigree est : $this->pedigree et je mange des" . implode(' ', $this->listAliment);
    }
}
