<?php

require_once './Player.php';

class Warrior extends Player
{
    private int $arrow;

    public function __construct(string $name, int $arrow)
    {
        $this->name = $name;
        $this->arrow = $arrow;
    }

    public function save($chef)
    {}

    public function hit()
    {
        $this->life = $this->life -15;
    }
    /**
     * Get the value of arrow
     */ 
    public function getArrow()
    {
        return $this->arrow;
    }

    /**
     * Set the value of arrow
     *
     * @return  self
     */ 
    public function setArrow($arrow)
    {
        $this->arrow = $arrow;

        return $this;
    }
}
