<?php
function maakNummer(int $randomcijfer=7) :array{
    $nummer = array();
    for ($i = 0; $i < $randomcijfer; $i++) {
        $nummer[] = rand(1, 100);
    }
    return $nummer;
}

function showArray(array $array) :void{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function totaal(array $array) :int{
    $totaal = 0;
    for ($i = 0; $i < count($array); $i++) {
        $totaal = $totaal + $array[$i];
    }
    return $totaal; 
}

function printTotaal(int $totaal) :void{
    echo "totaal:";
    print_r($totaal);
}

