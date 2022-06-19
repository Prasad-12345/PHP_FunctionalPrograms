<?php
    function findTriplets(){
        $arrLength = readline("Enter length of an array :");
        $array = array();
        $count = 0;

        //input the elements in array
        for($i = 0; $i < $arrLength; $i++){
            $array[$i] = readline("Enter value :"); 
        }

        //to find the triplets in array
        for($a = 0; $a < $arrLength - 2; $a++){
            for($b = $a + 1; $b < $arrLength - 1; $b++){
                for($c = $b + 1; $c < $arrLength; $c++){
                    if($array[$a] + $array[$b] + $array[$c] == 0){
                        echo "Triplets : " . " " . $array[$a] . "," . " " . $array[$b] . "," . " " . $array[$c] . "\n";
                        $count = $count + 1;
                    }
                }
            }
        }
        echo "Number of triplets are :" . $count;
    }
    
    findTriplets();
?>