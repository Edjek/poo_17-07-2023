<?php

namespace App\interface;

class Animal
{
     protected string $name;
     protected int $age;
     protected int $nbPattes;
     protected array $listAliment;

     public function __construct(string $name,int $age,int $nbPattes,array $listAliment)
     {
        $this->name = $name;
        $this->age = $age;
        $this->nbPattes = $nbPattes;
        $this->listAliment = $listAliment;
     }


     /**
      * Get the value of name
      */ 
     public function getName()
     {
          return $this->name;
     }

     /**
      * Set the value of name
      *
      * @return  self
      */ 
     public function setName($name)
     {
          $this->name = $name;

          return $this;
     }

     /**
      * Get the value of age
      */ 
     public function getAge()
     {
          return $this->age;
     }

     /**
      * Set the value of age
      *
      * @return  self
      */ 
     public function setAge($age)
     {
          $this->age = $age;

          return $this;
     }

     /**
      * Get the value of nbPattes
      */ 
     public function getNbPattes()
     {
          return $this->nbPattes;
     }

     /**
      * Set the value of nbPattes
      *
      * @return  self
      */ 
     public function setNbPattes($nbPattes)
     {
          $this->nbPattes = $nbPattes;

          return $this;
     }

     /**
      * Get the value of listAliment
      */ 
     public function getListAliment()
     {
          return $this->listAliment;
     }

     /**
      * Set the value of listAliment
      *
      * @return  self
      */ 
     public function setListAliment($listAliment)
     {
          $this->listAliment = $listAliment;

          return $this;
     }

     // public abstract function getEat();
}
