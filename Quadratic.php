<?php
    function findRoots(){
		//user input
        $a = readline("Enter value of a :");
		$b = readline("Enter value of b :");
        $c = readline("Enter value of c :");
		$root1 = 0;
        $root2 = 0;
	    $delta = ($b*$b) - (4*$a*$c);
		//conditions to find the root of equation
	    if ($delta > 0) {
	    	$root1 = (-$b + sqrt($delta))/2*$a;
	    	$root2 = (-$b - sqrt($delta))/2*$a;
	    	echo "The roots of equation are" . " " . $root1 . " " . "and" . $root2;
	     }
	    elseif ($delta == 0) {
	    	$root1 = -$b/(2*$a);
	    	$root2 = -$b/(2*$a);
	    	echo "The roots of equation are" . " " . $root1 . " " . "and" . $root2;
	     }
	    else {
	    	$x = -$b/(2*$a);
	    	$y = sqrt(-$delta)/2*$a;
	    	echo "Roots are" . $x . "+" . $y . "i" . " " . "and" . " " . $x . "-" . $y . "i";
	     }
    }

    findRoots();
?>