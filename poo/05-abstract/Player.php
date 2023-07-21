<?php

// Une classe abstraite est une classe qui ne peut pas être instanciée
// Une classe abstraite peut contenir des méthodes abstraites
// Elle sert de modèle à d'autres classes qui en hériteront

// Une méthode abstraite est une méthode qui n'a pas de contenu
// Lorsqu'une classe hérite d'une classe abstrainte, elle doit obligatoirement redéfinir les méthodes abstraites de la classe mère
abstract class Player
{
    protected string $name;
    protected int $life = 100;
    protected int $score = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    protected abstract function attack(int $point);

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getLife()
    {
        return $this->life;
    }

    public function setLife($life)
    {
        $this->life = $life;

        return $this;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    public function hit()
    {
        $this->life = $this->life - 10;
    }
}
