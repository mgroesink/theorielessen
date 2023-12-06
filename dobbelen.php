<?php

include 'functions.php';
$aantalWorpen;

// Als geen argument is meegegeven wordt maar 1 keer gegooid
if ($argc < 2 || !is_numeric($argv[1])) {
    $aantalWorpen = 1;
} else {
    $aantalWorpen = intval($argv[1]);
}

for ($i = 0; $i < $aantalWorpen; $i++) {
    $worp = gooi();
    $strWorp = "";
    switch ($worp) {
        case 1:
            $strWorp = "een";
            break;
        case 2:
            $strWorp = "twee";
            break;
        case 3:
            $strWorp = "drie";
            break;
        case 4:
            $strWorp = "vier";
            break;
        case 5:
            $strWorp = "vijf";
            break;
        case 6:
            $strWorp = "zes";
            break;
        default:
            break;
    }
    echo "Je hebt $worp gegooid;" . PHP_EOL;
}
