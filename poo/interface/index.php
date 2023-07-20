<?php

require_once './Animal.php';
require_once './Dog.php';
require_once './Bird.php';

$droopy = new Dog('Droopy', 5, 4, ['hot-dog', 'saucisse'], 'racé');
echo $droopy->getName();
$rintintin = new Dog('Rintintin', 12, 4, ['hot-dog', 'croquette'], 'racé');
echo $rintintin->description();

$titi = new Bird('Titi', 2, 2, ['graines', 'couscous'], false);
echo $titi->getName();
echo $titi->description();;
