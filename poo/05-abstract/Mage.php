<?php

class Mage extends Player
{
    /**
     *
     * @var int
     */
    private int $mana;

    /**
     *
     * @param string $name
     * @param int $mana
     *
     */
    public function __construct(string $name, int $mana)
    {
        $this->name = $name;
        $this->mana = $mana;
    }

    /**
     *
     * @param int $point
     *
     * @return void
     *
     */
    public function attack(int $point): void
    {
        $this->score = $this->score + $point;
    }

    /**
     *
     * @return int
     *
     */
    public function getMana(): int
    {
        return $this->mana;
    }

    /**
     *
     * @param int $mana
     *
     * @return self
     *
     */
    public function setMana(int $mana): self
    {
        $this->mana = $mana;

        return $this;
    }
}
