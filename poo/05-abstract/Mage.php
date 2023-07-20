<?php

class Mage extends Player
{
    private int $mana;

    public function __construct(string $name, int $mana)
    {
        $this->name = $name;
        $this->mana =$mana;
    }

    protected function calculTVA($a)
    {
        
    }

    /**
     * Get the value of mana
     */
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * Set the value of mana
     *
     * @return  self
     */
    public function setMana($mana)
    {
        $this->mana = $mana;

        return $this;
    }
}
