<?php
    function calculateEuclideanDistance(){
        //user input
        $x = readline("Enter value of x: ");
        $y = readline("Enter value of y:  ");
        //formula to calculate distance
        $distance = sqrt(pow($x, 2) + pow($y, 2));
        echo "Euclidean distance from point ($x, $y) to origin (0, 0) is: " . $distance;
    }

    calculateEuclideanDistance();
?>