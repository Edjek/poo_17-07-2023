<?php

require_once './SimulateurCredit.php';
require_once './Mathematique.php';

SimulateurCredit::setQuotient(100);
echo SimulateurCredit::displayCalculTaux(786785);

echo '<br>';
echo Mathematique::addition(12.8, 90);
echo '<br>';
echo Mathematique::division('yfhgfhfgh', 0);
