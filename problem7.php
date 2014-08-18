<?php

	$count = 0;
	$x = 1;
	while($count < 10001){
		$x++;
		$test = true;
		for($y = 2;$y < $x; $y++){
			if(($x % $y) == 0){
				$test = false;
				break;
			}
		}
		if($test == true){
			echo "Value: ".$x."\r\n";
			$count++;
		}
	}

?>