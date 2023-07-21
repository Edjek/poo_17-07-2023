<?php

class Warrior extends Player
{
    /**
     *
     * @var int
     */
    private int $arrow;

    /**
     *
     * @param string $name
     * @param int $arrow
     *
     */
    public function __construct(string $name, int $arrow)
    {
        $this->name = $name;
        $this->arrow = $arrow;
    }

    /**
     *
     * @return void
     *
     */
    public function hit(): void
    {
        $this->life = $this->life - 15;
    }

    /**
     *
     * @param int $point
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
    public function getArrow(): int
    {
        return $this->arrow;
    }

    /**
     *
     * @return  self
     */
    public function setArrow(int $arrow): self
    {
        $this->arrow = $arrow;

        return $this;
    }
}
