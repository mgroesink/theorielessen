<?php

function toonNamen()
{

    if (!file_exists('namen.txt')) {
        throw new Exception("Bestand niet gevonden");
    }
    $namen = file('namen.txt');

    echo "<h2>Mijn vrienden</h2>";
    echo "<ul>";
    foreach ($namen as $naam) {
        echo "<li>" . $naam . "</li>";
    }

    echo "</ul>";
}
try {
    toonNamen();
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "<h2>Joke of the Day</h2>";
try {
    getJoke();
} catch (Exception $e) {
    echo $e->getMessage();
}
function getJoke()
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://v2.jokeapi.dev/joke/Any?blacklistFlags=nsfw,religious,racist,sexist,explicit&type=single",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "cache-control: no-cache"
        ),
    ));
    try {
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        // do something with the data
        echo "<div style='font-size:1.5em'>";
        echo "<i>";
        echo $data["joke"];
        echo "</li>";
        echo "</div>";
        //print_r($data);
    } catch (Error $ex) {
        throw new Error("API niet bereikbaar");
    }
    $err = curl_error($curl);
}
