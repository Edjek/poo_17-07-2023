<?php

require_once './Player.php';
require_once './Warrior.php';
require_once './Mage.php';

$guerrier = new Warrior('Ken', 23);
echo $guerrier->getName();
echo '<br>';
echo $guerrier->getSCore();
echo '<br>';
echo $guerrier->getArrow();
echo '<br>';

$mage = new Mage('Merlin', 890);
echo $mage->getName();
echo '<br>';
echo $mage->getLife();
echo '<br>';
echo $mage->getMana();
