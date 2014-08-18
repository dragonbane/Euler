<?php
	$limit = 100;
	while($test == false){
		for($c = 4;$c < $limit;$c++){
			for($b = 2; $b < $c; $b++){
				for($a = 1; $a < $b; $a++){
					if((pow($a,2) + pow($b, 2)) == pow($c, 2)){
						if(($a + $b + $c) == 1000){
							echo $a.", ".$b.", ".$c."\r\n";
							$test = true;
						}
					}					
				}
			}
		}
		$limit++;
		if(($limit % 100) == 0){
			echo "Current Limit: ".$limit."\r\n";
		}
	}

?>