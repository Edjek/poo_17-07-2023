<?php

require_once './Car.php';
require_once './Book.php';

// Divers :
//     - new est mot clé permettant d'effectuer une instanciation.
//     - Une class peut produire plusieurs objets. Nous pouvons donc effectuer plusieurs instanciations 'new'
//     - $bmw est techniquement appelé "l'objet de la class Panier"

// Crée un nouvel objet de la classe MaClasse, déclenche automatiquement la méthode __construct
$bmw = new Car('bmw', 'noir', '2013'); // instanciation de la classe User
$peugeot = new Car('peugeot', 'beige', '');

echo $bmw->getColor();
echo '<br>';
echo $bmw->getModel();
echo '<br>';
echo $bmw->display();


// Créer une class Book
    // title string
    // author string
    // pages int
    // year int

    // constructeur
    // setter
    // getter

    // read()
    // "Je lis le livre XXX écrit par XXX";

// Alice au pays des merveilles
// Lewis Carroll
// 124
// 1865;
$aliceInWonderland = new Book('Alice au pays des merveilles', 'Lewis Carroll', 124, 1865);
echo '<br>';
echo $aliceInWonderland->read();
echo '<br>';

echo $aliceInWonderland->getTitle();
echo '<br>';

$aliceInWonderland->setTitle('change de titre')->getTitle();
echo '<br>';
echo $aliceInWonderland->read()
;// Harry Potter à l'école des sorciers
// J. K. Rowling
// 320
// 1997









