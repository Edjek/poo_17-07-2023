<?php

// spl_autoload_register() est une fonction prédéfinie de PHP qui permet de charger automatiquement les classes.
// spl_autoload_register() prend en paramètre une fonction anonyme qui prend en paramètre le nom de la classe à charger.
spl_autoload_register(function ($a) {
  $a = substr($a, 14);
  require_once $a . '.php';
});

use App\namespace\Peugeot;
use App\namespace\Renault;
use App\namespace\User;

$renaultClio = new Renault();
echo $renaultClio->demarrer();
echo '<br>';
echo $renaultClio->nbTest();
echo '<br>';

$peugeot405 = new Peugeot();
echo $peugeot405->demarrer();
echo '<br>';
echo $peugeot405->nbTest();

$rachid = new User('Rach');
echo '<br>';
echo $rachid->getPseudo();

echo '<br>';
echo $peugeot405->start($rachid);
