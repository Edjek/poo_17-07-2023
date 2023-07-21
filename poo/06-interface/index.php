<?php

require_once './Animal.php';
require_once './lib/Animal.php';
require_once './Dog.php';
require_once './Bird.php';

use \App\interface\Dog;
use \App\interface\Bird;
use \App\interface\Animal as Animal2;
use \App\interface\lib\Animal;

$loup = new Animal();
// $loup2 = new Animal2();



$droopy = new Dog('Droopy', 5, 4, ['hot-dog', 'saucisse'], 'racé');
echo $droopy->getName();
$rintintin = new Dog('Rintintin', 12, 4, ['hot-dog', 'croquette'], 'racé');
echo $rintintin->description();

$titi = new Bird('Titi', 2, 2, ['graines', 'couscous'], false);
echo $titi->getName();
echo $titi->description();
echo '<br>';

echo $droopy->devore();
echo '<br>';

echo $rintintin->devore();
echo '<br>';

echo $rintintin->eatSomeOne($titi);
