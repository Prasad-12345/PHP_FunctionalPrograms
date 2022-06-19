<?php
    function windChill(){
        $t = readline("Enter temperature :");
        $v = readline("Enter wind speed :");

        //to calculate effective teperature
        if($t <= 50 && $v <= 120 && $v >= 3){
            $w = 35.74 + (0.625 * $t) +((0.4275 * $t) - 35.75) * pow($v, 0.16);
            echo "Effective temperature to be :" . $w;
        }
        else{
            echo "Enter the values of temperature and wind speed within range";
        }
    }

    windChill();
?>