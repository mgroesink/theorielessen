<?php 

function gooi()
{
    $worp = rand(1, 6);
    return $worp;
}

function whichDay()
{
    $day = date("w");
    switch ($day) {
        case 1:
            return "maandag";
        case 2:
            return "dinsdag";
        case 3:
            return "woensdag";
        case 4:
            return "donderdag";
        case 5:
            return "vrijdag";
        case 6:
            return "zaterdag";
        case 7:
            return "zondag";
    }
}
