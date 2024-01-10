<?php

// Een geneste 2D associatieve array
$autoverzameling = array(
    "auto1" => array(
        "merk" => "Toyota",
        "model" => "Corolla",
        "jaar" => 2020
    ),
    "auto2" => array(
        "merk" => "Honda",
        "model" => "Civic",
        "jaar" => 2019
    ),
    "auto3" => array(
        "merk" => "Ford",
        "model" => "Focus",
        "jaar" => 2021
    )
);

$sleutels = array_keys($autoverzameling);
$aantal = count($sleutels);

for ($i = 0; $i < $aantal; $i++) {
    $auto = $autoverzameling[$sleutels[$i]];
    $eigenschappen = array_keys($auto);
    echo $sleutels[$i] . "<br>";
    for ($j = 0; $j < count($eigenschappen); $j++) {
        if ($eigenschappen[$j] == 'jaar') {
            $auto[$eigenschappen[$j]] = $auto[$eigenschappen[$j]] + 1;
        }
        echo $eigenschappen[$j] . ": "  . $auto[$eigenschappen[$j]] . "<br>";
    }
    echo "<br>";
}
