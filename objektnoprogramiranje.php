<?php
//Naloga: Ustvarite razred Restaurant, ki ima lastnosti $name za ime restavracije, $city za kraj, v katerem se nahaja restavracija in $tables za število miz na voljo v restavraciji.

//Ustvarite metodo razreda Restaurant location(), ki vrne informacijo o imenu restavracije in kraju, v katerem se restavracija nahaja.

//Ustvarite metodo razreda Restaurant welcome(), ki gosta pozdravi in mu sporoči število prostih miz. Poskrbite, da se bo število prostih miz zmanjšalo za 1 vsakič, ko se pokliče metoda welcome()




echo "<br>";
echo "Dom. Naloga:";
echo "<br>";
echo "<br>";

$kuhna = new Restaurant("Domača Kuhna","Gornji dol", 10);

$spajza = new Restaurant("Špajza","Spodnji log", 8);

$mcdonalds = new fastFood("mcDonalds", "Ljubljana",22);

$mcdonalds->naslov();br();
$mcdonalds->hasDriveIn();
br();
br();
br();
$kuhna->naslov();
br();
echo $kuhna->welcome();br();
echo $kuhna->welcome();br();
echo $kuhna->welcome();br();
echo $kuhna->welcome();br();
br();
br();
br();
$spajza->naslov();
br();
echo $spajza->welcome();
br();
br();

class Restaurant {
    public $name;
    public $city;
    public $tables;
	public $kontakt;
	private $natakarji = array("peter");
	private $stNatakarjev;

    public function __construct($name, $city, $tables) {
        $this->name = $name;
        $this->city = $city;
        $this->tables = $tables;
		$this->kontakt = $name . " iz " . $city;
    }

   private function location() {
        return "Restavracija " . $this->name. " se nahaja v kraju: ". $this->city . " ima skupno " . $this->tables . " miz";
    }

    public function welcome() {
        $this->tables = $this->tables -1;
        return "Pozdravljeni! Trenutno je v restavraciji ". $this->name ."  ". $this->tables ." prostih miz.";
    }
	
	public function naslov() {
		echo $this->location();	
	}
	
	public function dodajNatakarja($ime) {
		$this->natakarji[] = $ime;
		$this->stNatakarjev++;
	}

    
}

class fastFood extends Restaurant {
	public $driveIn = true;
	
	public function hasDriveIn() {
		if($this->driveIn){
			echo "Ima Drive In";
		} else {
			echo "Nima Drive Ina";
		}
	}
}












function br() {
    echo "<br>";
}

