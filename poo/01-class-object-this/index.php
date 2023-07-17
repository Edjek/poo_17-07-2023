<?php

require_once './User.php';
require_once './Animal.php';

// Un objet est une instance de classe.
// Un objet est une variable qui contient toutes les propriétés et les méthodes d'une classe.
$user = new User();
$user->firstname = 'Rachid';
$user->lastname = 'EDJEKOUANE';

$luckyLuke = new User();
$user->firstname = 'Remi';
$luckyLuke->firstname = 'Lucky';
$luckyLuke->lastname = 'Luke';


echo $user->presentation(40);
echo '<br>';

// Créer un nouvelle objet
// Lucky luke
// Afficher ses informations
echo $luckyLuke->presentation(39);

// Exercice 1
// Créer une classe Animal avec les propriétés suivantes :
// - name de type string
// - type de type string
// - age de type int

// Exercice 2
// Ajouter à la classe Animal les méthodes suivantes :
// - eat() qui retourne une chaine de caractere et qui affiche "The animal is eating"
// - sleep() qui retourne une chaine de caractere et qui affiche "The animal is sleeping"

// Créer un objet Dog de la classe Animal et afficher ses propriétés et ses méthodes.
// Créer un objet Cat de la classe Animal et afficher ses propriétés et ses méthodes.
$animal = new Animal();
$animal->type = 'mouton';

$dog = new Animal();
$dog->name = 'Droopy';
$dog->type ='chien';
$dog->age = 23;

$cat = new Animal();
$cat->name= 'Jerry';
$cat->type = 'chat';
$cat->age = 12;

echo '<br>';
echo $animal->eat();
echo '<br>';
echo $dog->name;
