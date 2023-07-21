<?php

class Conserve extends Aliment
{
    /**
     * @var array
     */
    private array $listExcipient;

    /**
     * @param string $name
     * @param float $price
     * @param string $date
     * @param array $listExcipient
     */
    public function __construct(string $name, float $price, string $date, array $listExcipient)
    {
        parent::__construct($name, $price, $date);
        $this->listExcipient = $listExcipient;
    }

    /**
     * @return array
     */
    public function getListExcipient(): array
    {
        return $this->listExcipient;
    }

    /**
     * @param array $listExcipient
     *
     * @return self
     */
    public function setListExcipient(array $listExcipient): self
    {
        $this->listExcipient = $listExcipient;
        return $this;
    }

    /**
     * @return string
     */
    public function displayProduct(): string
    {
        // Pour accéder à la methode parent lorsqu'on a redefini une méthode par polymorphisme, il faut utiliser parent::
        return parent::displayProduct() . "et la liste des excipient est : " . implode(', ', $this->listExcipient);
    }
}
