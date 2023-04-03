<?php
  
	// get the three messurements from the textfields
	$aSide = $_POST['aSide'];
	$bSide = $_POST['bSide'];
  $height = $_POST['height'];

	// calculate the pay
  $volume = 1/6 * ($aSide * $bSide * $height);
?>
<?php echo "<h3>Results:</h3>
  The volume of your triangular piramid is " . round($volume, 2) . "cm<sup>3</sup>."
?>