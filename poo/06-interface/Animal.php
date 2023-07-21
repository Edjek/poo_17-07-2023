<?php

namespace App\interface;

class Animal
{
     protected string $name;
     protected int $age;
     protected int $nbPattes;
     protected array $listAliment;

     public function __construct(string $name, int $age, int $nbPattes, array $listAliment)
     {
          $this->name = $name;
          $this->age = $age;
          $this->nbPattes = $nbPattes;
          $this->listAliment = $listAliment;
     }

     /**
      * @return string
      */
     public function getName(): string
     {
          return $this->name;
     }

     /**
      * @param string $name
      *
      * @return self
      */
     public function setName(string $name): self
     {
          $this->name = $name;
          return $this;
     }

     /**
      * @return int
      */
     public function getAge(): int
     {
          return $this->age;
     }

     /**
      * @param int $age
      *
      * @return self
      */
     public function setAge(int $age): self
     {
          $this->age = $age;
          return $this;
     }

     /**
      * @return int
      */
     public function getNbPattes(): int
     {
          return $this->nbPattes;
     }

     /**
      * @param int $nbPattes
      *
      * @return self
      */
     public function setNbPattes(int $nbPattes): self
     {
          $this->nbPattes = $nbPattes;
          return $this;
     }

     /**
      * @return array
      */
     public function getListAliment(): array
     {
          return $this->listAliment;
     }

     /**
      * @param array $listAliment
      *
      * @return self
      */
     public function setListAliment(array $listAliment): self
     {
          $this->listAliment = $listAliment;
          return $this;
     }
}
