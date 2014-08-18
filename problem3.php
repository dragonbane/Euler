<?php

	$values = array();

	for($i = 1; $i <= 600851475143; $i++){
		if((600851475143 % $i) == 0){
			echo "Value: ".$i."\r\n";

			$values[] = $i;
		}
	}

	$total = 1;
	for($i = 0;$i <= count($values); $i++){
		$total = $total * $values[$i];
		echo "Running Total: ".$total."\r\n";
	}
?>