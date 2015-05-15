<?php
//echo metri_v_centimetre(5);

$ime = "ana";
$priimek = "novak";

napisi_ime($ime);

echo $ime;


function napisi_ime($x) {
	echo $x;
	$x = "petra <br>";
	echo $x;
}





function metri_v_centimetre($metri) {
	$centimetri = $metri*100;
	return $metri . " metrov je " . $centimetri . " centimetrov";
}

