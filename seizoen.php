<?php

/**
 * bepaalSeizoen
 *
 * @return void
 */
function bepaalSeizoen()
{
    $huidigeDatum = date('2024-01-31');

    $lenteStart = date('Y') . '-03-20';
    $lenteEinde = date('Y') . '-06-20';

    $zomerStart = date('Y') . '-06-21';
    $zomerEinde = date('Y') . '-09-22';

    $herfstStart = date('Y') . '-09-23';
    $herfstEinde = date('Y') . '-12-20';

    // Voor de winter van dit jaar en het begin van volgend jaar
    $winterStart = date('Y') . '-12-21';
    $volgendJaar = date('Y') + 1;
    $winterEinde = $volgendJaar . '-03-19';

    if ($huidigeDatum >= $lenteStart && $huidigeDatum < $lenteEinde) {
        return "Lente";
    } elseif ($huidigeDatum >= $zomerStart && $huidigeDatum < $zomerEinde) {
        return "Zomer";
    } elseif ($huidigeDatum >= $herfstStart && $huidigeDatum < $herfstEinde) {
        return "Herfst";
    } else {
        return "Winter";
    }
}
$seizoen = bepaalSeizoen();
switch ($seizoen) {
}


?>

<html>

<head>
    <style>
    body {
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
</head>
<?php
echo "<body background='images/$seizoen.jpeg'>";
?>
<h1>
    <?php
    echo "$seizoen";
    ?>

</h1>
</body>

</html>
