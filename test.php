<?php

echo cestitka("Jože", 55);
echo "<br>";
echo pozdrav("Jože", 65);
echo "<br>";
echo hvala("Jože", 55);
echo "<br>";
echo nasvidenje("Joke", 55);

function pozdrav($ime, $starost) {
    return "Živjo " . $ime. "! Kako se počutiš zdaj ko si star ". $starost ." let?";
}

function hvala($ime, $starost)  {
    return "Hvala ". $ime ."! Ni slabo za ". $starost ." letnika!";
} 

function cestitka($ime, $starost)  {
    return "Dragi ". $ime . ", vse najboljše za tvoj ". $starost ."ti rojstni dan!";
}

function nasvidenje($ime, $starost)  {
    $novastarost = $starost +1;

    return "Nasvidenje, " . $ime ."! Se vidiva ko boš star " . $novastarost ." let!";
}




$stric->ime;
$stric['ime'];


















