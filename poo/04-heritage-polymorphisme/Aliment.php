<?php

require_once './Article.php';

// L'héritage permet de créer une classe enfant qui hérite des propriétés et méthodes de la classe parent.
// L'héritage permet de créer une classe enfant qui pourra avoir ses propriétés et méthodes supplémentaires.
// Il faut que les propriétés et méthodes du parent soient en public ou protected pour que l'enfant puisse y acceder.

// Le polymorphisme permet de redéfinir une méthode dans la classe enfant.
class Aliment extends Article
{
    private string $datePeremption;

    // constructeur initialise toutes les propriétés
    public function __construct(string $name, float $price, string $date)
    {
        $this->name = $name;
        $this->price = $price;
        $this->datePeremption = $date;
    }
    /**
     *
     * @return string
     * 
     */
    public function getDatePeremption(): string
    {
        return $this->datePeremption;
    }

    /**
     *
     * @return  self
     */
    public function setDatePeremption($datePeremption): self
    {
        $this->datePeremption = $datePeremption;

        return $this;
    }

    /**
     *
     * @return string
     * 
     */
    public function displayPrice(): string
    {
        return "la prix est de  : $this->price";
    }

    public function displayProduct()
    {
        // Pour accéder à la methode parent lorsqu'on a redefini une méthode par polymorphisme, il faut utiliser parent::
        return   parent::displayProduct() ." et la date de peremption est le: $this->datePeremption";
    }
}

// creer une class Conserve qui herite de la class Aliment
// propriete TABLEAU listExcipient;

// constructeur

// getter setter

// displayProduct 
// le produit est un: cookie et il coûte : 2.99. et la date de peremption est le: 14-06-2024 et la liste des excipients est : METHODE PHP QUI PERMET DE TRANSFORMER LES ELEMENTS D'UN TABLEAU EN CHAINE DE CARACTERE
