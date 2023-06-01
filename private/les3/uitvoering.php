<?php
declare(strict_types=1);
include "index.php";

$nummerLijst = maakNummer(rand(1, 20));
showArray($nummerLijst);
$totaalNummer = totaal($nummerLijst);
printTotaal($totaalNummer);