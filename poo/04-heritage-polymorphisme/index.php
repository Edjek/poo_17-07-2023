<?php

require_once './Article.php';
require_once './Aliment.php';

$pull = new Article('pull',99);
echo $pull->displayProduct();

echo $pull->getName();
echo '<br>';
echo $pull->setName('sweat')->getName();
echo '<br>';

$cookie = new Aliment('cookie', 2.99, '14-06-2024');
echo $cookie->displayPrice();
echo '<br>';
echo $cookie->displayProduct();
