<?php


	$sumsquare = 0;
	for($x = 1; $x <= 100; $x++){
		//echo "x: ".$x." = ".pow($x, 2)."\r\n";
		$sumsquare = $sumsquare + pow($x, 2);
		$squaresum = $squaresum + $x;
	}

	echo $sumsquare."\r\n";
	echo pow($squaresum, 2)."\r\n";
	echo pow($squaresum, 2) - $sumsquare."\r\n";

?>