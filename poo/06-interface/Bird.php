<?php

namespace App\interface;

class Bird extends Animal
{
    private bool $migrate;

    public function __construct(string $name,int $age,int $nbPattes,array $listAliment, bool $migrate)
    {
        parent::__construct($name, $age, $nbPattes, $listAliment);
        $this->migrate = $migrate;
    }

    public function getEat()
    {

    }

    /**
     * Get the value of migrate
     */ 
    public function getMigrate()
    {
        return $this->migrate;
    }

    /**
     * Set the value of migrate
     *
     * @return  self
     */ 
    public function setMigrate($migrate)
    {
        $this->migrate = $migrate;

        return $this;
    }

    public function description()
    {
        if($this->migrate === true) {
            return 'Je suis un oiseau migrateur';
        } else {
            return 'Je ne suis pas un oiseau migrateur';

        }
    }
}