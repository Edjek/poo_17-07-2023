<?php

require_once './Car.php';

$bmw = new Car('bmw', 'noir', '2013');
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

// Harry Potter à l'école des sorciers
// J. K. Rowling
// 320
// 1997