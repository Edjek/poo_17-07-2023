<?php

class Article
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var float
     */
    protected float $price;

    /**
     * @param string $name
     * @param float $price
     */
    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return  string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param  string  $name
     *
     * @return  self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param  float  $price
     *
     * @return  self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Method publique diplayProduct 'le produit est un: XXX et il coûte : XXX'
     *
     * @return string
     */
    public function displayProduct(): string
    {
        return "le produit est un: $this->name et il coûte : $this->price.";
    }
}
