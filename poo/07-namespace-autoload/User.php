<?php

namespace App\namespace;

final class User
{
    /**
     * @var string
     */
    private string $pseudo;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->pseudo = $name;
    }

    /**
     * @return string
     */
    public function getPseudo(): string
    {
        return $this->pseudo;
    }
}
