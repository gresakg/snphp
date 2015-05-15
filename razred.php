<?php 

$joze = new Oseba("Jože",55);
$franci = new Oseba("Franci",32);
echo $joze->pozdrav();
br();
echo $joze->cestitka();
br();
echo $joze->hvala();br();
echo $franci->pozdrav();
br();
echo $joze->nasvidenje();br();


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
        return "Živjo " . $this->ime. "! Kako se počutiš zdaj ko si star ". $this->starost ." let?";
    }

    public function hvala() {
        return "Hvala ". $this->ime ."! Ni slabo za ". $this->starost ." letnika!";
    }

    public function cestitka() {
        return "Dragi ". $this->ime . ", vse najboljše za tvoj ". $this->starost ."ti rojstni dan!";
    }

    public function nasvidenje() {
        $novastarost = $this->starost +1;

        return "Nasvidenje, " . $name ."! Se vidiva ko boš star " . $novastarost ." let!";
    }    
}

function br() {
	echo "<br>";
}