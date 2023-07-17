<?php

// Une classe est un modèle qui permet de créer des objets.
// Une classe est un plan de construction d'objets.
// Une classe est composée de propriétés et de méthodes.
// Une classe est un modéle de données.
class User
{
    // Une propriété est une variable définie dans une classe.
    // Une méthode est une fonction définie dans une classe.

    /**
     *
     * @var string
     */
    public string $firstname; // une propriété

    /**
     * @var string
     */
    public string $lastname;

    /**
     *
     * @var string
     */
    public string $email;

    /**
     *
     * @var string
     */
    public string $password;

    /**
     *
     * @var int
     */
    public int $age = 0;

    /**
     *
     * @var array
     */
    public array $notes;

    /**
     *
     * @return string
     */
    public function hello(): string // une méthode
    {
        return 'Salut tout le monde';
    }

    /**
     *
     * @return [type]
     */
    private function bonjour()
    {
        return "Bonjour, je m'appelle $this->firstname $this->lastname";
    }

    /**
     * Cette fonction affiche l'identite du User
     *
     * @param int age
     *
     * @return string
     */
    public function presentation(int $age): string
    {
        return $this->bonjour()   . " et j'ai $age ans";
    }
}


