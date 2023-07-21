<?php

namespace App\interface;

require_once './SavageAnimal.php';

class Dog extends Animal implements SavageAnimal
{
    /**
     * @var string
     */
    private string $pedigree;

    /**
     * @param string $name
     * @param int $age
     * @param int $nbPattes
     * @param array $listAliment
     * @param string $pedigree
     */
    public function __construct(string $name, int $age, int $nbPattes, array $listAliment, string $pedigree)
    {
        parent::__construct($name, $age, $nbPattes, $listAliment);
        $this->pedigree = $pedigree;
    }

    public function getEat()
    {
    }

    /**
     * @return string
     */
    public function devore(): string
    {
        return 'je viens de dévorer un animal';
    }

    /**
     * @param Bird $x
     *
     * @return string
     */
    public function eatSomeOne(Bird $x): string
    {
        return 'je viens de dévorer :' . $x->getName();
    }

    /**
     * @return string
     */
    public function getPedigree(): string
    {
        return $this->pedigree;
    }

    /**
     * @param string $pedigree
     *
     * @return self
     */
    public function setPedigree(string $pedigree): self
    {
        $this->pedigree = $pedigree;
        return $this;
    }

    /**
     * @return string
     */
    public function description(): string
    {
        return "Je m'appelle : $this->name et j'ai $this->age ans et mon pedigree est : $this->pedigree et je mange des" . implode(' ', $this->listAliment);
    }
}
