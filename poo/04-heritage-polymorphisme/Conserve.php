<?php

class Conserve extends Aliment
{
    private array $listExcipient;

    public function __construct(string $name, float $price, string $date, array $listExcipient)
    {
        parent::__construct($name, $price, $date);
        $this->listExcipient = $listExcipient;
    }

    /**
     */ 
    public function getListExcipient(): array
    {
        return $this->listExcipient;
    }

    /**
     *
     * @return  self
     */ 
    public function setListExcipient($listExcipient): self
    {
        $this->listExcipient = $listExcipient;

        return $this;
    }

    public function displayProduct(): string
    {
        // Pour accéder à la methode parent lorsqu'on a redefini une méthode par polymorphisme, il faut utiliser parent::
        return parent::displayProduct() . "et la liste des excipient est : " . implode(', ',$this->listExcipient);
    }
}
