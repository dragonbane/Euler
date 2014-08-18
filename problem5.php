<?php
	
	$i = false;
	$x = 20;
	while($i == false){
		for($y = 1; $y <= 20; $y++){
			if(($x % $y) == 0){
				$i = true;
			} else {
				$i = false;
				break;
			}
		}
		$x++;
	}

	echo "Value: ".($x - 1)."\r\n";
	
?>