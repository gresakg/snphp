<?php





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
	public $natakarji = array("peter");
	public $stNatakarjev;

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

