<?php 

// Een voorbeeld van een associatieve array
$studenten = array(
"Alice" => 18,
"Bob" => 20,
"Charlie" => 19
);

// Loop door de array en verhoog de leeftijd van elke student met 1
foreach ($studenten as $naam => $leeftijd) {
$studenten[$naam] = $leeftijd + 1;
}

// Print de bijgewerkte leeftijden
foreach ($studenten as $naam => $leeftijd) {
echo $naam . " is nu " . $leeftijd . " jaar oud.<br>";
}