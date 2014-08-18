<?php
	
	$total = 0;

	$n = 1;
	$p = 0;
	for($i = 1;$i <= 50; $i++){
		$o = $n + $p;
		if($o >= 4000000){
			break;
		}
		echo $o.", ";
		$p = $n;
		$n = $o;

		if(($o % 2) == 0){
			$total = $total + $o;
		}

			}

	echo "\r\n\r\nTotal: ".$total."\r\n";

?>