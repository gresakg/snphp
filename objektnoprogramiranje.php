<?php


echo cestitka("Jože", 55);
echo "<br>";
echo pozdrav("Jože", 65);
echo "<br>";
echo hvala("Jože", 55);
echo "<br>";
echo nasvidenje("Jože", 55);
echo "<br>";

    
function pozdrav($ime, $starost) {
    return "Živjo " . $ime. "! Kako se počutiš zdaj ko si star ". $starost ." let?";
}

function hvala($ime, $starost)  {
    return "Hvala ". $ime ."! Ni slabo za ". $starost ." letnika!";
}

function cestitka($ime, $starost)  {
    return "Dragi ". $ime . ", vse najboljše za tvoj ". $starost .".ti rojstni dan!";
}

function nasvidenje($ime, $starost)  {
    $novastarost = $starost + 1;
    return "Nasvidenje, " . $ime ."! Se vidiva ko boš star " . $novastarost . " let!";
}

echo "<br>";

$joze = new Oseba("Jože",55);
$franci = new Oseba("Franci",32);

echo $joze->pozdrav();
br();
echo $joze->cestitka();
br();
echo $joze->hvala();
br();
echo $franci->pozdrav();
br();
echo $joze->nasvidenje();
br();

echo $joze->ime;


class Oseba {
    public $ime;
    public $starost;
    public $tip = "človek";

    public function __construct($ime, $starost) {
        $this->ime = $ime;
        $this->starost = $starost;
    }

    public function pozdrav() {
        return "Živjo " . $this->ime. "! Kako se počutiš zdaj, ko si star ". $this->starost ." let?";
    }

    public function hvala() {
        return "Hvala ". $this->ime ."! Ni slabo za ". $this->starost ."- letnika!";
    }

    public function cestitka() {
        return "Dragi ". $this->ime . ", vse najboljše za tvoj ". $this->starost .".ti rojstni dan!";
    }

    public function nasvidenje() {
        $novastarost = $this->starost +1;

        return "Nasvidenje, " . $this->ime ."! Se vidiva ko boš star " . $novastarost ." let!";
    }    
}

echo "<br>";



//Naloga: Ustvarite razred Restaurant, ki ima lastnosti $name za ime restavracije, $city za kraj, v katerem se nahaja restavracija in $tables za število miz na voljo v restavraciji.

//Ustvarite metodo razreda Restaurant location(), ki vrne informacijo o imenu restavracije in kraju, v katerem se restavracija nahaja.

//Ustvarite metodo razreda Restaurant welcome(), ki gosta pozdravi in mu sporoči število prostih miz. Poskrbite, da se bo število prostih miz zmanjšalo za 1 vsakič, ko se pokliče metoda welcome()




echo "<br>";
echo "Dom. Naloga:";
echo "<br>";
echo "<br>";

$kuhna = new Restaurant("Domača Kuhna","Gornji dol", 10);
$spajza = new Restaurant("Špajza","Spodnji log", 8);

echo $kuhna->location();
br();
echo $kuhna->welcome();
br();
echo $spajza->location();
br();
echo $spajza->welcome();
br();
br();

class Restaurant {
    public $name;
    public $city;
    public $tables;

    public function __construct($name, $city, $tables) {
        $this->name = $name;
        $this->city = $city;
        $this->tables = $tables;
    }

    public function location() {
        return "Restavracija " . $this->name. " se nahaja v kraju: ". $this->city;
    }

    public function welcome() {
        $tables = $this->tables -1;
        return "Pozdravljeni! Trenutno je v restavraciji ". $this->name ."  ". $tables ." prostih miz.";
    }

    
}












function br() {
    echo "<br>";
}

