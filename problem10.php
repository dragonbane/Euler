<?php

	$total = 0;
	$x = 1;
	while($x < 2000000){
		$x++;
		if(isPrime($x) == true){
			echo "x: ".$x."\r";
			$total = $total + $x;
		}
	}

	echo "Total: ".$total."\r\n";


	function isPrime($num) {
	    //1 is not prime. See: http://en.wikipedia.org/wiki/Prime_number#Primality_of_one
	    if($num == 1)
	        return false;

	    //2 is prime (the only even number that is prime)
	    if($num == 2)
	        return true;

	    /**
	     * if the number is divisible by two, then it's not prime and it's no longer
	     * needed to check other even numbers
	     */
	    if($num % 2 == 0) {
	        return false;
	    }

	    /**
	     * Checks the odd numbers. If any of them is a factor, then it returns false.
	     * The sqrt can be an aproximation, hence just for the sake of
	     * security, one rounds it to the next highest integer value.
	     */
	    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
	        if($num % $i == 0)
	            return false;
	    }

	    return true;
	}
?>