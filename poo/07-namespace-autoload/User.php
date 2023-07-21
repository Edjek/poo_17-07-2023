<?php

namespace App\namespace;

final class User
{
    private string $pseudo;

    public function __construct(string $name)
    {
        $this->pseudo = $name;
    }

    // Constructeur pour initialiser le pseudo
    // getter

    /**
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }
}
