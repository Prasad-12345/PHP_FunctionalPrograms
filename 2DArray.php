<?php
    function twoDimensionalArray(){
        $numOfColumn = readline("Enter number of column: ");
        $numOfRow = readline("Enter number of row: ");
        $array = array();
        
        //input the elements of an array
        for($i = 0; $i < $numOfColumn; $i++){
            for($j = 0; $j < $numOfRow; $j++){
                $array[$i][$j] = readline("Enter value : ");
            }
        }
    
        //to print 2d array
        for($i = 0; $i < $numOfColumn; $i++){
            for($j = 0; $j < $numOfRow; $j++){
                echo $array[$i][$j] . " ";
            }
            echo "\n";
        }
    }
   
    twoDimensionalArray();
?>