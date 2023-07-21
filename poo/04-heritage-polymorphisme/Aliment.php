<?php

// L'héritage permet de créer une classe enfant qui hérite des propriétés et méthodes de la classe parent.
// L'héritage permet de créer une classe enfant qui pourra avoir ses propriétés et méthodes supplémentaires.
// Il faut que les propriétés et méthodes du parent soient en public ou protected pour que l'enfant puisse y acceder.

// Le polymorphisme permet de redéfinir une méthode dans la classe enfant.
class Aliment extends Article
{
    /**
     * @var string
     */
    protected string $datePeremption;

    /**
     * constructeur initialise toutes les propriétés
     *
     * @param string $name
     * @param float $price
     * @param string $date
     */
    public function __construct(string $name, float $price, string $date)
    {
        $this->name = $name;
        $this->price = $price;
        $this->datePeremption = $date;
    }
    /**
     * @return string
     */
    public function getDatePeremption(): string
    {
        return $this->datePeremption;
    }

    /**
     * @param string $datePeremption
     *
     * @return self
     */
    public function setDatePeremption(string $datePeremption): self
    {
        $this->datePeremption = $datePeremption;
        return $this;
    }

    /**
     * @return string
     */
    public function displayPrice(): string
    {
        return "la prix est de  : $this->price";
    }

    /**
     * @return string
     */
    public function displayProduct(): string
    {
        // Pour accéder à la methode parent lorsqu'on a redefini une méthode par polymorphisme, il faut utiliser parent::
        return parent::displayProduct() . " et la date de peremption est le: $this->datePeremption";
    }
}
