<?php 

include 'functions.php';

switch (whichDay()) {
    case 'zaterdag':
    case 'zondag':
        echo "Het is vandaag weekend!";
        break;
    default:
        echo "Helaas, het is vandaag gewoon een werkdag";
}
