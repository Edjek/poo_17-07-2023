<!-- Exercice :

Toutes nos classes seront dans des namespace avec la logique que nous venont de voir

Créez une classe abstraite `Vehicule` avec les propriétés et méthodes suivantes :
   - Propriété protégée `$nbTest` initialisée à 100.
   - Méthode publique `demarrer()` qui retourne la chaîne "Je suis démarré".
        Interdissez le polymorphisme sur cette method.
   - Méthode abstraite publique `carburant()` qui n'a pas d'implémentation.
   - Méthode publique `nbTest()` qui retourne la valeur de la propriété `$nbTest`.

Créez une classe `Renault` qui hérite de `Vehicule` avec les propriétés et méthodes suivantes :
   - Propriété privée `$carburant`.
   - Redéfinissez la méthode `carburant()` pour qu'elle retourne la chaîne "diesel".
   - Redéfinissez la méthode `nbTest()` pour qu'elle retourne la valeur de `nbTest()` de la classe parente (`Vehicule`) augmentée de 30.

   Creez une class `User` avec les propriétés et méthodes suivantes :
   - Propriété `$pseudo`.
    Interdire l'heritage sur cette class `User`;

Créez une classe `Peugeot` qui hérite de `Vehicule` avec les propriétés et méthodes suivantes :
   - Propriété privée `$carburant`.
   - Redéfinissez la méthode `carburant()` pour qu'elle retourne la chaîne "essence".
   - Redéfinissez la méthode `nbTest()` pour qu'elle retourne la valeur de `nbTest()` de la classe parente (`Vehicule`) augmentée de 70.


Créez des instances des classes `Renault` et `Peugeot`.

Affichez le résultat en utilisant des `echo` pour afficher :
   - Le message retourné par la méthode `demarrer()` pour chaque véhicule.
   - Le carburant de chaque véhicule en utilisant la méthode `carburant()`.
   - Le nombre de tests effectués pour chaque véhicule en utilisant la méthode `nbTest()`. -->
<?php

spl_autoload_register(function($a){
  $a = substr($a, 14);
   require_once $a . '.php';
});


use App\namespace\Peugeot;
use App\namespace\Renault;
use App\namespace\User;
use App\namespace\Engine;

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

//  Creer une interface appeler Engine
    // fonction public start qui prend en parametre un user

// Obliger Peugeot et la class Renault a implementer cette interface