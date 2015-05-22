<?php 
// preveri ali je obrazec oddan
if(isset($_POST['stevilo'])) {
	// obrazec je oddan
	$stevilo = $_POST['stevilo'];
	$skrito = $_POST['skrito'];
	$stevec = $_POST['stevec'] + 1;
	
	if(!is_numeric($stevilo)) {
		?>
		To ni število!
		<?php
	} else {
		
		 preveri_zadetek($skrito, $stevilo);
		?>
<?php
	}
} else {
	//obrazec ni oddan
	$stevilo = "";
	$skrito = rand(1,39);
	$stevec = 0;
}
?>
<form method="post">
Skrito število:
<input type="text" name="stevilo" id="stevilo" 
	   value="<?php echo $stevilo; ?>"> <?php echo $skrito; ?>
	
<input type="hidden" name="skrito" value="<?php echo $skrito; ?>">
<input type="hidden" name="stevec" value="<?php echo $stevec; ?>">
<input type="submit" value="Oddaj">

</form>
Poskusili ste <?php echo $stevec ?> krat.


<?php
	
function preveri_zadetek($skrito, $stevilo) {
	
	if($stevilo == $skrito) {
		return "Bravo!";
		
	} elseif ($stevilo > $skrito) {
		return "Vnesli ste preveliko število!";	
		
	} elseif( $stevilo < $skrito) {
		return "Vnesli ste premajhno število!";
	}
	
}




