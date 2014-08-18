<?php
	
	$value = 0;
	$hvalue = 0;
	for($x = 100; $x <= 999; $x++){
		for($y = 100; $y <=999; $y++){

			$value = $x * $y;
			if(strcmp($value, strrev($value)) == 0){
				if($value > $hvalue){
					$hvalue = $value;
					echo "Value: ".$hvalue."\r\n";
				}
			}
		}
	}

?>