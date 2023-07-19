<?php

require_once './Article.php';
require_once './Aliment.php';
require_once './Conserve.php';

$pull = new Article('pull', 99);
echo $pull->displayProduct();

echo $pull->getName();
echo '<br>';
echo $pull->setName('sweat')->getName();
echo '<br>';

$cookie = new Aliment('cookie', 2.99, '14-06-2024');
echo $cookie->displayPrice();
echo '<br>';
echo $cookie->displayProduct();
echo '<br>';

$boiteHaricot = new Conserve("Boite d'haricot Heinz", 12.9, '12 juin 2019', ['E214', 'E453']);

echo $boiteHaricot->displayProduct();
echo '<br>';

echo implode(', ', $boiteHaricot->getListExcipient());
echo '<br>';

foreach ($boiteHaricot->getListExcipient() as $excipient) {
    echo $excipient;
}
