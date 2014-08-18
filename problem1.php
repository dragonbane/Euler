<?php

	$total = 0;

	for($i = 1; $i <= 999; $i++)
	{
		if(($i % 3) == 0 || ($i % 5) == 0){
			echo "Value: ".$i."\r\n";
			$total = $total + $i;
		}
	}

	echo "\r\nTotal: ".$total."\r\n";

?>
