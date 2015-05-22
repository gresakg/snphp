<?php 

$polje = array("banana", "jabolko");

$polje[] = "zelje";



echo metri_v_centimetre(5);

function metri_v_centimetre($metri) {
	$centimetri = $metri*100;
	return $metri . " metrov je " . $centimetri . " centimetrov";
} 

for($i=1;$i<6;$i=$i+1) {
	echo $i;
	echo "<br>";
}

$skrito = rand(1,5);
$i=0;
while($i != $skrito) {
	echo $i;
	echo " ni pravo število<br>";
	$i++;
}
echo $i . " je pravo število<br>";

$seznam = array(
	"ime" => "Janez", 
	"priimek"=>"Novak", 
	"leto"=>1966
);
$seznam["spol"] = "moški";
echo "<h1>".$seznam["ime"]."</h1>";

foreach($seznam as $key => $item) {
	//echo vrni_podatek(---);
	
	echo $key.": ".$item;
	echo "<br>";
	
}

/**
1. preglej "skrito število" in izboljšaj ali spremeni
2. Uporabi smiseln break v vsaki izmed zank, lahko narediš tudi zanko po svoje
3. napiši funkcijo vrni_podatek
4. ZA PIFLARJE: naredi to kar dela while zanka s for zanko
**/
