<?php

function deel($getal, $deler)
{
    try {
        $resultaat = $getal / $deler;
        echo "Resultaat: " . $resultaat;
    } catch (Error $e) {
        echo "Delen door nul is flauwekul";
    }
}


// Probeer deeloperatie uit te voeren
try {
    echo "Eerste berekening" . PHP_EOL;
    deel(10, 0); // Dit zal het resultaat 5 opleveren
    echo PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage();
}

?>
