<?php

namespace App\interface;

class Bird extends Animal
{
    /**
     * @var bool
     */
    private bool $migrate;

    /**
     * @param string $name
     * @param int $age
     * @param int $nbPattes
     * @param array $listAliment
     * @param bool $migrate
     */
    public function __construct(string $name, int $age, int $nbPattes, array $listAliment, bool $migrate)
    {
        parent::__construct($name, $age, $nbPattes, $listAliment);
        $this->migrate = $migrate;
    }

    public function getEat()
    {
    }

    /**
     * @return bool
     */
    public function getMigrate(): bool
    {
        return $this->migrate;
    }

    /**
     * @param bool $migrate
     *
     * @return self
     */
    public function setMigrate(bool $migrate): self
    {
        $this->migrate = $migrate;
        return $this;
    }

    /**
     * @return string
     */
    public function description(): string
    {
        if ($this->migrate === true) {
            return 'Je suis un oiseau migrateur';
        } else {
            return 'Je ne suis pas un oiseau migrateur';
        }
    }
}
