<?php

namespace App\namespace;

interface Engine
{
    /**
     * @param User $x
     *
     * @return string
     */
    public function start(User $x): string;
}
